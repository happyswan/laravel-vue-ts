<?php

namespace App\DTO;

use App\Interfaces\IDTO;

class ListParamsDTO implements IDTO
{
    /**
     * @var array
     */
    public array $columns;

    /**
     * @var int
     */
    public int $page;

    /**
     * @var int
     */
    public int $limit;

    /**
     * @param  array  $columns
     * @param  int    $page
     * @param  int    $limit
     */
    public function __construct(
        array $columns = ['*'],
        int $page = 1,
        int $limit = 10
    ) {
        $this->columns = $columns;
        $this->page = $page;
        $this->limit = $limit;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
