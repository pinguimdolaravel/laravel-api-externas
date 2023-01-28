<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\Entities\Team;
use App\Services\SportScore\Requests\CreateTeamRequest;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Teams extends BaseEndpoint
{
    private ?int $sportId;

    public function fromSport(int|Sport $sport): static
    {
        $this->sportId = $sport instanceof Sport ? $sport->id : $sport;

        return $this;
    }

    public function get(): Collection
    {
        return $this->transform(
            $this->service
                ->api
                ->get('/sports/' . $this->sportId . '/teams')
                ->json('data'),
            Team::class
        );
    }

    public function post(CreateTeamRequest $request): Team
    {
        return $this->transform(
            $this->service
                ->api
                ->post('/sports/' . $this->sportId . '/teams', $request->validated())
                ->json('data'),
            Team::class
        );

    }
}
