<?php

namespace Foton\Patterns\Decorator\StarBuzz;

abstract class AbstractBeverage
{
    protected $price;
    protected $description;

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();
}