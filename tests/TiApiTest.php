<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TiApiTest extends TestCase
{
    use MakeTiTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTi()
    {
        $ti = $this->fakeTiData();
        $this->json('POST', '/api/v1/tis', $ti);

        $this->assertApiResponse($ti);
    }

    /**
     * @test
     */
    public function testReadTi()
    {
        $ti = $this->makeTi();
        $this->json('GET', '/api/v1/tis/'.$ti->id);

        $this->assertApiResponse($ti->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTi()
    {
        $ti = $this->makeTi();
        $editedTi = $this->fakeTiData();

        $this->json('PUT', '/api/v1/tis/'.$ti->id, $editedTi);

        $this->assertApiResponse($editedTi);
    }

    /**
     * @test
     */
    public function testDeleteTi()
    {
        $ti = $this->makeTi();
        $this->json('DELETE', '/api/v1/tis/'.$ti->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/tis/'.$ti->id);

        $this->assertResponseStatus(404);
    }
}
