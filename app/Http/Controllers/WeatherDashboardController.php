<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\WeatherServiceInterface;

class WeatherDashboardController extends Controller
{
    public function __invoke(WeatherServiceInterface $weatherService)
    {
        return view('welcome')->withWeather(
            $weatherService->getWeatherForecast('35.0844', '106.6504')
        );
    }
}
