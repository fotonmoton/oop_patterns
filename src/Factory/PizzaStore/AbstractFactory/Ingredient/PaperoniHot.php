<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient;

class PaperoniHot extends AbstractPaperoni
{
    public function __construct()
    {
        $this->setDescription("Hot paperoni");
    }
}
