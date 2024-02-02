<?php

namespace App\Http\Controllers\web;

use App\DTO\FishDTO;
use App\DTO\ListParamsDTO;
use App\DTO\ResponseDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\DestroyRequest;
use App\Http\Requests\FindRequest;
use App\Http\Requests\Fish\FishStoreRequest;
use App\Http\Requests\Fish\FishUpdateRequest;
use App\Http\Requests\ListRequest;
use App\Services\Fish\FishModifyFacade;
use App\Services\Fish\FishReadFacade;

class FishController extends Controller
{
    /**
     * @param  FishModifyFacade  $modifier
     * @param  FishReadFacade    $reader
     */
    public function __construct(
        protected FishModifyFacade $modifier,
        protected FishReadFacade $reader
    ) {}

    /**
     * @param  FishStoreRequest  $request
     * @return array
     */
    public function store(FishStoreRequest $request): array
    {
        $this->modifier->store(new FishDTO(
            data_get($request, 'name')
        ));

        return (new ResponseDTO(
            true,
            null
        ))->toArray();
    }

    /**
     * @param  FishUpdateRequest  $request
     * @return array
     */
    public function update(FishUpdateRequest $request): array
    {
        $id = data_get($request, 'id');
        abort_unless($id, 404);

        $status = $this->modifier->update(new FishDTO(...$request->only([
            'name',
            'id'
        ])));

        return (new ResponseDTO(
            $status,
            null
        ))->toArray();
    }

    /**
     * @param  DestroyRequest  $request
     * @return array
     */
    public function destroy(DestroyRequest $request): array
    {
        $id = data_get($request, 'id');
        abort_unless($id, 404);

        $status = $this->modifier->destroy($id);

        return (new ResponseDTO(
            $status,
            null
        ))->toArray();
    }

    /**
     * @param  ListRequest  $request
     * @return array
     */
    public function list(ListRequest $request): array
    {
        $data = $this->reader->list(new ListParamsDTO(
            ['name'],
            data_get($request, 'page'),
            data_get($request, 'limit'),
        ));
        $status = boolval($data);

        return (new ResponseDTO(
            $status,
            $data
        ))->toArray();
    }

    /**
     * @param  FindRequest  $request
     * @return array
     */
    public function find(FindRequest $request): array
    {
        $id = data_get($request, 'id');
        abort_unless($id, 404);

        $data = $this->reader->find($id);
        $status = boolval($data);

        return (new ResponseDTO(
            $status,
            $data
        ))->toArray();
    }
}
