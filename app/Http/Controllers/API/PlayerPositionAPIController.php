<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePlayerPositionAPIRequest;
use App\Http\Requests\API\UpdatePlayerPositionAPIRequest;
use App\Models\PlayerPosition;
use App\Repositories\PlayerPositionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PlayerPositionController
 * @package App\Http\Controllers\API
 */

class PlayerPositionAPIController extends AppBaseController
{
    /** @var  PlayerPositionRepository */
    private $playerPositionRepository;

    public function __construct(PlayerPositionRepository $playerPositionRepo)
    {
        $this->playerPositionRepository = $playerPositionRepo;
    }

    /**
     * Display a listing of the PlayerPosition.
     * GET|HEAD /playerPositions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $playerPositions = $this->playerPositionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($playerPositions->toArray(), 'Player Positions retrieved successfully');
    }

    /**
     * Store a newly created PlayerPosition in storage.
     * POST /playerPositions
     *
     * @param CreatePlayerPositionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerPositionAPIRequest $request)
    {
        $input = $request->all();

        $playerPosition = $this->playerPositionRepository->create($input);

        return $this->sendResponse($playerPosition->toArray(), 'Player Position saved successfully');
    }

    /**
     * Display the specified PlayerPosition.
     * GET|HEAD /playerPositions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PlayerPosition $playerPosition */
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            return $this->sendError('Player Position not found');
        }

        return $this->sendResponse($playerPosition->toArray(), 'Player Position retrieved successfully');
    }

    /**
     * Update the specified PlayerPosition in storage.
     * PUT/PATCH /playerPositions/{id}
     *
     * @param int $id
     * @param UpdatePlayerPositionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerPositionAPIRequest $request)
    {
        $input = $request->all();

        /** @var PlayerPosition $playerPosition */
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            return $this->sendError('Player Position not found');
        }

        $playerPosition = $this->playerPositionRepository->update($input, $id);

        return $this->sendResponse($playerPosition->toArray(), 'PlayerPosition updated successfully');
    }

    /**
     * Remove the specified PlayerPosition from storage.
     * DELETE /playerPositions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PlayerPosition $playerPosition */
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            return $this->sendError('Player Position not found');
        }

        $playerPosition->delete();

        return $this->sendSuccess('Player Position deleted successfully');
    }
}
