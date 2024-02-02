<?php

namespace App\DTO;

use App\Interfaces\IDTO;

class FishDTO implements IDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var int|null
     */
    public ?int $id;

    public function __construct(string $name, ?int $id = null) {
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
