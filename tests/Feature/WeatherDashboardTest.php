<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class WeatherDashboardTest extends TestCase
{
    public function testPageHasCorrectLabelsForData()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Weather Dashboard')
            ->assertSee('Current Temperature')
            ->assertSee('Current Condition')
            ->assertSee('Humidity')
            ->assertSee('Wind Speed');
    }
}
