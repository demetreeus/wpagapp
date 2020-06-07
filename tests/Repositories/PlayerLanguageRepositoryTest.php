<?php namespace Tests\Repositories;

use App\Models\PlayerLanguage;
use App\Repositories\PlayerLanguageRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PlayerLanguageRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PlayerLanguageRepository
     */
    protected $playerLanguageRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->playerLanguageRepo = \App::make(PlayerLanguageRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->make()->toArray();

        $createdPlayerLanguage = $this->playerLanguageRepo->create($playerLanguage);

        $createdPlayerLanguage = $createdPlayerLanguage->toArray();
        $this->assertArrayHasKey('id', $createdPlayerLanguage);
        $this->assertNotNull($createdPlayerLanguage['id'], 'Created PlayerLanguage must have id specified');
        $this->assertNotNull(PlayerLanguage::find($createdPlayerLanguage['id']), 'PlayerLanguage with given id must be in DB');
        $this->assertModelData($playerLanguage, $createdPlayerLanguage);
    }

    /**
     * @test read
     */
    public function test_read_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();

        $dbPlayerLanguage = $this->playerLanguageRepo->find($playerLanguage->id);

        $dbPlayerLanguage = $dbPlayerLanguage->toArray();
        $this->assertModelData($playerLanguage->toArray(), $dbPlayerLanguage);
    }

    /**
     * @test update
     */
    public function test_update_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();
        $fakePlayerLanguage = factory(PlayerLanguage::class)->make()->toArray();

        $updatedPlayerLanguage = $this->playerLanguageRepo->update($fakePlayerLanguage, $playerLanguage->id);

        $this->assertModelData($fakePlayerLanguage, $updatedPlayerLanguage->toArray());
        $dbPlayerLanguage = $this->playerLanguageRepo->find($playerLanguage->id);
        $this->assertModelData($fakePlayerLanguage, $dbPlayerLanguage->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_player_language()
    {
        $playerLanguage = factory(PlayerLanguage::class)->create();

        $resp = $this->playerLanguageRepo->delete($playerLanguage->id);

        $this->assertTrue($resp);
        $this->assertNull(PlayerLanguage::find($playerLanguage->id), 'PlayerLanguage should not exist in DB');
    }
}
