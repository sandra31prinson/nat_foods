<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>fileupload</title>
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
			<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 topbot">
                	<form action="" method="POST" enctype="multipart/form-data" style="width:50%; margin:0 auto;">
                    	<div class="form-group">
                        	<h3 class="pt-5">File<span>Upload</span></h3>
                        </div>
                    	<div class="form-group">
                        	 <input type="text" name="name" placeholder="food name" class="form-control"/>
                        </div>
                        <div class="form-group">
                        	 <input type="text" name="price" placeholder="price(100.50/-)" class="form-control"/>
                        </div>
                        <div class="form-group">
                        	 <textarea name="description" placeholder="description" rows="3" class="form-control"></textarea>
                        </div>
						<div class="form-group">
                        	 <select name="catagory" id="catagorys" class="form-control">
                             	<option value="null">---catagory---</option>
                                <option value="veg">veg</option>
                                <option value="non veg">non veg</option>
                                <option value="snacks">snacks</option>
                                <option value="drinks">drinks</option>
                            </select>
                        </div>
                        <div class="form-group">
                        	  <input type="file" name="file" class="form-control"/>
                        </div>
                        <div class="form-group">
                        	 <input type="submit" name="submit" class="form-control btn btn-success"/>
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