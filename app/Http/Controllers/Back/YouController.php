<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\YouDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateYouRequest;
use App\Http\Requests\Back\UpdateYouRequest;
use App\Repositories\Back\YouRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class YouController extends AppBaseController
{
    /** @var  YouRepository */
    private $youRepository;

    public function __construct(YouRepository $youRepo)
    {
        $this->youRepository = $youRepo;
    }

    /**
     * Display a listing of the You.
     *
     * @param YouDataTable $youDataTable
     * @return Response
     */
    public function index(YouDataTable $youDataTable)
    {
        return $youDataTable->render('back.yous.index');
    }

    /**
     * Show the form for creating a new You.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.yous.create');
    }

    /**
     * Store a newly created You in storage.
     *
     * @param CreateYouRequest $request
     *
     * @return Response
     */
    public function store(CreateYouRequest $request)
    {

        $input = $request->all();

        $you = $this->youRepository->create($input);

        Flash::success('You saved successfully.');

        return redirect(route('admin.yous.index'));
    }

    /**
     * Display the specified You.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $you = $this->youRepository->findWithoutFail($id);

        if (empty($you)) {
            Flash::error('You not found');

            return redirect(route('admin.yous.index'));
        }

        return view('back.yous.show')->with('you', $you);
    }

    /**
     * Show the form for editing the specified You.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $you = $this->youRepository->findWithoutFail($id);

        if (empty($you)) {
            Flash::error('You not found');

            return redirect(route('admin.yous.index'));
        }

        return view('back.yous.edit')->with('you', $you);
    }

    /**
     * Update the specified You in storage.
     *
     * @param  int              $id
     * @param UpdateYouRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateYouRequest $request)
    {
        $you = $this->youRepository->findWithoutFail($id);

        if (empty($you)) {
            Flash::error('You not found');

            return redirect(route('admin.yous.index'));
        }

        $you = $this->youRepository->update($request->all(), $id);

        Flash::success('You updated successfully.');

        return redirect(route('admin.yous.index'));
    }

    /**
     * Remove the specified You from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $you = $this->youRepository->findWithoutFail($id);

        if (empty($you)) {
            Flash::error('You not found');

            return redirect(route('admin.yous.index'));
        }

        $this->youRepository->delete($id);

        Flash::success('You deleted successfully.');

        return redirect(route('admin.yous.index'));
    }
}
