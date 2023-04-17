<?php

require_once __DIR__ . "/assets/Models/Animal.php";
require_once __DIR__ . "/assets/Models/Food.php";
require_once __DIR__ . "/assets/Models/Other.php";
require_once __DIR__ . "/assets/Models/Toy.php";
require_once __DIR__ . "/assets/Models/Category.php";


$card = new Category(
    new Food("Royal Canin Mini Adult", 45.99, 545, ["prosciutto", "riso"]),
    new Animal("Dog")
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Php E-commerce</title>
</head>
<body>
    <!-- header  -->
    <header>
        <div class="container d-flex justify-content-between align-items-center p-2">
            <div class="title d-flex align-items-center">
                <h1 class="fs-4">My Little Friend</h1>
            </div>
            <nav>
                <ul class="d-flex align-items-center">
                    <li class="p-2 m-2">Services</li>
                    <li class="p-2 m-2">About Us</li>
                    <li class="p-2 m-2">Gallery</li>
                    <li class="p-2 m-2 pe-0 me-0">Contact</li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header  -->

    <!-- main  -->
    <main>
    </main>
    <!-- /main  -->

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>