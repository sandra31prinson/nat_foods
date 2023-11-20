


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
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

<?php
$link = mysqli_connect("localhost", "root", "", "food");

echo"connected";

?>

<body>






	<?php
		
		include 'header.php';
		
	?>
    
    
    


	<section class="conainer-fluid" style="padding:30px 0;">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<form action="" method="POST" class="d-block mx-auto p-3 signupform">
                    	<div class="form-group">
                        	<h3 class="text-left">Sign <span>Up</span></h3>
                        </div>
                        
                    	<div class="form-group">
                        	<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                            <span class="text-dark"><p class="text-danger">fileld is empty</p></span>
                        </div>
                        
                        
                        <div class="form-group">
                        	<input type="text" name="number" id="number" placeholder="Mobile number" class="form-control">
                            <span class="text-dark"></span>
                        </div>
                        <div class="form-group">
                        	<input type="email" name="email" id="email" placeholder="Email id" class="form-control">
                            <span class="text-dark"></span>
                        </div>
                        <div class="form-group">
                        	<input type="text" name="pincode" id="pincode" placeholder="pincode" class="form-control">
                            <span class="text-dark"></span>
                        </div>
                        <div class="form-group">
                        	<textarea type="text" name="address" id="address" placeholder="Address" class="form-control"></textarea>
                            <span class="text-dark"></span>
                        </div>
                        <div class="form-group">
                        	<input type="password" name="password" id="password" placeholder="password(can only use a-z, 0-9)and 8 characters" class="form-control">
                            <span class="text-dark"></span>
                        </div>
                        <div class="form-group">
                        	<input type="password" name="conPassword"  placeholder="confirm password" class="form-control">
                            <span class="text-dark"></span>
                        </div>
                        
                        <div class="form-group">
                        <a href="login.php" class="btn btn-success form-control">Sign up</a>
                        
                        
                        <?php /*?><a href="index.php">
                            <input  type="submit" class="form-control btn btn-success" name="submit" value="Sign up"> </a><?php */?>
                           
                            
                            
                            </div>
                            
                        
                    </form>
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
	
	 
    $name= $_POST['name'];
    $number= $_POST['number'];
    $email= $_POST['email'];
    $pincode= $_POST['pincode'];
	$address= $_POST['address'];
	$password= $_POST['password'];
	
	
         $sql="INSERT INTO signup (name, number, email, pincode, address, password)
               VALUES('$name', '$number', '$email', '$pincode', '$address', '$password')";




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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


<?php
	include'footer.php';
?>



</body>
</html>

	 
 
 
 








