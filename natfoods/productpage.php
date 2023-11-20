<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>item page</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
<!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    
  	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

<!--font awsome icons cdn starts-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!--stylesheet-->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
	<?php
		include'header.php';
	?>
	<section class="container-fluid productpadd">
    	<div class="container">
        	<div class="row">
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12">
                    <h3 class="text-left">Food Name</h3>
                </div>
            	<div class="col-md-6 col-12 col-sm-12 col-lg-6 col-xl-6">
                	<div class="cont">
                    	<div class="mySlides">
                      		<img src="imgs/banner-1.jpg" class="img-fluid">
                    	</div>
                        <div class="mySlides">
                          <img src="imgs/banner-2.jpg" class="img-fluid">
                        </div>
                       
                        <div class="row" style="padding-left:15px; margin-top:5px;">
                        	<div class="column">
                            	<img class="demo cursor" src="imgs/banner-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                          	</div>
                          	<div class="column">
                            	<img class="demo cursor" src="imgs/banner-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                          	</div>
                        </div>
                  </div>
        
                </div>
                <div class="col-md-6 col-12 col-sm-12 col-lg-6 col-xl-6 text-left">
                  	<div>
                    	<h5>Food Name</h5>
                        <h6>Ratings : 
                            <span style="color:gold;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p>
                        Noodles are a type of food made from unleavened dough which is rolled flat and cut, stretched or extruded, into long strips or strings. ... Noodles are usually cooked in boiling water, sometimes with cooking oil or salt added. They are also often pan-fried or deep-fried.
                        </p>
                    </div>
                     <div class="row">
                     	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12" style="padding-bottom:28px;">
                        	<span class="text-dark">Price :<strong class="text-danger"> 100/-</strong></span>
                        </div>
                        <div class="col-md-6 col-12 col-sm-12 col-lg-6 col-xl-6 addcart">
                        	<a href="cartpage.php" class="btn cart-buy mb-2">cart</a>
                        </div>
                        <div class="col-md-6 col-12 col-sm-12 col-lg-6 col-xl-6 addcart">
                        	<a href="buy.php" class="btn cart-buy mb-1 bg-danger">buy</a>
                        </div>
                     </div>
                </div>
          	</div>
        </div>
  	</section>

<?php

include 'footer.php';

?>


</body>
<script src="js/productslide.js"></script>
</html>

