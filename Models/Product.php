<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Other.php";

class Product {

    public $img;
    public $name;
    public $animal;
    public $price;

    public function __construct(string $_img, string $_name, string $_animal, int $_price)
    {
        $this->img = $_img;
        $this->name = $_name;
        $this->animal = $_animal;
        $this->price = "€" . $_price;
    }

    function isNumber($_element) {
        if (!is_int($_element)) {
            throw new Exception("Is not a number, please proceed to correct it");
        }
        return $_element;
    }
}