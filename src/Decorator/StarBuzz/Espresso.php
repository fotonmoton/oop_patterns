<?php

namespace Foton\Patterns\Decorator\StarBuzz;

class Espresso extends AbstractBeverage
{
    public function cost()
    {
        return $this->price;
    }
}
