<?php
require_once __DIR__ . "/_partials/foodData/foodAData.php";
require_once __DIR__ . "/_partials/otherData/otherData.php";
require_once __DIR__ . "/_partials/toyData/toyData.php";

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
                    <img src="assets/images/p_2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $puptreat->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $puptreat->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $puptreat->product->price ?>
                            </li>
                            <li>
                                Net Weight:
                            <?php echo $puptreat->product->weight ?>
                            </li>
                            <li>
                                Ingredients:
                                <?php echo $puptreat->product->ingredients[0] ?>,
                                <?php echo $puptreat->product->ingredients[1] ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $puppate->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $puppate->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $puppate->product->price ?>
                            </li>
                            <li>
                                Net Weight:
                            <?php echo $puppate->product->weight ?>
                            </li>
                            <li>
                                Ingredients:
                                <?php echo $puppate->product->ingredients[0] ?>,
                                <?php echo $puppate->product->ingredients[1] ?>
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
                    <img src="assets/images/p_5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $fashionpup->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $fashionpup->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $fashionpup->product->price ?>
                            </li>
                            <li>
                                Material:
                            <?php echo $fashionpup->product->material ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $fashionpup->product->dimensions ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $puphoody->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $puphoody->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $puphoody->product->price ?>
                            </li>
                            <li>
                                Material:
                            <?php echo $puphoody->product->material ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $puphoody->product->dimensions ?>
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
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $catwool->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $catwool->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $catwool->product->price ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $catwool->product->dimensions ?>
                            </li>
                            <li>
                               Description:
                                <?php echo $catwool->product->description ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" style="width: 26rem;">
                    <img src="assets/images/p_9.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">
                        <?php echo $superbone->product->name ?>
                        </h5>
                        <ul>
                            <li>
                                <?php echo $superbone->animal->pet ?>
                            </li>
                            <li>
                                Price:
                            <?php echo $superbone->product->price ?>
                            </li>
                            <li>
                                Dimensions:
                                <?php echo $superbone->product->dimensions ?>
                            </li>
                            <li>
                               Description:
                                <?php echo $superbone->product->description ?>
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