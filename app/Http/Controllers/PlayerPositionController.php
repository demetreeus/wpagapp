<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayerPositionRequest;
use App\Http\Requests\UpdatePlayerPositionRequest;
use App\Repositories\PlayerPositionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PlayerPositionController extends AppBaseController
{
    /** @var  PlayerPositionRepository */
    private $playerPositionRepository;

    public function __construct(PlayerPositionRepository $playerPositionRepo)
    {
        $this->playerPositionRepository = $playerPositionRepo;
    }

    /**
     * Display a listing of the PlayerPosition.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $playerPositions = $this->playerPositionRepository->all();

        return view('player_positions.index')
            ->with('playerPositions', $playerPositions);
    }

    /**
     * Show the form for creating a new PlayerPosition.
     *
     * @return Response
     */
    public function create()
    {
        return view('player_positions.create');
    }

    /**
     * Store a newly created PlayerPosition in storage.
     *
     * @param CreatePlayerPositionRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerPositionRequest $request)
    {
        $input = $request->all();

        $playerPosition = $this->playerPositionRepository->create($input);

        Flash::success('Player Position saved successfully.');

        return redirect(route('playerPositions.index'));
    }

    /**
     * Display the specified PlayerPosition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            Flash::error('Player Position not found');

            return redirect(route('playerPositions.index'));
        }

        return view('player_positions.show')->with('playerPosition', $playerPosition);
    }

    /**
     * Show the form for editing the specified PlayerPosition.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            Flash::error('Player Position not found');

            return redirect(route('playerPositions.index'));
        }

        return view('player_positions.edit')->with('playerPosition', $playerPosition);
    }

    /**
     * Update the specified PlayerPosition in storage.
     *
     * @param int $id
     * @param UpdatePlayerPositionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerPositionRequest $request)
    {
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            Flash::error('Player Position not found');

            return redirect(route('playerPositions.index'));
        }

        $playerPosition = $this->playerPositionRepository->update($request->all(), $id);

        Flash::success('Player Position updated successfully.');

        return redirect(route('playerPositions.index'));
    }

    /**
     * Remove the specified PlayerPosition from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $playerPosition = $this->playerPositionRepository->find($id);

        if (empty($playerPosition)) {
            Flash::error('Player Position not found');

            return redirect(route('playerPositions.index'));
        }

        $this->playerPositionRepository->delete($id);

        Flash::success('Player Position deleted successfully.');

        return redirect(route('playerPositions.index'));
    }
}
