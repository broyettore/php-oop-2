<?php

class Toy {

    public $name;
    public $price;
    public $dimensions;
    public $description;

    public function __construct(string $_name, int $_price, string $_dimensions, string $_description)
    {
        $this->name = $_name;
        $this->price = "€" . $_price;
        $this->dimensions = $_dimensions;
        $this->description = $_description;
    }

}