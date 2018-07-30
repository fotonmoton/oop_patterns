<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaStoreChicago extends AbstractPizzaStore
{
    public function createPizza(string $type) : AbstractPizza
    {
        if ($type == 'cheese') {
            return new PizzaChicagoCheese();
        }
        if ($type == 'greek') {
            return new PizzaChicagoGreek();
        }

        return new PizzaDefault();
    }
}
