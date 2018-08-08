<?php

namespace Foton\Patterns\Singleton\ChocOHolic;

use PHPUnit\Framework\TestCase;

class ChocolateBoilerTest extends TestCase
{
    public function testSingleton()
    {
        $boiler = ChocolateBoiler::getInstance();
        $this->assertInstanceOf(ChocolateBoiler::class, $boiler);
        $sameBoiler = ChocolateBoiler::getInstance();
        $this->assertSame($boiler, $sameBoiler);
    }
}
