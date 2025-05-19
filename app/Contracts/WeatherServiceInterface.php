<?php

declare(strict_types=1);

namespace App\Contracts;

interface WeatherServiceInterface
{
    public function getWeatherForecast(string $latitude, string $longitude): array;
}
