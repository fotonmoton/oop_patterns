<?php

namespace Foton\Patterns\Command\HomeAutomation;

class Light
{
    protected $isOn = false;

    public function turnOn()
    {
        $this->isOn = true;
    }

    public function turnOff()
    {
        $this->isOn = false;
    }

    public function isOn()
    {
        return $this->isOn;
    }
}
