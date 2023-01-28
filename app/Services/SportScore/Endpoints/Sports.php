<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Sports extends BaseEndpoint
{

    public function get(): Collection
    {
        return $this->transform(
            $this->service
                ->refreshToken()
                ->get('/sports')
                ->json('data'),
            Sport::class
        );
    }
}
