<?php

namespace App\Providers;

use App\Repositories\FishRepository;
use App\Services\Fish\FishModifyFacade;
use App\Services\Fish\FishReadFacade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(FishRepository::class, function () {
            return new FishRepository();
        });

        $this->app->bind(FishModifyFacade::class, function () {
            return new FishModifyFacade();
        });

        $this->app->bind(FishReadFacade::class, function () {
            return new FishReadFacade(
                new FishRepository()
            );
        });
    }
}
