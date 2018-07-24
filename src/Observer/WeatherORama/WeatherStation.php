<?php

namespace Foton\Patterns\Observer\WeatherORama;

use SplSubject;

class WeatherStation extends AbstractSubject
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $isRunnig;

    public function __construct()
    {
        parent::__construct();
        $this->isRunnig = false;
    }

    public function currentTemperature()
    {
        return $this->temperature;
    }

    public function currentHumidity()
    {
        return $this->humidity;
    }

    public function currentPressure()
    {
        return $this->pressure;
    }

    public function run()
    {
        $this->temperature = rand(-50, 50);
        $this->humidity = rand(100, 200);
        $this->pressure = rand(20, 40);
        $this->notify();
    }
}
