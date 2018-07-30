<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

class PizzaStore
{
    /**
     * Pizza Factory
     *
     * @var SimplePizzaFactory
     */
    protected $pizzaFactory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->pizzaFactory = $factory;
    }

    public function orderPizza(string $type) : AbstractPizza
    {
        $pizza = $this->pizzaFactory->create($type);

        $pizza->prepare();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
