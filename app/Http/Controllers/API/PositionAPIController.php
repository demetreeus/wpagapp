<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePositionAPIRequest;
use App\Http\Requests\API\UpdatePositionAPIRequest;
use App\Models\Position;
use App\Repositories\PositionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PositionController
 * @package App\Http\Controllers\API
 */

class PositionAPIController extends AppBaseController
{
    /** @var  PositionRepository */
    private $positionRepository;

    public function __construct(PositionRepository $positionRepo)
    {
        $this->positionRepository = $positionRepo;
    }

    /**
     * Display a listing of the Position.
     * GET|HEAD /positions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $positions = $this->positionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($positions->toArray(), 'Positions retrieved successfully');
    }

    /**
     * Store a newly created Position in storage.
     * POST /positions
     *
     * @param CreatePositionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePositionAPIRequest $request)
    {
        $input = $request->all();

        $position = $this->positionRepository->create($input);

        return $this->sendResponse($position->toArray(), 'Position saved successfully');
    }

    /**
     * Display the specified Position.
     * GET|HEAD /positions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Position $position */
        $position = $this->positionRepository->find($id);

        if (empty($position)) {
            return $this->sendError('Position not found');
        }

        return $this->sendResponse($position->toArray(), 'Position retrieved successfully');
    }

    /**
     * Update the specified Position in storage.
     * PUT/PATCH /positions/{id}
     *
     * @param int $id
     * @param UpdatePositionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePositionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Position $position */
        $position = $this->positionRepository->find($id);

        if (empty($position)) {
            return $this->sendError('Position not found');
        }

        $position = $this->positionRepository->update($input, $id);

        return $this->sendResponse($position->toArray(), 'Position updated successfully');
    }

    /**
     * Remove the specified Position from storage.
     * DELETE /positions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Position $position */
        $position = $this->positionRepository->find($id);

        if (empty($position)) {
            return $this->sendError('Position not found');
        }

        $position->delete();

        return $this->sendSuccess('Position deleted successfully');
    }
}
