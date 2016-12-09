<?php

namespace App\Http\Controllers\API\Back;

use App\Http\Requests\API\Back\CreateTiAPIRequest;
use App\Http\Requests\API\Back\UpdateTiAPIRequest;
use App\Models\Back\Ti;
use App\Repositories\Back\TiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TiController
 * @package App\Http\Controllers\API\Back
 */

class TiAPIController extends AppBaseController
{
    /** @var  TiRepository */
    private $tiRepository;

    public function __construct(TiRepository $tiRepo)
    {
        $this->tiRepository = $tiRepo;
    }

    /**
     * Display a listing of the Ti.
     * GET|HEAD /tis
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tiRepository->pushCriteria(new RequestCriteria($request));
        $this->tiRepository->pushCriteria(new LimitOffsetCriteria($request));
        $tis = $this->tiRepository->all();

        return $this->sendResponse($tis->toArray(), 'Tis retrieved successfully');
    }

    /**
     * Store a newly created Ti in storage.
     * POST /tis
     *
     * @param CreateTiAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTiAPIRequest $request)
    {
        $input = $request->all();

        $tis = $this->tiRepository->create($input);

        return $this->sendResponse($tis->toArray(), 'Ti saved successfully');
    }

    /**
     * Display the specified Ti.
     * GET|HEAD /tis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ti $ti */
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            return $this->sendError('Ti not found');
        }

        return $this->sendResponse($ti->toArray(), 'Ti retrieved successfully');
    }

    /**
     * Update the specified Ti in storage.
     * PUT/PATCH /tis/{id}
     *
     * @param  int $id
     * @param UpdateTiAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTiAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ti $ti */
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            return $this->sendError('Ti not found');
        }

        $ti = $this->tiRepository->update($input, $id);

        return $this->sendResponse($ti->toArray(), 'Ti updated successfully');
    }

    /**
     * Remove the specified Ti from storage.
     * DELETE /tis/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ti $ti */
        $ti = $this->tiRepository->findWithoutFail($id);

        if (empty($ti)) {
            return $this->sendError('Ti not found');
        }

        $ti->delete();

        return $this->sendResponse($id, 'Ti deleted successfully');
    }
}
