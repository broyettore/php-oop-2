<?php

class Other {

    public $name;
    public $price;
    public $dimensions;
    public $material;


    public function __construct(string $_name, int $_price, string $_dimensions, string $_material)
    {
        $this->name = $_name;
        $this->price = "€" . $_price;
        $this->dimensions = $_dimensions;
        $this->material = $_material;
    }

}