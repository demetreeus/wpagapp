<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PlayerLanguage;

class PlayerLanguageApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/player_languages', $playerLanguage
        );

        $this->assertApiResponse($playerLanguage);
    }

    /**
     * @test
     */
    public function test_read_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/player_languages/'.$playerLanguage->id
        );

        $this->assertApiResponse($playerLanguage->toArray());
    }

    /**
     * @test
     */
    public function test_update_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();
        $editedPlayerLanguage = factory(PlayerLanguage::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/player_languages/'.$playerLanguage->id,
            $editedPlayerLanguage
        );

        $this->assertApiResponse($editedPlayerLanguage);
    }

    /**
     * @test
     */
    public function test_delete_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/player_languages/'.$playerLanguage->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/player_languages/'.$playerLanguage->id
        );

        $this->response->assertStatus(404);
    }
}
