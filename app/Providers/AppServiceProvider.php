<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('routeactive', function ($route) {
            return "<?php echo Route::currentRouteNamed($route) ? 'class=\"active nav-item\"' : '' ?>";
        });

        Blade::if('admin', function () {
            //return Auth::user()->isAdmin();
            
            return Auth::check() && Auth::user()->isAdmin();
            
        });
    }
}
