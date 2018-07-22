<?php

namespace Foton\Patterns\Strategy\Stack;

use PHPUnit\Framework\TestCase;

class DashStringifierTest extends TestCase
{
    public function testStringify()
    {
        $stack = new Stack(new DashStringifier());
        $stack->push(1);
        $stack->push(100);
        $stack->push(-1);
        $this->assertEquals("-1 - 100 - 1", (string)$stack);
    }
}
