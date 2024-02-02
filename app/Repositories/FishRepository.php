<?php

namespace App\Repositories;

use App\DTO\ListParamsDTO;
use App\Models\Fish;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FishRepository
{
    /**
     * @param  ListParamsDTO  $dto
     * @return LengthAwarePaginator
     */
    public function list(ListParamsDTO $dto): LengthAwarePaginator {
        return Fish::query()->paginate(
            $dto->limit,
            $dto->columns,
            null,
            $dto->page
        );
    }

    /**
     * @param  int  $id
     * @return Model|Collection|Builder|array|null
     */
    public function find(int $id): Model|Collection|Builder|array|null
    {
        return Fish::query()->find($id);
    }
}
