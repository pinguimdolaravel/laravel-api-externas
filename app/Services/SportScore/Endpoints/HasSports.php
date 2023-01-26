<?php

namespace App\Services\SportScore\Endpoints;

trait HasSports
{
    public function sports()
    {
        return new Sports();
    }
}
