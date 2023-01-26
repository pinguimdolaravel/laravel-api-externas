<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class BaseEndpoint
{
    protected SportScoreService $service;

    public function __construct()
    {
        $this->service = new SportScoreService();
    }

    protected function transform(mixed $json, string $entity): Collection
    {
        return collect($json)
            ->map(fn ($sport) => new $entity($sport));
    }
}
