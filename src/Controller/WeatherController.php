<?php
// In your controller
namespace App\Controller;

use Cake\Http\Client;
use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;

class WeatherController extends AppController
{
    public function index()
    {

        if($this->request->is('post')){
            $location = $this->request->getData('location');
            var_dump($location);
        }

        $client = new Client();
        // $city = $request->request->get('name');
        // if ($city == null)$city = 'New York';

        $city = 'New York';
        $apiKey = '3C8TRCWYPKSPU83H6U8CJ5CUR';
        // $response = $client->get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=YOUR_API_KEY&units=metric");
        $response = $client->get("https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/$city/?unitGroup=us&key=$apiKey");
        if ($response->isOk()) {
            $weatherData = $response->getJson();
            $this->set('weatherData', $weatherData);
        } else {
            $this->Flash->error('Error fetching weather data from API');
        }
    }
}