<?php

namespace App\Providers;

use App\Http\Controllers\PanelControlador;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;
use Carbon\Carbon;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register(): void
	{
		//
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{
		$panel = new PanelControlador();
		$insurences = $panel->get_insurences();
		Carbon::setLocale(config('app.locale'));
		Facades\View::composer('layouts.includes.aside', function (View $view) use ($insurences) {
			$view->with('insurences', $insurences);
		});


	}
}
