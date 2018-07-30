<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory;

use PHPUnit\Framework\TestCase;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaClam;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaCheese;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaDefault;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Store\PizzaStoreNewYork;

class AbstractFactoryTest extends TestCase
{
    public function testAbstractFactory()
    {
        $newYorkStore = new PizzaStoreNewYork();
        $newYorkCheese = $newYorkStore->orderPizza('cheese');
        $newYorkClam = $newYorkStore->orderPizza('clam');
        $newYorkDefault = $newYorkStore->orderPizza('default');
        $this->assertInstanceOf(PizzaClam::class, $newYorkClam);
        $this->assertInstanceOf(PizzaCheese::class, $newYorkCheese);
        $this->assertInstanceOf(PizzaDefault::class, $newYorkDefault);
        $this->assertEquals("Thin dough", $newYorkCheese->getDough()->getDescription());
        $this->assertEquals("Frozen clam", $newYorkClam->getClam()->getDescription());
    }
}
