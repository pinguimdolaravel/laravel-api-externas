<?php

namespace App\Console\Commands;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Playground command';

    public function handle(): int
    {
        $service = new SportScoreService();
        $sport1 = $service
            ->sports()
            ->get()
            ->first();

        $json    = $service
            ->teams()
            ->fromSport($sport1)
            ->get();


        ds($json);




        return Command::SUCCESS;
    }
}
