<?php

namespace App\Services\SportScore\Endpoints;

trait HasTeams
{
    public function teams(): Teams
    {
        return new Teams();
    }
}
