<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cart page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
<!--stylesheet-->
 	<link href="css/style.css" rel="stylesheet">
 
<!--google fonts link start -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

<!--font awsome icons cdn starts-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

</head>

<body>

	<?php
		include 'header.php';
	?>

	<section class="container-fluid topbot text-left">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pb-2">
                	<h3>My <span>Cart</span></h3>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 empty-cart">
                	<div class="icon text-secondary">
                    	<div class="background">
                        	<i class="fas fa-cart-arrow-down"></i>
                        	<div class="sad">
                            	<p>Empty <i class="fas fa-frown-open"></i></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 bg-light cart-items">
                	<div class="row">
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 col-xl-2">
                                <a href="productpage.php">
                                    <img src="imgs/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8 col-12 col-sm-8 col-lg-10 col-xl-10">
                                <h5>Noodles</h5>
                                <p>Price:<span class="text-danger"> 150/-</span></p>
                                <a class="btn btn-success" href="buy.php">Buy</a>
                               	<a class="btn btn-danger" href="cartpage.php">Remove</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 bg-light cart-items">
                	<div class="row">
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 col-xl-2">
                                <a href="productpage.php">
                                    <img src="imgs/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8 col-12 col-sm-8 col-lg-10 col-xl-10">
                                <h5>Noodles</h5>
                                <p>Price:<span class="text-danger"> 150/-</span></p>
                                <a class="btn btn-success" href="buy.php">Buy</a>
                               	<a class="btn btn-danger" href="cartpage.php">Remove</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 bg-light cart-items">
                	<div class="row">
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 col-xl-2">
                                <a href="productpage.php">
                                    <img src="imgs/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8 col-12 col-sm-8 col-lg-10 col-xl-10">
                                <h5>Noodles</h5>
                                <p>Price:<span class="text-danger"> 150/-</span></p>
                                <a class="btn btn-success" href="buy.php">Buy</a>
                               	<a class="btn btn-danger" href="cartpage.php">Remove</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 bg-light cart-items">
                	<div class="row">
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 col-xl-2">
                                <a href="productpage.php">
                                    <img src="imgs/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8 col-12 col-sm-8 col-lg-10 col-xl-10">
                                <h5>Noodles</h5>
                                <p>Price:<span class="text-danger"> 150/-</span></p>
                                <a class="btn btn-success" href="buy.php">Buy</a>
                               	<a class="btn btn-danger" href="cartpage.php">Remove</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 bg-light cart-items">
                	<div class="row">
                            <div class="col-md-4 col-12 col-sm-4 col-lg-2 col-xl-2">
                                <a href="productpage.php">
                                    <img src="imgs/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-md-8 col-12 col-sm-8 col-lg-10 col-xl-10">
                                <h5>Noodles</h5>
                                <p>Price:<span class="text-danger"> 150/-</span></p>
                                <a class="btn btn-success" href="buy.php">Buy</a>
                               	<a class="btn btn-danger" href="cartpage.php">Remove</a>
                            </div>
                    </div>
                </div>
                
                
                
                
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 shopmore">
                    <button class="btn btn-success">
                       	<a href="index.php">Order More</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <?php
		include 'footer.php';
	?>

</body>
</html>