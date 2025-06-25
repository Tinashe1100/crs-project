<?php

namespace App\Providers;

use App\Models\CorruptionType;
use App\Models\Report;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // fetch data from database
        $corruptionTypes = CorruptionType::all();


        // share first set of data - corruptionTypes data
        view()->composer('*', function ($view) use ($corruptionTypes) {
            $view->with('corruptionTypes', $corruptionTypes);
        });

        // share first set of data - cases data
        // view()->composer('*', function ($view) use ($cases) {
        //     $view->with('cases', $cases);
        // });
    }
}
