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
    <x-nav-bar />

    <div class="px-4 py-5 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="pb-5 border-b border-gray-200">
            <h3 class="text-base font-semibold text-gray-900">Weather Dashboard</h3>
        </div>
        <livewire:weather-dashboard/>
    </div>

    @livewireScripts
</body>
</html>
