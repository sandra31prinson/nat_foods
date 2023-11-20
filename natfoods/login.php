
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>signin</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    <!-- style sheet -->
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
    	
        
        
        
              <?php
//include("connection.php");
$link=mysqli_connect("localhost","root","","food");


if($link)
{
	
	//echo "sucess";
	
	if(isset($_POST['submit']))
	
	
	{ //echo "sandraa";
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT email, password FROM signup WHERE email='$email' AND password='$password'";
	$qry=mysqli_query($link, $sql);
	
	$result=mysqli_num_rows($qry);
	
	if($result > 0)
	
	{
		header("location: index.php");
		
		}
	
	else
	
	{ header("location: signup.php");
		
		}
	
	
	
	//echo $sql;
	//$sql=mysqli_query($link,"select * from register where email='$email' and password='$password'");
	
	//echo $email;
	//echo $password;
	
		}
	
	
	
	} 

else

{
	
	echo "connection failed";  
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	

?>
        
        
        
        
        
        
        
        
        

	<section class="container-fluid" style="padding:50px 0;">
    	<div class="container">
        	<div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                       
                        <div class="clippy">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="" method="post">
                                    	<div class="form-group">
                                             <h3 class="pt-4 pb-3 text-left text-dark">Log <span>In</span></h3>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="enter email id" name="email" class="form-control"/>
                                            <span class="login-message">field is empty</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" placeholder="password" name="password" class="form-control"/>
                                             <span class="login-message"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Log in" name="submit" class="btn btn-success form-control"/>
                                        </div>
                                    </form>
                                    <div class="login">
                                    	<p><b>Dont have an account ? </b><a href="signup.php"><b>Sign Up</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    
    <?php
		
		include 'footer.php';
		
	?>  
    
  
  
    
    
    
    
    
    
  
  
  
  
  <?php /*?><?php
$link=mysqli_connect("localhost","root","","food");
if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from register WHERE email='".$email."' and password='".$password."'";
        $result = mysqli_query($link,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['id'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: index.html');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>  <?php */?>

</body>
</html>
