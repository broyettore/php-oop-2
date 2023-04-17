<?php

require_once __DIR__ . "/Animal.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Other.php";

/* Creare classi necessarie per uno shop online con le seguenti caratteristiche:

* L’e-commerce vende prodotti per gli animali.
* I prodotti saranno oltre al cibo, anche giochi e accessori (cucce, guinzagli, lettiere, acquari, etc).

I prodotti possono appartenere a una tra queste categorie:
* Cane, Gatto, Uccelli, Pesci.

Una volta create le classi che descrivono il nostro sistema, instanziate prima tutte le categorie che ci serviranno, poi create alcuni prodotti di differenti categorie e stampateli nella pagina sotto forma di schede. */

class Category {

    public $animal;
    public $product;

    public function __construct($_product, Animal $_animal)
    {
        $this->product = $_product;
        $this->animal = $_animal;
    }
};