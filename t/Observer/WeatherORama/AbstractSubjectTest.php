<?php

namespace Foton\Patterns\Observer\WeatherORama;

use PHPUnit\Framework\TestCase;

class AbstractSubjectTest extends TestCase
{
    public function testAttachDetachContains()
    {
        $subject = new WeatherStation();
        $observer = new WeatherData($subject);
        $this->assertTrue($subject->contains($observer));
        $subject->detach($observer);
        $this->assertFalse($subject->contains($observer));
    }

    public function testObserverUpdate()
    {
        $subject = new WeatherStation();
        $observerMock = $this->getMockBuilder(WeatherData::class)
                            ->setConstructorArgs([$subject])
                            ->setMethods(['update'])
                            ->getMock();

        $observerMock->expects($this->once())
                ->method('update')
                ->with($this->equalTo($subject));

        $subject->run();
    }
}
