<?php

use App\Models\Ti;
use App\Repositories\TiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TiRepositoryTest extends TestCase
{
    use MakeTiTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TiRepository
     */
    protected $tiRepo;

    public function setUp()
    {
        parent::setUp();
        $this->tiRepo = App::make(TiRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTi()
    {
        $ti = $this->fakeTiData();
        $createdTi = $this->tiRepo->create($ti);
        $createdTi = $createdTi->toArray();
        $this->assertArrayHasKey('id', $createdTi);
        $this->assertNotNull($createdTi['id'], 'Created Ti must have id specified');
        $this->assertNotNull(Ti::find($createdTi['id']), 'Ti with given id must be in DB');
        $this->assertModelData($ti, $createdTi);
    }

    /**
     * @test read
     */
    public function testReadTi()
    {
        $ti = $this->makeTi();
        $dbTi = $this->tiRepo->find($ti->id);
        $dbTi = $dbTi->toArray();
        $this->assertModelData($ti->toArray(), $dbTi);
    }

    /**
     * @test update
     */
    public function testUpdateTi()
    {
        $ti = $this->makeTi();
        $fakeTi = $this->fakeTiData();
        $updatedTi = $this->tiRepo->update($fakeTi, $ti->id);
        $this->assertModelData($fakeTi, $updatedTi->toArray());
        $dbTi = $this->tiRepo->find($ti->id);
        $this->assertModelData($fakeTi, $dbTi->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTi()
    {
        $ti = $this->makeTi();
        $resp = $this->tiRepo->delete($ti->id);
        $this->assertTrue($resp);
        $this->assertNull(Ti::find($ti->id), 'Ti should not exist in DB');
    }
}
