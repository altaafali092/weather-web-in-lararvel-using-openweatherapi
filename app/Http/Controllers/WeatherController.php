<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
   
    public function index(Request $request)
    {
      // Defaults to Nepalgunj if no input
        $city = $request->input('city', 'Nepalgunj'); 
    
        $apiKey = '1154ddfc24d9f6c4a19f8dfab813745c';

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");
        $weatherData =  $response->json();

    
        $forecastResponse = Http::get("https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric");
            $forecastData = $forecastResponse->json();
            
        return view('weather.index', compact('weatherData', 'city','forecastData'));
    }
}
