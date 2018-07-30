<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testFactoryMethod()
    {
        $newYorktStore = new PizzaStoreNewYork();
        $chicagoStore = new PizzaStoreChicago();
        $newYorkCheese = $newYorktStore->orderPizza('cheese');
        $chicagoCheese = $chicagoStore->orderPizza('cheese');
        $newYorkGreek = $newYorktStore->orderPizza('greek');
        $chicagoGreek = $chicagoStore->orderPizza('greek');
        $defaultNewYorkPizza = $newYorktStore->createPizza('default');
        $defaultChicagoPizza = $chicagoStore->createPizza('default');
        $this->assertInstanceOf(PizzaNewYorkCheese::class, $newYorkCheese);
        $this->assertInstanceOf(PizzaChicagoCheese::class, $chicagoCheese);
        $this->assertInstanceOf(PizzaDefault::class, $defaultChicagoPizza);
        $this->assertInstanceOf(PizzaDefault::class, $defaultNewYorkPizza);
        $this->assertEquals(10.22, $chicagoGreek->getPrice());
        $this->assertEquals(20.22, $newYorkGreek->getPrice());
    }
}
