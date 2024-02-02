<?php

namespace App\Interfaces;

interface IModelModifier {

    /**
     * @param $dto
     * @return bool
     */
    public function store($dto): bool;

    /**
     * @param $dto
     * @return bool
     */
    public function update($dto): bool;

    /**
     * @param  int  $dto
     * @return bool
     */
    public function destroy(int $dto): bool;

}
