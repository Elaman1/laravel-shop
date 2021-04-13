<?php namespace App\Classes\LaravelOmnipay;

class LumenOmnipayServiceProvider extends BaseServiceProvider {

	public function boot()
	{
		$this->mergeConfigFrom(realpath(__DIR__.'/../../../config/app.php'), 'laravel-omnipay');
	}

}