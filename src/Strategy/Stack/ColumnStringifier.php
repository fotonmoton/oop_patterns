<?php

namespace Foton\Patterns\Strategy\Stack;

class ColumnStringifier implements StackStringifierInterface
{
    private $delim = PHP_EOL;

    public function stringify(Stack $stack)
    {
        $string = "";
        foreach ($stack->toArray() as $el) {
            $string .= "$el$this->delim";
        }

        return $string;
    }
}
