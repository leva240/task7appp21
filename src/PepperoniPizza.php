<?php

namespace PizzaApp;

use PizzaLibrary\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            name: "Пепперони",
            sauce: "Острый томатный",
            toppings: ["Пепперони", "Моцарелла", "Орегано"]
        );
    }
}