<?php

require_once __DIR__ . "../../../Models/Animal.php";
require_once __DIR__ . "../../../Models/Category.php";
require_once __DIR__ . "../../../Models/Toy.php";

$chewypig = new Category(
    new Other("Chewy Pig", 8, "8cm x 16cm", "a Super chewy pig for your puppy"),
    new Animal("Dog")
);

$catwool = new Category(
    new Other("Wooly Cat wool", 10, "20cm x 20cm", "a wool toy to keep your cat busy"),
    new Animal("Cat")
);

$superbone = new Category(
    new Other("Bone n Bones", 5, "10cm x 10cm", "toy shaped like a bone, popular among pups"),
    new Animal("Dog")
);