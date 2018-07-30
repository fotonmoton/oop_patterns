<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

abstract class AbstractPizza
{
    protected $title;
    protected $price;

    public function setTitle(string $t)
    {
        $this->title = $t;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setPrice(float $p)
    {
        $this->price = $p;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function prepare() : string
    {
        return "preparing " . $this->getTitle() . "...";
    }

    public function cut()
    {
        return "cutting " . $this->getTitle() . "...";
    }

    public function box()
    {
        return "boxing " . $this->getTitle() . "...";
    }
}
