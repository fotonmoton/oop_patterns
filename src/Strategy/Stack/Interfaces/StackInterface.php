<?php

namespace Foton\Patterns\Strategy\Stack\Interfaces;

interface StackInterface
{
    public function push($item);
    public function pop();
    public function clear();
}
