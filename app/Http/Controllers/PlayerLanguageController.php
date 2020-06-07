<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlayerLanguageRequest;
use App\Http\Requests\UpdatePlayerLanguageRequest;
use App\Repositories\PlayerLanguageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PlayerLanguageController extends AppBaseController
{
    /** @var  PlayerLanguageRepository */
    private $playerLanguageRepository;

    public function __construct(PlayerLanguageRepository $playerLanguageRepo)
    {
        $this->playerLanguageRepository = $playerLanguageRepo;
    }

    /**
     * Display a listing of the PlayerLanguage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $playerLanguages = $this->playerLanguageRepository->all();

        return view('player_languages.index')
            ->with('playerLanguages', $playerLanguages);
    }

    /**
     * Show the form for creating a new PlayerLanguage.
     *
     * @return Response
     */
    public function create()
    {
        return view('player_languages.create');
    }

    /**
     * Store a newly created PlayerLanguage in storage.
     *
     * @param CreatePlayerLanguageRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerLanguageRequest $request)
    {
        $input = $request->all();

        $playerLanguage = $this->playerLanguageRepository->create($input);

        Flash::success('Player Language saved successfully.');

        return redirect(route('playerLanguages.index'));
    }

    /**
     * Display the specified PlayerLanguage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            Flash::error('Player Language not found');

            return redirect(route('playerLanguages.index'));
        }

        return view('player_languages.show')->with('playerLanguage', $playerLanguage);
    }

    /**
     * Show the form for editing the specified PlayerLanguage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            Flash::error('Player Language not found');

            return redirect(route('playerLanguages.index'));
        }

        return view('player_languages.edit')->with('playerLanguage', $playerLanguage);
    }

    /**
     * Update the specified PlayerLanguage in storage.
     *
     * @param int $id
     * @param UpdatePlayerLanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerLanguageRequest $request)
    {
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            Flash::error('Player Language not found');

            return redirect(route('playerLanguages.index'));
        }

        $playerLanguage = $this->playerLanguageRepository->update($request->all(), $id);

        Flash::success('Player Language updated successfully.');

        return redirect(route('playerLanguages.index'));
    }

    /**
     * Remove the specified PlayerLanguage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            Flash::error('Player Language not found');

            return redirect(route('playerLanguages.index'));
        }

        $this->playerLanguageRepository->delete($id);

        Flash::success('Player Language deleted successfully.');

        return redirect(route('playerLanguages.index'));
    }
}
