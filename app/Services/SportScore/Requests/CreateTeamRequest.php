<?php

namespace App\Services\SportScore\Requests;

use Illuminate\Validation\ValidationData;
use Illuminate\Validation\Validator;
use Nette\Schema\ValidationException;

class CreateTeamRequest
{

    public string $name;

    public ?string $country;

    public ?string $logo;

    public function __construct(string $name, ?string $country = null, ?string $logo = null)
    {
        $this->name    = $name;
        $this->country = $country;
        $this->logo    = $logo;
    }

    public function validate()
    {
        \Illuminate\Support\Facades\Validator::validate([
            'name'    => $this->name,
            'country' => $this->country,
            'logo'    => $this->logo,
        ], [
            'name'    => 'required|string',
            'country' => 'nullable|string',
            'logo'    => 'nullable|string',
        ]);
    }

    public function toArray(): array
    {
        return [
            'name'    => $this->name,
            'country' => $this->country,
            'logo'    => $this->logo,
        ];
    }

    public function validated()
    {
        \Illuminate\Support\Facades\Validator::validate([
            'name'    => $this->name,
            'country' => $this->country,
            'logo'    => $this->logo,
        ], [
            'name'    => 'required|string',
            'country' => 'nullable|string',
            'logo'    => 'nullable|string',
        ]);
    }

}
