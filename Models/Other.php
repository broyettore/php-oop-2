<?php
require_once __DIR__ . "/Product.php";

class Other extends Product {

    public $dimensions;
    public $material;


    public function __construct(string $_img, string $_name, string $_animal, int $_price, string $_dimensions, string $_material)
    {
        parent::__construct($_img, $_name, $_animal, $_price);
        $this->dimensions = $_dimensions;
        $this->material = $_material;
    }

}