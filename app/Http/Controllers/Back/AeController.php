<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\AeDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateAeRequest;
use App\Http\Requests\Back\UpdateAeRequest;
use App\Models\Back\Ae;
use App\Repositories\Back\AeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Input;
use Response;

class AeController extends AppBaseController
{
    /** @var  AeRepository */
    private $aeRepository;

    public function __construct(AeRepository $aeRepo)
    {
        $this->aeRepository = $aeRepo;
    }

    /**
     * Display a listing of the Ae.
     *
     * @param AeDataTable $aeDataTable
     * @return Response
     */
    public function index(AeDataTable $aeDataTable)
    {
        return $aeDataTable->render('back.aes.index');
    }

    /**
     * Show the form for creating a new Ae.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.aes.create');
    }

    /**
     * Store a newly created Ae in storage.
     *
     * @param CreateAeRequest $request
     *
     * @return Response
     */
    public function store(CreateAeRequest $request)
    {


        $input = $request->all();


        dd($input);
//
//        if(Input::hasFile('path')) {
//            dd(Input::file('path'));
//        }
//        dd($_REQUEST);

//        $model = new Ae();
//        $model->imageUpload(['path']);
//        dd($model->path);
//        $input['path']=7;
//        $ae = $this->aeRepository->create($input);
//        throw new \Exception(2);
//        dd($ae->id);

        $model = new Ae();
        $model->multiUpload(['path']);
        $model->save();

        Flash::success('Ae saved successfully.');

        return redirect(route('admin.aes.index'));
    }

    /**
     * Display the specified Ae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            Flash::error('Ae not found');

            return redirect(route('admin.aes.index'));
        }

        return view('back.aes.show')->with('ae', $ae);
    }

    /**
     * Show the form for editing the specified Ae.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            Flash::error('Ae not found');

            return redirect(route('admin.aes.index'));
        }

        return view('back.aes.edit')->with('ae', $ae);
    }

    /**
     * Update the specified Ae in storage.
     *
     * @param  int              $id
     * @param UpdateAeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAeRequest $request)
    {
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            Flash::error('Ae not found');

            return redirect(route('admin.aes.index'));
        }

        $ae = $this->aeRepository->update($request->all(), $id);

        Flash::success('Ae updated successfully.');

        return redirect(route('admin.aes.index'));
    }

    /**
     * Remove the specified Ae from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            Flash::error('Ae not found');

            return redirect(route('admin.aes.index'));
        }

        $this->aeRepository->delete($id);

        Flash::success('Ae deleted successfully.');

        return redirect(route('admin.aes.index'));
    }
}
