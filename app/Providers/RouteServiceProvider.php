<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(Request $req)
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes($req);

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes(Request $req)
    {

        $locale = $req->segment(1);

//        dd($locale);

//        dd($req->path());


//        throw new \Exception(3);

//        Route::delete();





        if (in_array($locale, \Config::get('app.skip_locales')) || !array_key_exists($locale, \Config::get('app.locales'))) {
            Route::group([
                'middleware' => 'web',
                'namespace' => $this->namespace,
            ], function ($router) {
                require base_path('routes/web.php');
            });
        }
        else {

            Route::group([
                'middleware' => 'web',
                'namespace' => $this->namespace,
                'prefix' => $locale
            ], function ($router) {
                require base_path('routes/web.php');
            });
        }


    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {

        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace."\\API",
            'prefix' => 'api',
            'as' => 'api.',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}
