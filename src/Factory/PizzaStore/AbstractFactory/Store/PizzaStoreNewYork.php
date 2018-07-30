<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Store;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\AbstractPizza;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaClam;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaCheese;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\PizzaDefault;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Factory\IngredientFactoryNewYork;

class PizzaStoreNewYork extends AbstractPizzaStore
{
    /**
     * Ingredient Factory
     *
     * @var IngredientFactoryInterface
     */
    protected $ingredientFactory;

    public function __construct()
    {
        $this->ingredientFactory = new IngredientFactoryNewYork();
    }

    public function createPizza(string $type) : AbstractPizza
    {
        if ($type == 'cheese') {
            $pizza = new PizzaCheese($this->ingredientFactory);
            $pizza->setDescription("New-York style cheesse pizza");
            return $pizza;
        }
        if ($type == 'clam') {
            $pizza = new PizzaClam($this->ingredientFactory);
            $pizza->setDescription("New-York style calm pizza");
            return $pizza;
        }
        return new PizzaDefault($this->ingredientFactory);
    }
}
