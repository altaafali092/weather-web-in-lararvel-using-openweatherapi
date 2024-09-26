<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    @vite('resources/css/app.css')
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="font-sans tracking-normal leading-normal bg-blue-100">
    <div class="flex justify-center items-center h-screen">
        <div class="p-6 max-w-sm text-center bg-white rounded-lg shadow-md">

            <form action="{{ url('/weather') }}" method="GET" class="mb-6">
                <input type="text" name="city" placeholder="Enter city name"
                    class="p-2 mb-4 w-full rounded border border-gray-300" value="{{ old('city', $city) }}" required>
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                    Get Weather
                </button>
            </form>

            @if ($weatherData)
                <h1 class="mb-4 text-3xl font-bold">Weather in {{ $weatherData['name'] }}</h1>
                <div class="flex justify-center items-center mb-4">
                    @php
                        $icon = $weatherData['weather'][0]['icon'];
                        $description = $weatherData['weather'][0]['description'];
                    @endphp

                    <img src="http://openweathermap.org/img/wn/{{ $icon }}@2x.png" alt="Weather icon"
                        class="w-20 h-20">
                </div>
                <p class="mb-2 text-xl font-semibold">Temperature: {{ $weatherData['main']['temp'] }}°C</p>
                <p class="text-lg text-gray-700 capitalize">{{ $description }}</p>

                <div class="mt-6">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="mr-2 text-blue-400 fas fa-tint"></i>
                            <p>Humidity: {{ $weatherData['main']['humidity'] }}%</p>
                        </div>
                        <div class="flex items-center">
                            <i class="mr-2 text-gray-400 fas fa-wind"></i>
                            <p>Wind: {{ $weatherData['wind']['speed'] }} m/s</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-center items-center">
                            <i class="mr-2 text-yellow-400 fas fa-cloud-sun"></i>
                            <p>Feels like: {{ $weatherData['main']['feels_like'] }}°C</p>
                        </div>
                    </div>


                </div>
            @else
                <p class="text-red-500">City not found. Please try again.</p>
            @endif
        </div>
    </div>
</body>

</html>
