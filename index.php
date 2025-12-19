<?php

// require_once __DIR__ . '/../pizza-library/src/Pizza.php';
// require_once __DIR__ . '/../pizza-library/src/PizzaStore.php';

require_once __DIR__ . '/src/CheesePizza.php';
require_once __DIR__ . '/src/PepperoniPizza.php';
require_once __DIR__ . '/src/VeggiePizza.php';
require_once __DIR__ . '/src/MyPizzaStore.php';

use PizzaApp\MyPizzaStore;

$store = new MyPizzaStore();

$store->orderPizza('cheese');
echo "\n";
$store->orderPizza('pepperoni');
echo "\n";
$store->orderPizza('veggie');