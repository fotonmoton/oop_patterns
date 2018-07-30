<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractClam;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient\AbstractDough;
use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Factory\IngredientFactoryInterface;

abstract class AbstractPizza
{
    /**
     * @var AbstractDough
     */
    protected $dough;

    /**
     * @var AbstractCheese
     */
    protected $cheese;

    /**
     * @var AbstractVeggie
     */
    protected $veggie;

    /**
     * @var AbstractPaperoni
     */
    protected $paperoni;

    /**
     * @var AbstractSauce
     */
    protected $sauce;

    /**
     * @var AbstractClam
     */
    protected $clam;

    /**
     * @var IngredientFactoryInterface
     */
    protected $ingredientFactory;

    /**
     * @var string
     */
    protected $description;

    public function __construct(IngredientFactoryInterface $factory)
    {
        $this->ingredientFactory = $factory;
    }

    final public function cut()
    {
        return "cuttiing " . $this->getDescription();
    }

    final public function box()
    {
        return "boxing " . $this->getDescription();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $d)
    {
        $this->description = $d;
    }

    public function getDough() : AbstractDough
    {
        return $this->dough;
    }

    public function getClam() : AbstractClam
    {
        return $this->clam;
    }

    abstract public function prepare();
}
