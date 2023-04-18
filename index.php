<?php
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/Other.php";
require_once __DIR__ . "/Models/Product.php";


/*********** FOOD   ********* */
// $pupcake = new Category(
//     new Food("My puppy mini-cakes", 25, 100, ["chocolate", "banana"]),
//     new Animal("Dog")
// );

// $puptreat = new Category(
//     new Food("Pup's Chicken-Treats", 30, 250, ["chicken", "vitamins"]),
//     new Animal("Dog")
// );

// $puppate = new Category(
//     new Food("Scooby Dough", 10, 30, ["ground meat", "chicken-stock"]),
//     new Animal("Dog")
// );

/*********** OTHERS ********* */
// $superpup = new Category(
//     new Other("Super Pet Coat", 15, "M", "Cotton"),
//     new Animal("Dog/Cat")
// );

// $fashionpup = new Category(
//     new Other("Wealthy Dog Drip", 30, "XS", "Flax"),
//     new Animal("Dog")
// );

// $puphoody = new Category(
//     new Other("Slim Shady Doggy", 15, "L", "Wool"),
//     new Animal("Dog")
// );

    /*********** TOYS********* */
// $chewypig = new Category(
//     new Other("Chewy Pig", 8, "8cm x 16cm", "a Super chewy pig for your puppy"),
//     new Animal("Dog")
// );

// $catwool = new Category(
//     new Other("Wooly Cat wool", 10, "20cm x 20cm", "a wool toy to keep your cat busy"),
//     new Animal("Cat")
// );

// $superbone = new Category(
//     new Other("Bone n Bones", 5, "10cm x 10cm", "toy shaped like a bone, popular among pups"),
//     new Animal("Dog")
// );

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
        <div class="container p-2">
            <h2 class="fs-4 ms-h2">E-Shop Products:</h2>
            <div class="products-ctn d-flex justify-content-between flex-wrap">
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $pupcake->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $pupcake->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $pupcake->product->price ?>
                            </li>
                            <li>
                                Net Weight:
                            <?php echo $pupcake->product->weight ?>
                            </li>
                            <li>
                                Ingredients:
                                <?php echo $pupcake->product->ingredients[0] ?>,
                                <?php echo $pupcake->product->ingredients[1] ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_1.jpg" class="card-img-top ms-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $superpup->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $superpup->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $superpup->product->price ?>
                            </li>
                            <li>
                                Material:
                            <?php echo $superpup->product->material ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $superpup->product->dimensions ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $chewypig->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $chewypig->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $chewypig->product->price ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $chewypig->product->dimensions ?>
                            </li>
                            <li>
                               Description:
                                <?php echo $chewypig->product->description ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /main  -->

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>