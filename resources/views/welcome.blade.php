<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Laravel Starter</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
<x-nav-bar/>

<div class="px-4 py-5 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="px-4 sm:px-0">
        <h3 class="font-semibold text-gray-900 text-base/7">Weather Dashboard</h3>
    </div>
    <div class="mt-6 border-t border-gray-100">
        <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="font-medium text-gray-900 text-sm/6">Current Temperature</dt>
                <dd class="mt-1 text-gray-700 text-sm/6 sm:col-span-2 sm:mt-0">{{ $weather['current']['temperature_2m'] . $weather['current_units']['temperature_2m'] }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="font-medium text-gray-900 text-sm/6">Current Condition</dt>
                <dd class="mt-1 text-gray-700 text-sm/6 sm:col-span-2 sm:mt-0">{{ $weather['current']['precipitation'] == 0 ? 'Sunny' : $weather['current']['precipitation'] . $weather['current_units']['precipitation'] . ' of precipitation' }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="font-medium text-gray-900 text-sm/6">Humidity</dt>
                <dd class="mt-1 text-gray-700 text-sm/6 sm:col-span-2 sm:mt-0">{{ $weather['current']['relative_humidity_2m'] . $weather['current_units']['relative_humidity_2m'] }}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="font-medium text-gray-900 text-sm/6">Wind Speed</dt>
                <dd class="mt-1 text-gray-700 text-sm/6 sm:col-span-2 sm:mt-0">{{ $weather['current']['wind_speed_10m'] . $weather['current_units']['wind_speed_10m'] }}</dd>
            </div>
        </dl>
    </div>
</div>

@livewireScripts
</body>
</html>
