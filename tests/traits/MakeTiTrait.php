<?php

use Faker\Factory as Faker;
use App\Models\Back\Ti;
use App\Repositories\Back\TiRepository;

trait MakeTiTrait
{
    /**
     * Create fake instance of Ti and save it in database
     *
     * @param array $tiFields
     * @return Ti
     */
    public function makeTi($tiFields = [])
    {
        /** @var TiRepository $tiRepo */
        $tiRepo = App::make(TiRepository::class);
        $theme = $this->fakeTiData($tiFields);
        return $tiRepo->create($theme);
    }

    /**
     * Get fake instance of Ti
     *
     * @param array $tiFields
     * @return Ti
     */
    public function fakeTi($tiFields = [])
    {
        return new Ti($this->fakeTiData($tiFields));
    }

    /**
     * Get fake data of Ti
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTiData($tiFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'ff' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $tiFields);
    }
}
