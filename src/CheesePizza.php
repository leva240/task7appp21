<?php

namespace PizzaApp;

use PizzaLibrary\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            name: "Маргарита",
            sauce: "Томатный",
            toppings: ["Моцарелла", "Базилик"]
        );
    }
}