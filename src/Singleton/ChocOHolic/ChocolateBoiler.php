<?php

namespace Foton\Patterns\Singleton\ChocOHolic;

class ChocolateBoiler
{
    /**
     * ChocolateBoiler instance
     *
     * @var ChocolateBoiler
     */
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new ChocolateBoiler();
        }
        return self::$instance;
    }
}
