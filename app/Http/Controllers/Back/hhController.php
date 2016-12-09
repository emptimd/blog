<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\hhDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreatehhRequest;
use App\Http\Requests\Back\UpdatehhRequest;
use App\Repositories\Back\hhRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class hhController extends AppBaseController
{
    /** @var  hhRepository */
    private $hhRepository;

    public function __construct(hhRepository $hhRepo)
    {
        $this->hhRepository = $hhRepo;
    }

    /**
     * Display a listing of the hh.
     *
     * @param hhDataTable $hhDataTable
     * @return Response
     */
    public function index(hhDataTable $hhDataTable)
    {
        return $hhDataTable->render('back.hhs.index');
    }

    /**
     * Show the form for creating a new hh.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.hhs.create');
    }

    /**
     * Store a newly created hh in storage.
     *
     * @param CreatehhRequest $request
     *
     * @return Response
     */
    public function store(CreatehhRequest $request)
    {
        $input = $request->all();

        $hh = $this->hhRepository->create($input);

        Flash::success('Hh saved successfully.');

        return redirect(route('admin.hhs.index'));
    }

    /**
     * Display the specified hh.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hh = $this->hhRepository->findWithoutFail($id);

        if (empty($hh)) {
            Flash::error('Hh not found');

            return redirect(route('admin.hhs.index'));
        }

        return view('back.hhs.show')->with('hh', $hh);
    }

    /**
     * Show the form for editing the specified hh.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hh = $this->hhRepository->findWithoutFail($id);

        if (empty($hh)) {
            Flash::error('Hh not found');

            return redirect(route('admin.hhs.index'));
        }

        return view('back.hhs.edit')->with('hh', $hh);
    }

    /**
     * Update the specified hh in storage.
     *
     * @param  int              $id
     * @param UpdatehhRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehhRequest $request)
    {
        $hh = $this->hhRepository->findWithoutFail($id);

        if (empty($hh)) {
            Flash::error('Hh not found');

            return redirect(route('admin.hhs.index'));
        }

        $hh = $this->hhRepository->update($request->all(), $id);

        Flash::success('Hh updated successfully.');

        return redirect(route('admin.hhs.index'));
    }

    /**
     * Remove the specified hh from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hh = $this->hhRepository->findWithoutFail($id);

        if (empty($hh)) {
            Flash::error('Hh not found');

            return redirect(route('admin.hhs.index'));
        }

        $this->hhRepository->delete($id);

        Flash::success('Hh deleted successfully.');

        return redirect(route('admin.hhs.index'));
    }
}
