<?php

class Food {

    public $name;
    public $price;
    public $weight;
    public $ingredients;

    public function __construct(string $_name, int $_price, int $_weight, array $_ingredients)
    {
        $this->name = $_name;
        $this->price = "€" . $_price;
        $this->weight = $_weight . "g";
        $this->ingredients = $_ingredients;
    }
}