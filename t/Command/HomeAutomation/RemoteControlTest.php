<?php

namespace Foton\Patterns\Command\HomeAutomation;

use PHPUnit\Framework\TestCase;

class RemoteControlTest extends TestCase
{
    public function testShouldRunCommand()
    {
        $remote = new RemoteControl();
        $light = new Light();
        $lightOn = function () use ($light) {
            $light->turnOn();
        };
        $lightOff = function () use ($light) {
            $light->turnOff();
        };
        $remote->fillSlot(0, $lightOn, $lightOff);
        $this->assertEquals(false, $light->isOn());
        $remote->pushOnButton(0);
        $this->assertEquals(true, $light->isOn());
        $remote->pushOffButton(0);
        $this->assertEquals(false, $light->isOn());
    }
}
