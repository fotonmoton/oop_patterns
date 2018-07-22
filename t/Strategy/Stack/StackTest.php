<?php

namespace Foton\Patterns\Strategy\Stack;

class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiatingStack()
    {
        $stack = new Stack(new ColumnStringifier());
        $this->assertInstanceOf(Stack::class, $stack);
    }

    public function testStackPush()
    {
        $stack = new Stack(new ColumnStringifier());
        $stack->push(10);
        $this->assertEquals(10, $stack->pop());
    }

    public function testPop()
    {
        $stack = new Stack(new ColumnStringifier());
        $this->assertEquals(null, $stack->pop());
        $stack->push(10);
        $stack->push(20);
        $this->assertEquals(20, $stack->pop());
        $this->assertEquals(10, $stack->pop());
        $this->assertEquals(null, $stack->pop());
    }

    public function testClear()
    {
        $stack = new Stack(new ColumnStringifier());
        $stack->push(1);
        $stack->clear();
        $this->assertEquals(null, $stack->pop());
    }

    public function testToArray()
    {
        $stack = new Stack(new ColumnStringifier());
        $stack->push(1);
        $stack->push(10);
        $stack->push(22);
        $stackArray = $stack->toArray();
        $this->assertEquals([22, 10, 1], $stackArray);
    }
}
