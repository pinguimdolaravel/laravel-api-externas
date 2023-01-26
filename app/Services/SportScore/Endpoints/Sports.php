<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Sports
{
    private SportScoreService $service;

    public function __construct()
    {
        $this->service = new SportScoreService();
    }

    public function get(): Collection
    {
        return $this->transform(
            $this->service
                ->api
                ->get('/sports')
                ->json('data')
        );
    }

    private function transform(mixed $json): Collection
    {
        return collect($json)
            ->map(fn ($sport) => new Sport($sport));
    }
}
