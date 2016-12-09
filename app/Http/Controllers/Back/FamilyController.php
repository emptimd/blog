<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\FamilyDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateFamilyRequest;
use App\Http\Requests\Back\UpdateFamilyRequest;
use App\Models\Back\Family;
use App\Models\Back\FamilyImages;
use App\Repositories\Back\FamilyRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Input;
use Response;

class FamilyController extends AppBaseController
{
    /** @var  FamilyRepository */
    private $familyRepository;

    public function __construct(FamilyRepository $familyRepo)
    {
        $this->familyRepository = $familyRepo;
    }

    /**
     * Display a listing of the Family.
     *
     * @param FamilyDataTable $familyDataTable
     * @return Response
     */
    public function index(FamilyDataTable $familyDataTable)
    {
        return $familyDataTable->render('back.families.index');
    }

    /**
     * Show the form for creating a new Family.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.families.create');
    }

    /**
     * Store a newly created Family in storage.
     *
     * @param CreateFamilyRequest $request
     *
     * @return Response
     */
    public function store(CreateFamilyRequest $request)
    {
        $input = $request->all();

        $family = $this->familyRepository->create($input);

        //ADD images
        if(Input::hasFile('path')) {
            $model = new FamilyImages();
            $images = $model->multiUpload(['path']);
            $family->images()->createMany($images);
        }


        Flash::success('Family saved successfully.');

        return redirect(route('admin.families.index'));
    }

    /**
     * Display the specified Family.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $family = $this->familyRepository->findWithoutFail($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('admin.families.index'));
        }

        return view('back.families.show')->with('family', $family);
    }

    /**
     * Show the form for editing the specified Family.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $family = $this->familyRepository->findWithoutFail($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('admin.families.index'));
        }

        return view('back.families.edit')->with('family', $family);
    }

    /**
     * Update the specified Family in storage.
     *
     * @param  int              $id
     * @param UpdateFamilyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFamilyRequest $request)
    {

        $family = $this->familyRepository->findWithoutFail($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('admin.families.index'));
        }

        $family = $this->familyRepository->update($request->all(), $id);

        //ADD images
        if(Input::hasFile('path')) {
            if($family->images) {
                foreach($family->images()->get() as $image) {
                    $image->delete();
                }
            }
            $model = new FamilyImages();
            $images = $model->multiUpload(['path']);
            $family->images()->createMany($images);
        }

        Flash::success('Family updated successfully.');

        return redirect(route('admin.families.index'));
    }

    /**
     * Remove the specified Family from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $family = $this->familyRepository->findWithoutFail($id);

        if (empty($family)) {
            Flash::error('Family not found');

            return redirect(route('admin.families.index'));
        }

        $this->familyRepository->delete($id);

        Flash::success('Family deleted successfully.');

        return redirect(route('admin.families.index'));
    }
}
