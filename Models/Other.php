<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/icons.php";

class Other extends Product {

    use Icon;
    public $dimensions;
    public $material;


    public function __construct(string $_img, string $_name, string $_animal, int $_price, string $_dimensions, string $_material)
    {
        parent::__construct($_img, $_name, $_animal, $_price);
        $this->dimensions = "Dimensions: " . $_dimensions;
        $this->material = "Material: " . $_material;
    }

}