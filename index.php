 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    
<!--linking stylesheet starts-->
    <link href="css/style.css" rel="stylesheet">
	
<!--testimonial links-->
 	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!--google fonts link start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


<!--font awsome icons cdn starts-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>





<body>

<!--modal script-->
<script type="text/javascript">
   /* $(document).ready(function(){
		 $(body).load(function(){
       	 $("#welcomemodal").modal('show');
		 });
    });*/
	
    $(window).on('load', function() {
        $('#welcomemodal').modal('show');
    });

    
</script>


<!--modalpart-->

  <!--<div id="welcomemodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content welcome-content">
            <div class="modal-body p-0 welcomebody">
                <a class="close btns" data-dismiss="modal"><i class="fas fa-times-circle"></i></a>
                <img src="imgs/offer.gif" class="img-fluid">
            </div>
        </div>
    </div>
</div>
-->

<!--header part-->

	<header class="container-fluid bg-primary pt-4" id="headertop">
    	<div class="container">	
        	<div class="row">
                <div class="col-md-7 col-3 col-sm-6 col-lg-8 col-xl-2 logo">
                   <a href="index.php">
                   		<img src="imgs/logo2.png" class="img-fluid" style="height:45px">
                   </a>
                </div>
                <div class="col-md-12 col-11 col-sm-11 col-lg-12 col-xl-8">
                	<div class="row">
                    	<div class="col-10 col-md-11 col-sm-11 col-lg-12 col-xl-12">
                        	<form action="" method="post">
                                <div class="input-group search-bar">
                                  <input type="text" class="form-control bg-light text-DARK" placeholder="search food!!!">
                                  <div class="input-group-append">
                                    <button class="input-group-text text-light bg-success"><i class="fas fa-search p-0"></i></button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        
                        <!--toggle part-->
                        <div class="col-2 col-md-1 col-sm-1 col-lg-12 col-xl-12 toggle">
                            <div id="mySidenav" class="sidenav">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div>
                                    <div class="mb-1">
                                       <div>
                                            <h4 class="text-dark">catagories :</h4>
                                            <h6><a href="catagory.php">Vegitarian</a></h6>
                                            <h6><a href="catagory.php">Non Veg</a></h6>
                                            <h6><a href="catagory.php">Fruits</a></h6>
                                            <h6><a href="catagory.php">Nuts</a></h6>
                                            <h6><a href="catagory.php">protien Rich</a>
                                            <h6><a href="catagory.php">Carb Foods</a></h6>
                                            <h6><a href="catagory.php">Snacks</a></h6>
                                            <h6><a href="catagory.php">Cakes</a></h6>
                                            <h6><a href="catagory.php">Shakes</a></h6>
                                            <h6><a href="catagory.php">Trending</a></h6>
                                            <h6><a href="catagory.php">Pizza</a></h6>
                                       </div>
                                    </div>
                                    
                                </div>
                            </div>
                             <span onclick="openNav()">&#9776;</span>
                        </div>
                    </div>
                </div>
              
                <script>
					function openNav() {
					  document.getElementById("mySidenav").style.width = "100%";
					}
					
					function closeNav() {
					  document.getElementById("mySidenav").style.width = "0";
					}
				</script>
   
                     
              <!--icons part-->
                
                <div class="col-md-5 col-9 col-sm-6 col-lg-4 col-xl-2 usersicons">
                	<div><a href="help.php"><i class="fas fa-question"></i></a></div>
                    <div><a href="cartpage.php"><i class="fas fa-shopping-cart"></i></a></div>
                	<div><a href="login.php"><i class="fas fa-user"></i></a></div>
                    <div><a href="#" id="myBtn"><i class="fas fa-map-marker-alt"></i></a></div>
                    
                    
                    <!-- The Modal box-->
                    <div id="myModal" class="modal">
                    	<div class="modal-content locationmodal bg-light">
                        	<div class="modal-header">
                          		<h6 class="pt-3">Add Location</h6>
                                <span id="locationmodal" class="close" onClick="closemodal()"><i class="fas fa-times-circle"></i></span>
                        	</div>
                            <div class="modal-body">
                            	<div class="row">
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12">
                                    	<form action="" method="post" class="modalloc pt-5 pb-3">
                                        	<div class="input-group">
      											<input type="text" class="form-control" placeholder="add location" />
     											 <div class="input-group-append">
                                                 	<input class="btn btn-success" type="submit" value="add"/>
                                              	 </div>
                                            </div>
                                        </form>
                                        <p>add location to have a better experience with shopping. Wishing you a wonderful day </p>
                                    </div>
                                </div>
                            </div>
                      	</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<script src="js/modal.js"></script>
    
    <!--catagory part-->
    	
	<section class="container-fluid catagory">
    	
        	<div class="row">
                
             
                
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">vegitarian</a></h6>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">non veg</a></h6>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">snacks</a></h6>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">drinks</a></h6>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">cakes</a></h6>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 p-0">
                	<div class="cata">
                    	<h6><a href="catagory.php">pizza</a></h6>
                    </div>
                </div>
                
            </div>
        
    </section>
    
 
   <!--carousal part-->
  	<section class="container-fluid">
    	<div class="row">
        	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 p-0">
                <div id="demo" class="slider carousel slide" data-ride="carousel">
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imgs/banner-1.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>Masala Dosa</h3>
                        <p>A dosa is a thin pancake or crepe originating from South India.</p>
                       <a class="btn btn-success" href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                    <div class="carousel-item">
                       <img src="imgs/banner-2.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>Apples</h3>
                        <p>Apple is a sweet and delicious fruit that is very healthy. It is also a good disease-fighter and we can eat it every day.</p>
                       <a class="btn btn-success" href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/banner-3.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>Buns and Sweets</h3>
                        <p>A bun is a small, usually round, sweet cake. Though they come in many shapes and sizes, buns are most commonly round.</p>
                        <a class="btn btn-success"a href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/banner-4.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>Burgers</h3>
                        <p>A hamburger (or burger for short) is a food, typically considered a sandwich.</p>
                        <a class="btn btn-success" href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/banner-5.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>Nuts vegiess and more</h3>
                        <p>Protein is a macronutrient that is essential to building muscle mass.</p>
                        <a class="btn btn-success" href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="imgs/banner-6.jpg" alt="Los Angeles" class="img-fluid">
                      <div class="carousel-caption">
                        <h3>pizza</h3>
                        <p>A dish made typically of flattened bread dough spread with a savory mixture.</p>
                        <a class="btn btn-success" href="productpage.php">Order Now</a>
                      </div>   
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
            </div>
        </div>
    </section>


