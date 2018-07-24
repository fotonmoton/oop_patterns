<?php

use Foton\Patterns\Observer\WeatherORama\WeatherData;
use Foton\Patterns\Observer\WeatherORama\WeatherStation;
use Foton\Patterns\Observer\WeatherORama\CurrentConditionsDisplay;

require_once(__DIR__ . '/../../../vendor/autoload.php');

$station = new WeatherStation();
$data = new WeatherData($station);
$display = new CurrentConditionsDisplay($data);
$station->run();