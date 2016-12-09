<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\FamilyImagesDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateFamilyImagesRequest;
use App\Http\Requests\Back\UpdateFamilyImagesRequest;
use App\Repositories\Back\FamilyImagesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FamilyImagesController extends AppBaseController
{
    /** @var  FamilyImagesRepository */
    private $familyImagesRepository;

    public function __construct(FamilyImagesRepository $familyImagesRepo)
    {
        $this->familyImagesRepository = $familyImagesRepo;
    }

    /**
     * Display a listing of the FamilyImages.
     *
     * @param FamilyImagesDataTable $familyImagesDataTable
     * @return Response
     */
    public function index(FamilyImagesDataTable $familyImagesDataTable)
    {
        return $familyImagesDataTable->render('back.family_images.index');
    }

    /**
     * Show the form for creating a new FamilyImages.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.family_images.create');
    }

    /**
     * Store a newly created FamilyImages in storage.
     *
     * @param CreateFamilyImagesRequest $request
     *
     * @return Response
     */
    public function store(CreateFamilyImagesRequest $request)
    {
        $input = $request->all();

        $familyImages = $this->familyImagesRepository->create($input);

        Flash::success('Family Images saved successfully.');

        return redirect(route('admin.familyImages.index'));
    }

    /**
     * Display the specified FamilyImages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $familyImages = $this->familyImagesRepository->findWithoutFail($id);

        if (empty($familyImages)) {
            Flash::error('Family Images not found');

            return redirect(route('admin.familyImages.index'));
        }

        return view('back.family_images.show')->with('familyImages', $familyImages);
    }

    /**
     * Show the form for editing the specified FamilyImages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $familyImages = $this->familyImagesRepository->findWithoutFail($id);

        if (empty($familyImages)) {
            Flash::error('Family Images not found');

            return redirect(route('admin.familyImages.index'));
        }

        return view('back.family_images.edit')->with('familyImages', $familyImages);
    }

    /**
     * Update the specified FamilyImages in storage.
     *
     * @param  int              $id
     * @param UpdateFamilyImagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFamilyImagesRequest $request)
    {
        $familyImages = $this->familyImagesRepository->findWithoutFail($id);

        if (empty($familyImages)) {
            Flash::error('Family Images not found');

            return redirect(route('admin.familyImages.index'));
        }

        $familyImages = $this->familyImagesRepository->update($request->all(), $id);

        Flash::success('Family Images updated successfully.');

        return redirect(route('admin.familyImages.index'));
    }

    /**
     * Remove the specified FamilyImages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $familyImages = $this->familyImagesRepository->findWithoutFail($id);

        if (empty($familyImages)) {
            Flash::error('Family Images not found');

            return redirect(route('admin.familyImages.index'));
        }

        $this->familyImagesRepository->delete($id);

        Flash::success('Family Images deleted successfully.');

        return redirect(route('admin.familyImages.index'));
    }
}
