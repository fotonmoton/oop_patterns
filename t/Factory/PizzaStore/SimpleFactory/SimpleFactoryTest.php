<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactory()
    {
        $store = new PizzaStore(new SimplePizzaFactory());
        $this->assertInstanceOf(PizzaCheese::class, $store->orderPizza("cheese"));
        $this->assertInstanceOf(PizzaGreek::class, $store->orderPizza("greek"));
        $this->assertInstanceOf(PizzaDefault::class, $store->orderPizza("default"));
        $this->assertEquals(10.2, $store->orderPizza("greek")->getPrice());
    }
}
