<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Factory;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\SauceHot;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\DoughThin;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\ClamFrozen;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\PaperoniHot;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\VeggieFried;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractClam;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractDough;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractSauce;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\CheeseReggano;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractCheese;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractVeggie;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractPaperoni;

class IngredientFactoryNewYork implements IngredientFactoryInterface
{
    public function createDough(): AbstractDough
    {
        return new DoughThin();
    }

    public function createCheesse(): AbstractCheese
    {
        return new CheeseReggano();
    }

    public function createPaperoni(): AbstractPaperoni
    {
        return new PaperoniHot();
    }

    public function createSauce(): AbstractSauce
    {
        return new SauceHot();
    }

    public function createVeggie(): AbstractVeggie
    {
        return new VeggieFried();
    }

    public function createClam(): AbstractClam
    {
        return new ClamFrozen();
    }
}
