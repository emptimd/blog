<?php

namespace App\Http\Controllers;

use App\DataTables\TestDatatablesBogdanDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTestDatatablesBogdanRequest;
use App\Http\Requests\UpdateTestDatatablesBogdanRequest;
use App\Repositories\TestDatatablesBogdanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TestDatatablesBogdanController extends AppBaseController
{
    /** @var  TestDatatablesBogdanRepository */
    private $testDatatablesBogdanRepository;

    public function __construct(TestDatatablesBogdanRepository $testDatatablesBogdanRepo)
    {
        $this->testDatatablesBogdanRepository = $testDatatablesBogdanRepo;
    }

    /**
     * Display a listing of the TestDatatablesBogdan.
     *
     * @param TestDatatablesBogdanDataTable $testDatatablesBogdanDataTable
     * @return Response
     */
    public function index(TestDatatablesBogdanDataTable $testDatatablesBogdanDataTable)
    {
        return $testDatatablesBogdanDataTable->render('test_datatables_bogdans.index');
    }

    /**
     * Show the form for creating a new TestDatatablesBogdan.
     *
     * @return Response
     */
    public function create()
    {
        return view('test_datatables_bogdans.create');
    }

    /**
     * Store a newly created TestDatatablesBogdan in storage.
     *
     * @param CreateTestDatatablesBogdanRequest $request
     *
     * @return Response
     */
    public function store(CreateTestDatatablesBogdanRequest $request)
    {
        $input = $request->all();

        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->create($input);

        Flash::success('Test Datatables Bogdan saved successfully.');

        return redirect(route('admin.testDatatablesBogdans.index'));
    }

    /**
     * Display the specified TestDatatablesBogdan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->findWithoutFail($id);

        if (empty($testDatatablesBogdan)) {
            Flash::error('Test Datatables Bogdan not found');

            return redirect(route('admin.testDatatablesBogdans.index'));
        }

        return view('test_datatables_bogdans.show')->with('testDatatablesBogdan', $testDatatablesBogdan);
    }

    /**
     * Show the form for editing the specified TestDatatablesBogdan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->findWithoutFail($id);

        if (empty($testDatatablesBogdan)) {
            Flash::error('Test Datatables Bogdan not found');

            return redirect(route('admin.testDatatablesBogdans.index'));
        }

        return view('test_datatables_bogdans.edit')->with('testDatatablesBogdan', $testDatatablesBogdan);
    }

    /**
     * Update the specified TestDatatablesBogdan in storage.
     *
     * @param  int              $id
     * @param UpdateTestDatatablesBogdanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestDatatablesBogdanRequest $request)
    {
        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->findWithoutFail($id);

        if (empty($testDatatablesBogdan)) {
            Flash::error('Test Datatables Bogdan not found');

            return redirect(route('admin.testDatatablesBogdans.index'));
        }

        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->update($request->all(), $id);

        Flash::success('Test Datatables Bogdan updated successfully.');

        return redirect(route('admin.testDatatablesBogdans.index'));
    }

    /**
     * Remove the specified TestDatatablesBogdan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testDatatablesBogdan = $this->testDatatablesBogdanRepository->findWithoutFail($id);

        if (empty($testDatatablesBogdan)) {
            Flash::error('Test Datatables Bogdan not found');

            return redirect(route('admin.testDatatablesBogdans.index'));
        }

        $this->testDatatablesBogdanRepository->delete($id);

        Flash::success('Test Datatables Bogdan deleted successfully.');

        return redirect(route('admin.testDatatablesBogdans.index'));
    }
}
