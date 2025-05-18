<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;

class OpenMeteoService
{
    public function __construct(private PendingRequest $client)
    {
    }

    public function getWeatherForecast(string $latitude, string $longitude): array
    {
        $response = $this->client->get("?latitude={$latitude}&longitude={$longitude}");

        return $response->json ?? [];
    }
}
