<?php

namespace Foton\Patterns\Observer\WeatherORama;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class CurrentConditionsDisplayTest extends TestCase
{
    /**
     * Weather Station
     *
     * @var WeatherStation
     */
    protected $station;

    /**
     * Weather Data
     *
     * @var WeatherData
     */
    protected $data;

    /**
     * Display Mock
     *
     * @var MockObject|CurrentConditionsDisplay
     */
    protected $display;

    public function setUp()
    {
        $this->station = new WeatherStation();
        $this->data = new WeatherData($this->station);
        $this->display = new CurrentConditionsDisplay($this->data);
    }
    public function testInstanceCreation()
    {
        $this->assertInstanceOf(CurrentConditionsDisplay::class, $this->display);
    }

    public function testDisplay()
    {
        $this->station->run();

        $currTemp = $this->station->currentTemperature();
        $currHum = $this->station->currentHumidity();
        $currPress = $this->station->currentPressure();

        $printedText = "Current temperature is: $currTemp" . PHP_EOL;
        $printedText .= "Current humidity is: $currHum" . PHP_EOL;
        $printedText .= "Current pressure is: $currPress" . PHP_EOL;
        $this->expectOutputString($printedText);
    }
}
