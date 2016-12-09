<?php

namespace App\Http\Controllers\API\Back;

use App\Http\Requests\Back\CreateAeRequest;
use App\Http\Requests\Back\UpdateAeRequest;
use App\Models\Back\Ae;
use App\Repositories\Back\AeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class AeController
 * @package App\Http\Controllers\API\Back
 */

class AeAPIController extends AppBaseController
{
    /** @var  AeRepository */
    private $aeRepository;

    public function __construct(AeRepository $aeRepo)
    {
        $this->aeRepository = $aeRepo;
    }

    /**
     * Display a listing of the Ae.
     * GET|HEAD /aes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aeRepository->pushCriteria(new RequestCriteria($request));
        $this->aeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $aes = $this->aeRepository->all();

        return $this->sendResponse($aes->toArray(), 'Aes retrieved successfully');
    }

    /**
     * Store a newly created Ae in storage.
     * POST /aes
     *
     * @param CreateAeRequest $request
     *
     * @return Response
     */
    public function store(CreateAeRequest $request)
    {
        $input = $request->all();

        $aes = $this->aeRepository->create($input);

        return $this->sendResponse($aes->toArray(), 'Ae saved successfully');
    }

    /**
     * Display the specified Ae.
     * GET|HEAD /aes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ae $ae */
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            return $this->sendError('Ae not found');
        }

        return $this->sendResponse($ae->toArray(), 'Ae retrieved successfully');
    }

    /**
     * Update the specified Ae in storage.
     * PUT/PATCH /aes/{id}
     *
     * @param  int $id
     * @param UpdateAeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAeAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ae $ae */
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            return $this->sendError('Ae not found');
        }

        $ae = $this->aeRepository->update($input, $id);

        return $this->sendResponse($ae->toArray(), 'Ae updated successfully');
    }

    /**
     * Remove the specified Ae from storage.
     * DELETE /aes/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ae $ae */
        $ae = $this->aeRepository->findWithoutFail($id);

        if (empty($ae)) {
            return $this->sendError('Ae not found');
        }

        $ae->delete();

        return $this->sendResponse($id, 'Ae deleted successfully');
    }
}
