<?php

namespace Foton\Patterns\Strategy\Stack;

use \PHPUnit\Framework\TestCase;

class ColumnStringifierTest extends TestCase
{
    public function testStringify()
    {
        $stack = new Stack(new ColumnStringifier());
        $stack->push(10);
        $stack->push(20);
        $stack->push(100);
        $this->assertEquals("10\n20\n100\n", (string)$stack);
    }
}
