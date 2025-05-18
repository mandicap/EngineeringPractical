<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\OpenMeteoService;

class WeatherDashboardController extends Controller
{
    public function __invoke(OpenMeteoService $service)
    {
        return view('welcome')->withWeather(
            $service->getWeatherForecast('52.52', '13.41')
        );
    }
}
