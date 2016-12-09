<?php

namespace App\Http\Controllers\API\Back;

use App\Http\Requests\API\Back\CreateTi2APIRequest;
use App\Http\Requests\API\Back\UpdateTi2APIRequest;
use App\Models\Back\Ti2;
use App\Repositories\Back\Ti2Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class Ti2Controller
 * @package App\Http\Controllers\API\Back
 */

class Ti2APIController extends AppBaseController
{
    /** @var  Ti2Repository */
    private $ti2Repository;

    public function __construct(Ti2Repository $ti2Repo)
    {
        $this->ti2Repository = $ti2Repo;
    }

    /**
     * Display a listing of the Ti2.
     * GET|HEAD /ti2s
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ti2Repository->pushCriteria(new RequestCriteria($request));
        $this->ti2Repository->pushCriteria(new LimitOffsetCriteria($request));
        $ti2s = $this->ti2Repository->all();

        return $this->sendResponse($ti2s->toArray(), 'Ti2S retrieved successfully');
    }

    /**
     * Store a newly created Ti2 in storage.
     * POST /ti2s
     *
     * @param CreateTi2APIRequest $request
     *
     * @return Response
     */
    public function store(CreateTi2APIRequest $request)
    {
        $input = $request->all();

        $ti2s = $this->ti2Repository->create($input);

        return $this->sendResponse($ti2s->toArray(), 'Ti2 saved successfully');
    }

    /**
     * Display the specified Ti2.
     * GET|HEAD /ti2s/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ti2 $ti2 */
        $ti2 = $this->ti2Repository->findWithoutFail($id);

        if (empty($ti2)) {
            return $this->sendError('Ti2 not found');
        }

        return $this->sendResponse($ti2->toArray(), 'Ti2 retrieved successfully');
    }

    /**
     * Update the specified Ti2 in storage.
     * PUT/PATCH /ti2s/{id}
     *
     * @param  int $id
     * @param UpdateTi2APIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTi2APIRequest $request)
    {
        $input = $request->all();

        /** @var Ti2 $ti2 */
        $ti2 = $this->ti2Repository->findWithoutFail($id);

        if (empty($ti2)) {
            return $this->sendError('Ti2 not found');
        }

        $ti2 = $this->ti2Repository->update($input, $id);

        return $this->sendResponse($ti2->toArray(), 'Ti2 updated successfully');
    }

    /**
     * Remove the specified Ti2 from storage.
     * DELETE /ti2s/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ti2 $ti2 */
        $ti2 = $this->ti2Repository->findWithoutFail($id);

        if (empty($ti2)) {
            return $this->sendError('Ti2 not found');
        }

        $ti2->delete();

        return $this->sendResponse($id, 'Ti2 deleted successfully');
    }
}
