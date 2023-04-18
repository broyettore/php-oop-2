<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/icons.php";

class Toy extends Product {

    use Icon;
    public $dimensions;
    public $description;

    public function __construct(string $_img, string $_name, string $_animal, int $_price, string $_dimensions, string $_description)
    {
        parent::__construct($_img, $_name, $_animal, $_price);
        $this->dimensions = "Dimensions: " . $_dimensions;
        $this->description = "Description: " . $_description;
    }

}