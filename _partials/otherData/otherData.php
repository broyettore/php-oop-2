<?php

require_once __DIR__ . "../../../Models/Animal.php";
require_once __DIR__ . "../../../Models/Category.php";
require_once __DIR__ . "../../../Models/Other.php";

$superpup = new Category(
    new Other("Super Pet Coat", 15, "M", "Cotton"),
    new Animal("Dog/Cat")
);

$fashionpup = new Category(
    new Other("Wealthy Dog Drip", 30, "XS", "Flax"),
    new Animal("Dog")
);

$puphoody = new Category(
    new Other("Slim Shady Doggy", 15, "L", "Wool"),
    new Animal("Dog")
);