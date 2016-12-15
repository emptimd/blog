<?php

namespace App\Http\Controllers\Back;

use App\DataTables\Back\LanguageDataTable;
use App\Http\Requests\Back;
use App\Http\Requests\Back\CreateLanguageRequest;
use App\Http\Requests\Back\UpdateLanguageRequest;
use App\Models\Back\Language;
use App\Repositories\Back\LanguageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LanguageController extends AppBaseController
{
    /** @var  LanguageRepository */
    private $languageRepository;

    public function __construct(LanguageRepository $languageRepo)
    {
        $this->languageRepository = $languageRepo;
    }

    /**
     * Display a listing of the Language.
     *
     * @param LanguageDataTable $languageDataTable
     * @return Response
     */
    public function index(LanguageDataTable $languageDataTable)
    {
        return $languageDataTable->render('back.languages.index');
    }

    /**
     * Show the form for creating a new Language.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.languages.create');
    }

    /**
     * Store a newly created Language in storage.
     *
     * @param CreateLanguageRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguageRequest $request)
    {
        throw new \Exception(1);
        $input = $request->all();

        $language = $this->languageRepository->create($input);

        Flash::success('Language saved successfully.');

        return redirect(route('admin.languages.index'));
    }

    /**
     * Display the specified Language.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

//        dd((new Language())->getQualifiedKeyName());
//
//        $model = Language::findOrFail($id);
//        dd($model);

        $language = $this->languageRepository->findWithoutFail($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('admin.languages.index'));
        }

        return view('back.languages.show')->with('language', $language);
    }

    /**
     * Show the form for editing the specified Language.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $language = $this->languageRepository->findWithoutFail($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('admin.languages.index'));
        }

        return view('back.languages.edit')->with('language', $language);
    }

    /**
     * Update the specified Language in storage.
     *
     * @param  int              $id
     * @param UpdateLanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguageRequest $request)
    {
        throw new \Exception(123);
        $language = $this->languageRepository->findWithoutFail($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('admin.languages.index'));
        }

        $language = $this->languageRepository->update($request->all(), $id);

        Flash::success('Language updated successfully.');

        return redirect(route('admin.languages.index'));
    }


    /**
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function translate($id)
    {
        $language = $this->languageRepository->findWithoutFail($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('admin.languages.index'));
        }

        return view('back.languages.translate')->with('language', $language);
    }

    /**
     * Remove the specified Language from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $language = $this->languageRepository->findWithoutFail($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('admin.languages.index'));
        }

        $this->languageRepository->delete($id);

        Flash::success('Language deleted successfully.');

        return redirect(route('admin.languages.index'));
    }
}
