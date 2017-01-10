<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\ReffLevelDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateReffLevelRequest;
use App\Http\Requests\Back\UpdateReffLevelRequest;
use App\Repositories\Back\ReffLevelRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ReffLevelController extends AppBaseController
{
    /** @var  ReffLevelRepository */
    private $reffLevelRepository;

    public function __construct(ReffLevelRepository $reffLevelRepo)
    {
        $this->reffLevelRepository = $reffLevelRepo;
    }

    /**
     * Display a listing of the ReffLevel.
     *
     * @param ReffLevelDataTable $reffLevelDataTable
     * @return Response
     */
    public function index(ReffLevelDataTable $reffLevelDataTable)
    {
        return $reffLevelDataTable->render('back.reff_levels.index');
    }

    /**
     * Show the form for creating a new ReffLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.reff_levels.create');
    }

    /**
     * Store a newly created ReffLevel in storage.
     *
     * @param CreateReffLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateReffLevelRequest $request)
    {
        $input = $request->all();

        $reffLevel = $this->reffLevelRepository->create($input);

        Flash::success('Reff Level saved successfully.');

        return redirect(route('admin.reffLevels.index'));
    }

    /**
     * Display the specified ReffLevel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reffLevel = $this->reffLevelRepository->findWithoutFail($id);

        if (empty($reffLevel)) {
            Flash::error('Reff Level not found');

            return redirect(route('admin.reffLevels.index'));
        }

        return view('back.reff_levels.show')->with('reffLevel', $reffLevel);
    }

    /**
     * Show the form for editing the specified ReffLevel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reffLevel = $this->reffLevelRepository->findWithoutFail($id);

        if (empty($reffLevel)) {
            Flash::error('Reff Level not found');

            return redirect(route('admin.reffLevels.index'));
        }

        return view('back.reff_levels.edit')->with('reffLevel', $reffLevel);
    }

    /**
     * Update the specified ReffLevel in storage.
     *
     * @param  int              $id
     * @param UpdateReffLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReffLevelRequest $request)
    {
        $reffLevel = $this->reffLevelRepository->findWithoutFail($id);

        if (empty($reffLevel)) {
            Flash::error('Reff Level not found');

            return redirect(route('admin.reffLevels.index'));
        }

        $reffLevel = $this->reffLevelRepository->update($request->all(), $id);

        Flash::success('Reff Level updated successfully.');

        return redirect(route('admin.reffLevels.index'));
    }

    /**
     * Remove the specified ReffLevel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reffLevel = $this->reffLevelRepository->findWithoutFail($id);

        if (empty($reffLevel)) {
            Flash::error('Reff Level not found');

            return redirect(route('admin.reffLevels.index'));
        }

        $this->reffLevelRepository->delete($id);

        Flash::success('Reff Level deleted successfully.');

        return redirect(route('admin.reffLevels.index'));
    }
}
