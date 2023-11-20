<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>help</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

 <!--bootstrap link starts-->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   
 <!--style sheet-->
 <link href="css/style.css" rel="stylesheet">
 
<!--google fonts link start -->
  	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<!--font awsome icons cdn starts-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

</head>

<body>

<?php
	include 'header.php';
?>

	<div class="container-fluid pt-5 text-left">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 help">
                	<h3>Help <span>Desk</span></h3>
                </div>
                <div class="col-md-12 col-12 col-sm-12 col-lg-12 col-xl-12 p-5">
                	<h5>Ask us</h5>
                   <!-- <form action="" method="post">-->
                    	<div class="form-group">
                        	<textarea placeholder="queries/Questions/Doubts......" name="questions" class="form-control" rows="3" id="message"></textarea>
                        </div>
                        <div class="form-group">
                        	<span id="blank" style="font-weight:500;"></span>
                        	<span id="tick" style="border:none; width:100%;"><i class="fas fa-check-circle"></i></span>
                        </div>
                        <div class="form-group">
                        	<input type="button" class="btn btn-success help-sendbutton" value="Send" onClick="send()"> 
                        </div>
                        <div class="form-group">
                        	<h6 class="float-left">Contact us : </h6><span style="font-weight:normal;"> <i class="fab fa-whatsapp p-1"></i>
                            <a href="#" class="text-primary"> 1234567890</a></span>
                        </div>
                   <!-- </form>-->
                    <div class="description">
                        	<P>A well-run help desk centralizes knowledge and provides workflow guidance that makes solving customer problems quicker and easier. Measure customer satisfaction. Customers should always have a way of rating the help desk and giving feedback to improve processes, knowledge bases, and solutions.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
	
	
	var tick= document.getElementById("tick");
	tick.style.display = "none";
	var blank = document.getElementById("blank");
	function send()
	{
		var message= document.getElementById("message").value;
		
	
	
		if(message == "")
		{
			//alert(message);	
			tick.style.display = "none";
			blank.style.display = "block";
			blank.innerHTML = "field is empty";
		}
		else
		{
			blank.style.display = "none";
			tick.style.display = "block";
		}
		
		
	}
	
</script>



<?php
	include 'footer.php';
?>
</body>
</html>