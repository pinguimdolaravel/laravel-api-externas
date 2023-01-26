<?php

namespace App\Services\SportScore\Entities;

class Sport
{
    public int $id;

    public string $slug;

    public string $name;

    public array $nameTranslations;

    public function __construct(array $data)
    {
        $this->id               = data_get($data, 'id');
        $this->slug             = data_get($data, 'slug');
        $this->name             = data_get($data, 'name');
        $this->nameTranslations = data_get($data, 'name_translations');
    }
}
