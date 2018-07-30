<?php

namespace Foton\Patterns\Decorator\StarBuzz;

use PHPUnit\Framework\TestCase;

class StarBuzzTest extends TestCase
{
    public function testEspressoCost()
    {
        $espresso = new Espresso();
        $espresso->setPrice(2.22);
        $espresso->setDescription("good ol coffee");
        $this->assertEquals(2.22, $espresso->cost());
        $this->assertEquals("good ol coffee", $espresso->getDescription());
    }

    public function testEspressoWithMilk()
    {
        $espresso = new Espresso();
        $milk = new MilkCondiment($espresso);
        $espresso->setPrice(2.22);
        $espresso->setDescription("good ol coffee");
        $milk->setPrice(0.99);
        $milk->setDescription("sweet milk condiment");
        $this->assertEquals(3.21, $milk->cost());
        $this->assertEquals("good ol coffee, with sweet milk condiment", $milk->getDescription());
    }

    public function testEspressoWithMilkAndWhip()
    {
        $espresso = new Espresso();
        $milk = new MilkCondiment($espresso);
        $whip = new WhipCondiment($milk);
        $espresso->setPrice(2.22);
        $milk->setPrice(0.99);
        $whip->setPrice(0.10);
        $espresso->setDescription("good ol coffee");
        $milk->setDescription("sweet milk condiment");
        $whip->setDescription("giant whip");
        $this->assertEquals(3.31, $whip->cost());
        $this->assertEquals("good ol coffee, with sweet milk condiment, with giant whip", $whip->getDescription());
    }
}
