<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/icons.php";

class Food extends Product {

    use Icon;
    public $weight;
    public $ingredients;

    public function __construct(string $_img, string $_name, string $_animal, int $_price, int $_weight, string $_ingredients)
    {
        parent::__construct($_img, $_name, $_animal, $_price);
        $this->weight = "Net Weight: " . $_weight . "g";
        $this->ingredients = "Ingredients: " . $_ingredients;
    }

};

