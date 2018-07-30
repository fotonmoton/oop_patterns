<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Factory;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractClam;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractDough;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractSauce;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractCheese;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractVeggie;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractPaperoni;

interface IngredientFactoryInterface
{
    public function createDough() : AbstractDough;
    public function createSauce() : AbstractSauce;
    public function createCheesse() : AbstractCheese;
    public function createVeggie() : AbstractVeggie;
    public function createPaperoni() : AbstractPaperoni;
    public function createClam() : AbstractClam;
}
