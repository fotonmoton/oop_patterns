<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza;

class PizzaClam extends AbstractPizza
{
    public function prepare()
    {
        $this->clam = $this->ingredientFactory->createClam();
        $this->dough = $this->ingredientFactory->createDough();
        $this->cheese = $this->ingredientFactory->createCheesse();
        $this->paperoni = $this->ingredientFactory->createPaperoni();
        $this->sauce = $this->ingredientFactory->createSauce();
    }
}
