<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

class SimplePizzaFactory
{
    public function create(string $type)
    {
        if ($type == 'cheese') {
            return new PizzaCheese();
        }
        if ($type == 'greek') {
            return new PizzaGreek();
        }
        return new PizzaDefault();
    }
}
