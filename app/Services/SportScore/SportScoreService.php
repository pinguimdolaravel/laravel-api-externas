<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use App\Services\SportScore\Endpoints\HasTeams;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 * SportScore Rapid Api Service
 * https://rapidapi.com/tipsters/api/sportscore1
 */
class SportScoreService
{
    use HasSports;
    use HasTeams;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-Rapidapi-Key'  => '7f64c3f7cbmshad9ad7c435454fcp1ea5cfjsn7f6609a8d2d2',
            'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}
