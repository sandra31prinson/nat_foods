<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>add catagory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
  <!--  stylesheet-->
    <link href="css/style.css" rel="stylesheet">
    
<!--font awsome icons cdn starts-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
 
</head>


<body>

<?php

include "header.php";

?>

	<section class="container-fluid">
    	<div class="container">
        	<div class="row topbot">
            	<div class="col-12 xcol-sm-12 col-md-12 col-lg-12 col-xl-12 addcatagory">
                	<form action="" method="post">
                        <div class="form-group">
                            <h3>Add<span>Catagory</span></h3>
                        </div>
                    	<div class="form-group">
                        	<input type="text" placeholder="add new catagory(eg: veg)" name="newcatagory" class="form-control">
                        </div>
                        <div class="form-group">
                        	<input type="submit" name="submit" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php

include "footer.php";

?>

</body>
</html>