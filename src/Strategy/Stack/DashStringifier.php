<?php

namespace Foton\Patterns\Strategy\Stack;

class DashStringifier implements StackStringifierInterface
{
    private $delim = '-';

    public function stringify(Stack $stack)
    {
        $string = "";
        $items = $stack->toArray();
        for ($i = 0; $i < count($items) - 1; $i++) {
            $string .= "$items[$i] - ";
        }
        $string .= "$items[$i]";
        return $string;
    }
}
