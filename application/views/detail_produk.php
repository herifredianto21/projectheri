<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E.Restaurant</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
		<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    </head>
    <style>
        .product-detail
        {
            width: 650px;
        }
    </style>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">E-Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Detail</h1>
                </div>
            </div>
        </header>


        <!-- <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?php echo $produk->meals[0]->strMealThumb; ?>" alt="Meals">
                                <div class="card-body p-4">
                                    <p class="card-text"><b><?php echo $produk->meals[0]->strCategory; ?></b><br> <?php echo $produk->meals[0]->strMeal; ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo site_url('') ?>">Add</a></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <div class="container mt-5">
            <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
                <!-- product -->
                <div class="product-content product-wrap clearfix">
                    <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="product-image"> 
                                    <img class="card-img-top" src="<?php echo   $produk->meals[0]->strMealThumb; ?>" alt="Category"> 
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-category">
                                    <p class="card-text"><b><?php echo $produk->meals[0]->strCategory; ?></b><br> <?php echo $produk->meals[0]->strMeal; ?></p>
                                </div>
                                <div class="product-detail">
                                    <?php echo $produk->meals[0]->strInstructions; ?></p>
                                </div>
                            <div class="product-info smart-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"> 
                                        <a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end product -->
            </div>
        </div>
        

    <!-- <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?php echo   $produk->meals[0]->strMealThumb; ?>" alt="Category">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                    <p class="card-text"><b><?php echo $produk->meals[0]->strCategory; ?></b><br> <?php echo $produk->meals[0]->strMeal; ?></p>                                
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add</a></div>
                                </div>
                                <div class="conteiner">
                        <h2>adasdasdas</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->

    <hr>
    <center><h2>Random Meals</h2></center>


    <section class="py-5">
            <div class="container px-2 px-lg-3 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php for($i=0; $i<3; $i++) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?php echo $kategori->categories[$i]->strCategoryThumb; ?>" alt="Category">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <p class="card-text"><b><?php echo $kategori->categories[$i]->strCategory; ?></b>                                
                                    </div>
                                </div>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add</a></div>
                                </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </section>

        <!-- <div class="text-center text-black">
            <h1 class="">No 2</h1>
        </div>
        <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $produk->meals[0]->strMealThumb; ?>" alt="Meals">
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $produk->meals[0]->strCategory; ?></b><br> <?php echo $produk->meals[0]->strMeal; ?></p>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- <div class="text-center text-black">
            <h1 class="">No 4</h1>
        </div>
        <section class="py-5">
        <?php for($i=0; $i<14; $i++) { ?>
       
            <div class="container px-4 px-lg-5">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="<?php echo $kategori->categories[$i]->strCategoryThumb; ?>" alt="Category">
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $kategori->categories[$i]->strCategory; ?></b><br> <?php echo $kategori->categories[$i]->strCategoryDescription; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </section> -->

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
