<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
     <link rel="stylesheet" href="../css/style.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
    .back{background-color: #D7E5D8;
	height:600px;
	width:1000px;
	background-position:right;
	background-repeat:no-repeat;
	background-size:cover;
	position:relative;
	margin:0;
	padding:0;}
    
   .container-fluid {
  width: 100%;
  padding-right: 0;
  padding-left: 0;
  margin-right: 0;
  margin-left: 0; }

    .col-md-12{ padding-left:0;}
	
.hom a{ padding:25px;}

.hompg i{ font-size:30px; margin:40px;}
.hompg h6{ padding-left:15px; text-align:center;}
#colorlib-aside #colorlib-logo {color: #000000;
    margin-bottom:15px; margin-left:20px;}
	
  
    </style>
    
    
    
    
  </head>
  
  <?php
$link = mysqli_connect("localhost", "root", "", "food");

//echo"connected";

?>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="<!--index.html-->"><span ><i class="fa-solid fa-address-card"></i></span>Admin</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
                    <li class="colorlib-active"><a href="catagory.php">Add catagory</a></li>
					<li ><a href="product.php">Add products</a></li>
					<li><a href="custumer.php">View custumer</a></li>
					<li><a href="booking.php">View booking</a></li>
					<li ><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
            <div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
            
         <div id="colorlib-main">
			<section>
				<div class=" container-fluid">
                
                <div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
              
              <div class="back">
							
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span><span>add catagory</span></p>
                
               
					
	         <!-- <div class="col-md-12">
                             <div class="back">
							<span class="hom"> <a href="index.html">Home</a></span> 
                           
	            <div class="row hompg">
                
                
                
               
               
          <a href="product.html"><span><i class="fa-brands fa-opencart"></i></span><h6>add product</h6></a>
         <a href="custumer.html"><span><i class="fa fa-eye" aria-hidden="true"></i></span><h6>view custumers</h6></a>
        <a href=""><span><i class="fa fa-list-ol" aria-hidden="true"></i></span><h6>view booking</h6></a>
        <a href=""><span><i class="fa fa-user-circle" aria-hidden="true"></i></span><h6>logout</h6></a>
               
               </div>-->
               
               
               
               
               
               
	             
                
          
          
          <section class="container-fluid">
    	<div class="container">
        	<div class="row topbot">
            	<div class="col-12 xcol-sm-12 col-md-12 col-lg-12 col-xl-12 addcatagory">
                	<form action="" method="post">
                        <div class="form-group">
                            <h3>Add<span>Catagory</span></h3>
                        </div>
                    	<div class="form-group">
                        	<input type="text" placeholder="add new catagory(eg: veg)" name="catname" class="form-control">
                        </div>
                        <div class="form-group">
                        	<input type="submit" name="submit" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
      
     
     
     
     
     
     </div>
               </div>
               
              
	         </div>
             </div>
             </section>  
             
             
             
             
             
             
             
             
 <?php



if(!$link)


   {
	die("could not coonect:".mysqli_error());
	
   }
	
	else
	
	{
		
		if(isset($_POST['submit']))
		
    {
	
	 
    $catname= $_POST['catname'];
    
	
	
         $sql="INSERT INTO catagory (catname)
               VALUES('$catname')";
			   
        $qry = mysqli_query($link, $sql);

                  if ($qry) 
				  
				  
                     {
                     echo" you register sucessfully";
                      }

                        else

                           {
						   echo"error" .$sql."<br>".mysqli_error($link);
                           }
      }
					
  }
?>                
             
             
             
             
             
             
             
             
             
             
             
             
             
             
                       
			
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
  </div>

</div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
 <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
  <!--<script src="js/google-map.js"></script>-->
  <script src="js/main.js"></script>
    

</body>
</html>

