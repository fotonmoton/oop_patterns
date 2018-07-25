<?php

namespace Foton\Patterns\Decorator\StarBuzz;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * Beverage instance
     *
     * @var AbstractBeverage
     */
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost()
    {
        return $this->beverage->cost() + $this->price;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", with " . $this->description;
    }
}