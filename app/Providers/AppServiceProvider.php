<?php

namespace App\Providers;

use App\Contracts\WeatherServiceInterface;
use App\Services\OpenMeteoService;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register OpenMeteoService as WeatherService and return a new instance.
        $this->app->singleton(WeatherServiceInterface::class, function (Application $app) {
            $client = Http::withOptions([
                'base_uri' => config('services.open_meteo.base_url'),
                'timeout' => config('services.open_meteo.timeout', 10),
                'connect_timeout' => config('services.open_meteo.connect_timeout', 2),
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            return new OpenMeteoService($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
