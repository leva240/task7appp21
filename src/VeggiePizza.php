<?php

namespace PizzaApp;

use PizzaLibrary\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            name: "Овощная",
            sauce: "Сливочный чесночный",
            toppings: ["Болгарский перец", "Шампиньоны", "Лук", "Оливки"]
        );
    }
}