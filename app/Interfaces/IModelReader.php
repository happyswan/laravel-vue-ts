<?php

namespace App\Interfaces;

use App\DTO\ListParamsDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface IModelReader {

    /**
     * @param  ListParamsDTO  $dto
     * @return LengthAwarePaginator
     */
    public function list(ListParamsDTO $dto): LengthAwarePaginator;

    /**
     * @param  int  $id
     * @return Model|Collection|Builder|array|null
     */
    public function find(int $id): Model|Collection|Builder|array|null;

}
