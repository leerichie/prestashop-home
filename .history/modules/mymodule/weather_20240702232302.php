<?php

class weather
{
    private $apiKey;
    private $city;

    public function __construct($apiKey, $city)
    {
        $this->apiKey = $apiKey;
        $this->city = $city;        
    }

    public function getWeather()
    {
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$this->city}&appid={$this->apiKey}";
        $weatherData = file_get_contents($apiUrl);

        if ($weatherData) {
            return json_decode($weatherData, true);

            if (isset($weatherData['main']['temp'])) {
                $weatherData['main']['tempC'] = $weatherData['main']['temp'] - 273.15;
        }

            if (isset($weatherData['main']['tempC'])) {
                $weatherData['main']['tempF'] = ($weatherData['main']['tempC'] * 9/5) + 32;
        }

        return $weatherData;
        }

        return null;
    }

    public function convertToFahrenheit($celsius)
    {
        return $celsius * 9 / 5 + 32;
    }

    public function getWeatherIconUrl($iconCode)
    {
        return "http://openweathermap.org/img/wn/{$iconCode}@2x.png";
    }
}