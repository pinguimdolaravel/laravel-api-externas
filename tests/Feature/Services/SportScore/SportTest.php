<?php


use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\Facades\SportScore;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

test('', function () {

    Http::fake([
        'https://sportscore1.p.rapidapi.com/*' => Http::response([
            'data' => [
                [
                    'id'                => 1,
                    'name'              => 'Football',
                    'slug'              => 'football',
                    'name_translations' => [
                        'en' => 'Football',
                        'de' => 'Fußball',
                    ],
                ],

            ],
        ]),
    ]);

    $sports = SportScore::sports()->get();

    expect($sports)
        ->toBeInstanceOf(Collection::class)
        ->and($sports->first())
        ->toBeInstanceOf(Sport::class)
        ->and($sports->first()->id)
        ->toBe(1)
        ->and($sports->first()->name)
        ->toBe('Football')
        ->and($sports->first()->slug)
        ->toBe('football')
        ->and($sports->first()->nameTranslations)
        ->toBe([
            'en' => 'Football',
            'de' => 'Fußball',
        ]);
});
