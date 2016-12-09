<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\TiDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateTiRequest;
use App\Http\Requests\Back\UpdateTiRequest;
use App\Repositories\Back\TiRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TiController extends AppBaseController
{
    /** @var  TiRepository */
    private $tiRepository;

    public function __construct(TiRepository $tiRepo)
    {
        $this->tiRepository = $tiRepo;
    }

    /**
     * Display a listing of the Ti.
     *
     * @param TiDataTable $tiDataTable
     * @return Response
     */
    public function index(TiDataTable $tiDataTable)
    {
//        throw new \Exception(12333);

//        dd($this->tiRepository);



        return $tiDataTable->render('back.tis.index');
    }

    /**
     * Show the form for creating a new Ti.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.tis.create');
    }

    /**
     * Store a newly created Ti in storage.
     *
     * @param CreateTiRequest $request
     *
     * @return Response
     */
    public function store(CreateTiRequest $request)
    {
        $input = $request->all();

        $ti = $this->tiRepository->create($input);

        Flash::success('Ti saved successfully.');

        return redirect(route('admin.tis.index'));
    }

    /**
     * Display the specified Ti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            Flash::error('Ti not found');

            return redirect(route('admin.tis.index'));
        }

        return view('back.tis.show')->with('ti', $ti);
    }

    /**
     * Show the form for editing the specified Ti.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            Flash::error('Ti not found');

            return redirect(route('admin.tis.index'));
        }

        return view('back.tis.edit')->with('ti', $ti);
    }

    /**
     * Update the specified Ti in storage.
     *
     * @param  int              $id
     * @param UpdateTiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTiRequest $request)
    {
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            Flash::error('Ti not found');

            return redirect(route('admin.tis.index'));
        }

        $ti = $this->tiRepository->update($request->all(), $id);

        Flash::success('Ti updated successfully.');

        return redirect(route('admin.tis.index'));
    }

    /**
     * Remove the specified Ti from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            Flash::error('Ti not found');

            return redirect(route('admin.tis.index'));
        }

        $this->tiRepository->delete($id);

        Flash::success('Ti deleted successfully.');

        return redirect(route('admin.tis.index'));
    }
}