<!--top selling part part-->

	<section class="container-fluid bg-danger">
    	<div class="container">
        	<div class="row topbot">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pb-3">
                	<h3 class="text-light">Best <span style="background-color:#FFFFFF; padding:1px 5px;">Selling</span></h3>
                </div>
                	<div class="col-md-6 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <a href="productpage.php">
                            <div class="card text-left p-1">
                               <img src="imgs/img-1.jpg" class="img-fluid">
                               <div class="des text-dark">
                                 <h6 class="m-0">Noodles</h6> 
                                 <p class="m-0">great discount/ 5 star rated</p> 
                               </div>
                            </div>
                        </a>
                    </div>
                	<div class="col-md-6 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <a href="productpage.php">
                            <div class="card text-left p-1">
                               <img src="imgs/img-2.jpg" class="img-fluid">
                               <div class="des text-dark">
                                 <h6 class="m-0">soup</h6> 
                                 <p class="m-0">great discount/ 5 star rated</p> 
                               </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <a href="productpage.php">
                            <div class="card text-left p-1">
                               <img src="imgs/img-7.jpg" class="img-fluid">
                               <div class="des text-dark">
                                 <h6 class="m-0">Biriyani</h6> 
                                 <p class="m-0">great discount/ 5 star rated</p> 
                               </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <a href="productpage.php">
                            <div class="card text-left p-1">
                               <img src="imgs/img-4.jpg" class="img-fluid">
                               <div class="des text-dark">
                                 <h6 class="m-0">Samoosa</h6> 
                                 <p class="m-0">great discount/ 5 star rated</p> 
                               </div>
                            </div>
                        </a>
                    </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 more">
                	<a class="btn btn-dark" href="catagory.php">More</a>
               </div>
            </div>
        </div>
    </section>
	
    
    <!--snacks part-->
     <section class="container-fluid bg-light">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 p-4">
                	<h3 class="text-dark">Best <span>Snacks</span></h3>
                </div>
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pt-2 pb-3">
                    <div class="items">
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Buns / sweets</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Small Cake</h5>
                                         <p>price : 150/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">combo cake</h5>
                                         <p>price : 500/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Buns / sweets</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Cream Buns</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Rose Buns</h5>
                                         <p>price : 200/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">cup cakes combo</h5>
                                         <p>price : 300/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Buns</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/food-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Cream Buns</h5>
                                         <p>price : 150/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--services part-->
    <section class="container-fluid bg-danger text-dark">
    	<div class="container">
        	<div class="row topbot">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pb-3">
                	<h3 class="text-light">Our <span style="background-color:#FFFFFF; padding:1px 5px;">Services</span></h3>
                </div>
                <div class="col-md-6 col-6 col-sm-6 col-lg-3 col-xl-3 pros-icon">
                	<img src="imgs/fast-delivery.png" class="img-fluid">
                    <div class="sub p-3">
                    	<p><strong>Fast Delivery</strong></p>
                    </div>
                </div>
                <div class="col-md-6 col-6 col-sm-6 col-lg-3 col-xl-3 pros-icon">
                	<img src="imgs/affordable.png" class="img-fluid">
                    <div class="sub p-3">
                    	<p><strong>Lowest Price</strong></p>
                    </div>
                </div>
                <div class="col-md-6 col-6 col-sm-6 col-lg-3 col-xl-3 pros-icon">
                	<img src="imgs/customer.png" class="img-fluid">
                    <div class="sub p-3">
                    	<p><strong>24*7 Customer Support</strong></p>
                    </div>
                </div>
                <div class="col-md-6 col-6 col-sm-6 col-lg-3 col-xl-3 pros-icon">
                	<img src="imgs/no-plastic.png" class="img-fluid">
                    <div class="sub p-3">
                    	<p><strong>No plastics</strong></p>
                    </div>
                </div>
               <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 more">
                	<a class="btn btn-dark" href="about.php">About</a>
               </div>
            </div>
        </div>
    </section>

	<!--testimonial part-->
    
    
    
	<section class="container-fluid back">
    	<div class="container">
        	<div class="row topbot">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pt-5 pb-3">
                    <div class="items">
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Biriyani</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Noodles</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Pizza</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Samoosa</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="ccol-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Cup Cakes</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Soup</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Noodles</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Pizza</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                        	<img src="imgs/img-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">Biriyani</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-light">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 p-4">
                	<h3 class="float-left text-dark">Popular <span>Cakes</span></h3>
                </div>
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 pt-2 pb-3">
                    <div class="items">
                        <div class="card">
                        	<img src="imgs/cake-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">pink flower cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">dark chocko</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">flower cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">tree cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">pink flower cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">dark chocko</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">flower cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/cake-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">tree cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                        	<img src="imgs/food-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            	<div class="row">
                                	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-7 card-content">
                                    	 <h5 class="card-title">chiily cake</h5>
                                         <p>price : 100/-</p>
                                    </div>
                                    <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-5 testbutt">
                                    	<a href="productpage.php" class="btn btn-success">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="js/testimonial.js"></script>

<!--footer part-->

<?php
 include 'footer.php';
?>
	
  

</body>
</html>