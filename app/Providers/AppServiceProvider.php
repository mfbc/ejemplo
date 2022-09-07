<?php

namespace App\Providers;

use App\Models\Solicitud;
use App\Models\Carta;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Relation::enforceMorphMap([
            'carta' => Carta::class,
            'solicitud' => Solicitud::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
