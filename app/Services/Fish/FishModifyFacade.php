<?php

namespace App\Services\Fish;

use App\Interfaces\IModelModifier;
use App\Models\Fish;

class FishModifyFacade implements IModelModifier
{
    /**
     * @param $dto
     * @return bool
     */
    public function store($dto): bool
    {
        Fish::query()->firstOrCreate($dto->toArray());
        return true;
    }

    /**
     * @param $dto
     * @return bool
     */
    public function update($dto): bool
    {
        $fish = Fish::query()->find(data_get($dto, 'id'));
        if(!$fish) return false;

        $fish->fill($dto->toArray());
        $fish->save();

        return true;
    }

    /**
     * @param  int  $id
     * @return bool
     */
    public function destroy(int $id): bool
    {
        $fish = Fish::query()->find($id);
        if(!$fish) return false;

        $fish->delete();
        return true;
    }
}
