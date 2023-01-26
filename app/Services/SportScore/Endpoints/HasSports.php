<?php

namespace App\Services\SportScore\Endpoints;

trait HasSports
{
    public function sports(): Sports
    {
        return new Sports();
    }
}
