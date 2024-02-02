<?php

namespace App\Services\Fish;

use App\DTO\ListParamsDTO;
use App\Interfaces\IModelReader;
use App\Repositories\FishRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class FishReadFacade implements IModelReader
{
    public function __construct(
        protected FishRepository $repository
    ) {}

    /**
     * @param  ListParamsDTO  $dto
     * @return LengthAwarePaginator
     */
    public function list(ListParamsDTO $dto): LengthAwarePaginator
    {
        return $this->repository->list($dto);
    }

    /**
     * @param  int  $id
     * @return Model|Collection|Builder|array|null
     */
    public function find(int $id): Model|Collection|Builder|array|null
    {
        return $this->repository->find($id);
    }
}
