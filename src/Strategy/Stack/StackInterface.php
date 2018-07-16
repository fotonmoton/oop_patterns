<?php

namespace Foton\Patterns\Strategy\Stack;

interface StackInterface
{
    public function push($item);
    public function pop();
    public function clear();
}
