<?php

namespace Foton\Patterns\Strategy\Stack;

use Foton\Patterns\Strategy\Stack\Interfaces\StackInterface;
use Foton\Patterns\Strategy\Stack\Interfaces\StackStringifierInterface;

class Stack implements StackInterface
{
    private $items;

    /**
     * Undocumented variable
     *
     * @var StackStringifierInterface
     */
    private $stringifier;

    public function __construct(StackStringifierInterface $stringifier)
    {
        $this->stringifier = $stringifier;
    }

    public function __toString()
    {
        return $this->stringifier->stringify($this);
    }

    public function toArray()
    {
        return $this->items;
    }

    public function push($item)
    {
        if (!$this->items) {
            $this->items = [];
        }

        array_unshift($this->items, $item);
    }

    public function pop()
    {
        if (!$this->items) {
            return null;
        }

        return array_shift($this->items);
    }

    public function clear()
    {
        $this->items = null;
    }
}
