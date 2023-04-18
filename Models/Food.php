<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {

    public $weight;
    public $ingredients;

    public function __construct(string $_img, string $_name, string $_animal, int $_price, int $_weight, array $_ingredients)
    {
        parent::__construct($_img, $_name, $_animal, $_price);
        $this->weight = $_weight . "g";
        $this->ingredients = $_ingredients;
    }
};
