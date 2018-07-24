<?php

namespace Foton\Patterns\Observer\WeatherORama;

use SplSubject;
use SplObserver;

class WeatherData extends AbstractSubject implements SplObserver
{
    /**
     * Weather Station
     *
     * @var WeatherStation
     */
    private $weatherStation;

    public function __construct(WeatherStation $station)
    {
        parent::__construct();
        $this->weatherStation = $station;
        $this->weatherStation->attach($this);
    }

    public function getTemperature()
    {
        return $this->weatherStation->currentTemperature();
    }
    public function getHumidity()
    {
        return $this->weatherStation->currentHumidity();
    }

    public function getPressure()
    {
        return $this->weatherStation->currentPressure();
    }

    public function update(SplSubject $subject)
    {
        $this->notify();
    }
}
