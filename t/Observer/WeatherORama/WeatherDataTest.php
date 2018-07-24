<?php

namespace Foton\Patterns\Observer\WeatherORama;

use PHPUnit\Framework\TestCase;

class WeatherDataTest extends TestCase
{
    public function testWeatherDataGetters()
    {
        $station = new WeatherStation();
        $data = new WeatherData($station);
        $station->run();
        $this->assertEquals($station->currentTemperature(), $data->getTemperature());
        $this->assertEquals($station->currentHumidity(), $data->getHumidity());
        $this->assertEquals($station->currentPressure(), $data->getPressure());
    }
}
