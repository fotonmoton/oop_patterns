<?php

namespace Foton\Patterns\Strategy\Stack;

class Stack implements StackInterface
{
    private $items;

    /**
     * Undocumented variable
     *
     * @var StackPrinterInterface
     */
    private $printer;

    public function __constructor(StackPrinterInterface $printer)
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print($this->items);
    }

    public function push($item)
    {
    }

    public function pop()
    {
    }

    public function clear()
    {
    }
}
