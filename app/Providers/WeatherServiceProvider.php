<?php
/**
 * Created by Alex Plutin
 * Date: 22.03.2020
 */

namespace App\Providers;

use App\Services\Weather\Interfaces\IWeatherService;
use App\Services\Weather\Yandex\WeatherService;
use Illuminate\Support\ServiceProvider;

/**
 * Class WeatherServiceProvider
 * @package App\Providers
 */
class WeatherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(IWeatherService::class, WeatherService::class);
    }
}