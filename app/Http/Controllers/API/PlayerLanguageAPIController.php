<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePlayerLanguageAPIRequest;
use App\Http\Requests\API\UpdatePlayerLanguageAPIRequest;
use App\Models\PlayerLanguage;
use App\Repositories\PlayerLanguageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PlayerLanguageController
 * @package App\Http\Controllers\API
 */

class PlayerLanguageAPIController extends AppBaseController
{
    /** @var  PlayerLanguageRepository */
    private $playerLanguageRepository;

    public function __construct(PlayerLanguageRepository $playerLanguageRepo)
    {
        $this->playerLanguageRepository = $playerLanguageRepo;
    }

    /**
     * Display a listing of the PlayerLanguage.
     * GET|HEAD /playerLanguages
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $playerLanguages = $this->playerLanguageRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($playerLanguages->toArray(), 'Player Languages retrieved successfully');
    }

    /**
     * Store a newly created PlayerLanguage in storage.
     * POST /playerLanguages
     *
     * @param CreatePlayerLanguageAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlayerLanguageAPIRequest $request)
    {
        $input = $request->all();

        $playerLanguage = $this->playerLanguageRepository->create($input);

        return $this->sendResponse($playerLanguage->toArray(), 'Player Language saved successfully');
    }

    /**
     * Display the specified PlayerLanguage.
     * GET|HEAD /playerLanguages/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PlayerLanguage $playerLanguage */
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            return $this->sendError('Player Language not found');
        }

        return $this->sendResponse($playerLanguage->toArray(), 'Player Language retrieved successfully');
    }

    /**
     * Update the specified PlayerLanguage in storage.
     * PUT/PATCH /playerLanguages/{id}
     *
     * @param int $id
     * @param UpdatePlayerLanguageAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlayerLanguageAPIRequest $request)
    {
        $input = $request->all();

        /** @var PlayerLanguage $playerLanguage */
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            return $this->sendError('Player Language not found');
        }

        $playerLanguage = $this->playerLanguageRepository->update($input, $id);

        return $this->sendResponse($playerLanguage->toArray(), 'PlayerLanguage updated successfully');
    }

    /**
     * Remove the specified PlayerLanguage from storage.
     * DELETE /playerLanguages/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PlayerLanguage $playerLanguage */
        $playerLanguage = $this->playerLanguageRepository->find($id);

        if (empty($playerLanguage)) {
            return $this->sendError('Player Language not found');
        }

        $playerLanguage->delete();

        return $this->sendSuccess('Player Language deleted successfully');
    }
}
