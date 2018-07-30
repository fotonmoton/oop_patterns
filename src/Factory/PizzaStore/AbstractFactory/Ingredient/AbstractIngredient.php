<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient;

abstract class AbstractIngredient
{
    /**
     * @var string
     */
    protected $description;

    public function setDescription(string $d)
    {
        $this->description = $d;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
