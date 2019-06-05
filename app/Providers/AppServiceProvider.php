<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path('/helpers.php');
        $siteSettings = array();
        foreach (\App\setting::all() as $value) {
            $data = @unserialize($value->value);
            
            if ($value->value === 'b:0;' || $data !== false) {
                $siteSettings[$value->key] = $data;
            } else {
                $siteSettings[$value->key] = $value->value;
            }
        }
        view()->share('site_settings',  $siteSettings);
    }
}