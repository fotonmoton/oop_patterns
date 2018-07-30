<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza;

class PizzaCheese extends AbstractPizza
{
    public function prepare()
    {
        $this->cheese = $this->ingredientFactory->createCheesse();
        $this->dough = $this->ingredientFactory->createDough();
        $this->paperoni = $this->ingredientFactory->createPaperoni();
        $this->veggie = $this->ingredientFactory->createVeggie();
        $this->sauce = $this->ingredientFactory->createSauce();
    }
}
