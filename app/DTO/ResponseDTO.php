<?php

namespace App\DTO;

use App\Interfaces\IDTO;

class ResponseDTO implements IDTO
{
    /**
     * @var bool
     */
    public bool $status;

    /**
     * @var mixed
     */
    public mixed $data;

    /**
     * @param  bool   $status
     * @param  mixed  $data
     */
    public function __construct(
        bool $status,
        mixed $data
    ) {
        $this->status = $status;
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
