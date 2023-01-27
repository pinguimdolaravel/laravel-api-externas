<?php

namespace App\Services\SportScore\Facades;

use App\Services\SportScore\Endpoints\Sports;
use App\Services\SportScore\Endpoints\Teams;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Sports sports()
 * @method static Teams teams()
 */
class SportScore extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SportScoreService::class;
    }
}
