<?php

namespace Foton\Patterns\Strategy\Stack\Interfaces;

use Foton\Patterns\Strategy\Stack\Stack;

interface StackStringifierInterface
{
    public function stringify(Stack $stack);
}
