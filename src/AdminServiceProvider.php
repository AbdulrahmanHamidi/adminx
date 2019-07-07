<?php


namespace CodCaf\Adminx;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/adminx','adminx');


//        $this->publishes([
//            __DIR__.'/path/to/views' => resource_path('views/vendor/courier'),
//        ]);

        $this->publishes([
            __DIR__ . '/public'=> public_path('/'),
            __DIR__.'/views' => resource_path('views'),
        ]);
    }


    public function register()
    {

    }
}
