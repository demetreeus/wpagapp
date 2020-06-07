<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Repositories\PlayerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Position;
use DB;

class PlayerController extends AppBaseController
{
    /** @var  PlayerRepository */
    private $playerRepository;

    public function __construct(PlayerRepository $playerRepo)
    {
        $this->playerRepository = $playerRepo;
    }

    /**
     * Display a listing of the Player.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $players = $this->playerRepository->all();

        return view('players.index')
            ->with('players', $players);
    }

    /**
     * Show the form for creating a new Player.
     *
     * @return Response
     */
    public function create()
    {
        $languages = Language::all();
        $nationalities = Nationality::all();
        $positions = Position::all();

        return view('players.create', compact('languages', 'nationalities', 'positions'));
    }

    /**
     * Store a newly created Player in storage.
     *
     * @param CreatePlayerRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerRequest $request)
    {
        $input = $request->all();

        if($request->file('photo')){
            $input['photo_path'] = $request->file('photo')->store('public/photos');
        }

        $player = $this->playerRepository->create($input);

        foreach ($input['position'] as $pos) {
            if(!empty($pos)) {
                DB::table('player_positions')->insert([
                  'player_id' => $player->id,
                   'position_id' => intval($pos)
                ]);
            }
        }

        foreach ($input['language'] as $lang) {
            if(!empty($lang)) {
                DB::table('player_languages')->insert([
                    'player_id' => $player->id,
                    'language_id' => intval($lang)
                ]);
            }
        }

        Flash::success('Player saved successfully.');

        return redirect(route('players.index'));
    }

    /**
     * Display the specified Player.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            Flash::error('Player not found');

            return redirect(route('players.index'));
        }

        return view('players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified Player.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            Flash::error('Player not found');

            return redirect(route('players.index'));
        }

        return view('players.edit')->with('player', $player);
    }

    /**
     * Update the specified Player in storage.
     *
     * @param int $id
     * @param UpdatePlayerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerRequest $request)
    {
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            Flash::error('Player not found');

            return redirect(route('players.index'));
        }

        $player = $this->playerRepository->update($request->all(), $id);

        Flash::success('Player updated successfully.');

        return redirect(route('players.index'));
    }

    /**
     * Remove the specified Player from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $player = $this->playerRepository->find($id);

        if (empty($player)) {
            Flash::error('Player not found');

            return redirect(route('players.index'));
        }

        $this->playerRepository->delete($id);

        Flash::success('Player deleted successfully.');

        return redirect(route('players.index'));
    }
}
