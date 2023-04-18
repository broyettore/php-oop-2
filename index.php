<?php
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/Other.php";
require_once __DIR__ . "/Models/Product.php";


/*********** FOOD   ********* */
$pupcake = new Food(
    "assets/images/p_4.jpg", 
    "My puppy mini-cakes", 
    "Dog",
    25, 
    100, 
    "chocolate, banana",
);

$puptreat = new Food(
    "assets/images/p_2.jpg", 
    "Pup's Chicken-Treats", 
    "Dog",
     20,
     250,
    "chicken", "vitamins"
);

$puppate = new Food(
        "assets/images/p_3.jpg", 
        "Scooby Dough",
        "Dog",
        10, 
        30, 
        "ground meat, chicken-stock",
);

/*********** OTHERS ********* */
$superpup = new Other (
    "assets/images/p_1.jpg",
    "Super Pet Coat",
    "Dog", 
    15, 
    "M", 
    "Cotton",
);

$fashionpup = new Other(
    "assets/images/p_5.jpg",
    "Wealthy Dog Drip",
    "Dog",
    30, 
    "XS", 
    "Flax"
);

$puphoody = new Other(
    "assets/images/p_6.jpg",
    "Slim Shady Doggy", 
    "Dog",
    15, 
    "L", 
    "Wool"
);

/*********** TOYS********* */
$chewypig = new Toy(
        "assets/images/p_7.jpg",
        "Chewy Pig", 
        "Dog/Cat",
        8, 
        "8cm x 16cm", 
        "a Super chewy pig for your puppy",
);

$catwool = new Toy(
    "assets/images/p_8.jpg",
    "Wooly Cat wool",
    "Cat",
    10, 
    "20cm x 20cm", 
    "a wool toy to keep your cat busy"
);

$superbone = new Toy(
    "assets/images/p_9.jpg",
    "Bone n Bones",
    "Dog",
    5, 
    "10cm x 10cm", 
    "toy shaped like a bone, popular among pups"
);

// Array of products 
$productList = [
    $pupcake,
    $puptreat,
    $puppate,
    $superpup,
    $fashionpup,
    $puphoody,
    $chewypig,
    $catwool,
    $superbone,
]

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
                <?php foreach($productList as $product): ?>
                <div class="card mb-3" style="width: 26rem;">
                    <img src=<?php echo $product->img ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $product->animal ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $product->price ?>
                            </li>
                            <li>
                            <?php if(!isset($product->weight)){
                                echo $product->dimensions;
                            } else {
                                echo $product->weight;
                            } ?>
                            </li>
                            <li>
                                <?php if(!isset($product->material) && !isset($product->description)) {
                                        echo $product->ingredients;
                                } elseif (!isset($product->ingredients) && !isset($product->description)) {
                                    echo $product-> material;
                                } elseif (!isset($product->ingredients) && !isset($product->material)) {
                                    echo $product->description;
                                } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <!-- /main  -->

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


