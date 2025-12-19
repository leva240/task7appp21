<?php

namespace PizzaApp;

use PizzaLibrary\Pizza;
use PizzaLibrary\PizzaStore;

class MyPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'veggie' => new VeggiePizza(),
            default => throw new \InvalidArgumentException("Неизвестный тип пиццы: $type"),
        };
    }
}