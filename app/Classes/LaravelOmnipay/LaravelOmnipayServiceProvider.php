<?php namespace App\Classes\LaravelOmnipay;

class LaravelOmnipayServiceProvider extends BaseServiceProvider {

    public function boot()
    {
        // Publish config
        $configPath = __DIR__ . '/../../../config/app.php';
        $this->publishes([$configPath => config_path('laravel-omnipay.php')], 'config');
    }

}