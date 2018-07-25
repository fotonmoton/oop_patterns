<?php

require_once(__DIR__ . '/../../../vendor/autoload.php');

use Foton\Patterns\Decorator\StarBuzz\Espresso;
use Foton\Patterns\Decorator\StarBuzz\MilkCondiment;
use Foton\Patterns\Decorator\StarBuzz\WhipCondiment;

$beverage = new Espresso();
$beverage->setPrice(1.23);
$beverage->setDescription("good ol espresso");
$beverage = new MilkCondiment($beverage);
$beverage->setPrice(0.10);
$beverage->setDescription("sweet milk");
$beverage = new WhipCondiment($beverage);
$beverage->setPrice(0.5);
$beverage->setDescription("giant whip");
echo "Your order is: " . $beverage->getDescription() . PHP_EOL;
echo "Price is: $" . $beverage->cost() . PHP_EOL;