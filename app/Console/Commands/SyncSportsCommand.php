<?php

namespace App\Console\Commands;

use App\Services\SportScore\Facades\SportScore;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncSportsCommand extends Command
{
    protected $signature = 'sync:sports';

    protected $description = 'Command description';

    public function handle()
    {

        $this->withProgressBar(SportScore::sports()->get(), function ($user) {
            sleep(1);
        });
    }
}
