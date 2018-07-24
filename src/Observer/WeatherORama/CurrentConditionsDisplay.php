<?php

namespace Foton\Patterns\Observer\WeatherORama;

use SplSubject;
use SplObserver;

class CurrentConditionsDisplay implements SplObserver
{
    /**
     * Weather data
     *
     * @var WeatherData
     */
    private $weaterData;

    public function __construct(WeatherData $data)
    {
        $this->weaterData = $data;
        $this->weaterData->attach($this);
    }

    public function update(SplSubject $subject)
    {
        $this->show();
    }

    public function show()
    {
        $temperature = $this->weaterData->getTemperature();
        $humidity = $this->weaterData->getHumidity();
        $pressure = $this->weaterData->getPressure();
        $toShow = "Current temperature is: $temperature" . PHP_EOL;
        $toShow .= "Current humidity is: $humidity" . PHP_EOL;
        $toShow .= "Current pressure is: $pressure" . PHP_EOL;
        echo $toShow;
    }
}
