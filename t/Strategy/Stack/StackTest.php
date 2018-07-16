<?php

namespace Foton\Patterns\Strategy\Stack;

class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiatingStack()
    {
        $stack = new Stack();
        $this->assertInstanceOf(Stack::class, $stack);
    }
}
