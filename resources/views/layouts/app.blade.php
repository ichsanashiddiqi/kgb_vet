<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex">

        @include('partials.sidebar')

        <div class="flex-1 flex flex-col">
            @include('partials.topbar')

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
