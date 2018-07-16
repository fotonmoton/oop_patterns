<?php

namespace Foton\Patterns\Strategy\Stack;

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
        $this->items[] = $item;
    }

    public function pop()
    {
        if (!$this->items) {
            return null;
        }

        return array_pop($this->items);
    }

    public function clear()
    {
        $this->items = null;
    }
}
