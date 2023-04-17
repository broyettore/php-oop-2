<?php

require_once __DIR__ . "../../../Models/Animal.php";
require_once __DIR__ . "../../../Models/Category.php";
require_once __DIR__ . "../../../Models/Food.php";

$pupcake = new Category(
    new Food("My puppy mini-cakes", 25, 100, ["chocolate", "banana"]),
    new Animal("Dog")
);

$puptreat = new Category(
    new Food("Pup's Chicken-Treats", 30, 250, ["chicken", "vitamins"]),
    new Animal("Dog")
);

$puppate = new Category(
    new Food("Scooby Dough", 10, 30, ["ground meat", "chicken-stock"]),
    new Animal("Dog")
);
