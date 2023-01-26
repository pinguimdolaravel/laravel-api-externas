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
        $json    = $service
            ->sports()
            ->get();

        /** @var Sport $sport1 */
        $sport1 = $json->first();

        ds($sport1->na);

        /** @var Sport $sport */
        foreach ($json as $sport) {
            ds($sport);
        }




        return Command::SUCCESS;
    }
}
