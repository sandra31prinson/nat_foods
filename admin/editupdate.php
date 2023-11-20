<?php
$link=mysqli_connect('localhost','root','','food');
error_reporting(0);
$id=$_GET['id'];
$name=$_GET['name'];
$price=$_GET['price'];
$description=$_GET['description'];
$catagory=$_GET['catagory'];
$files=$_GET['files'];
?>


<html>
<head>
<title>
</title>

<style>
table
{
	color:white;
	border-radius:20px
} 	

#button
{
	background-color:green;
	color:white;
	height:32px;
	width:125px;
	border-radius:25px 
	font-size:16px;
}

body
{
	background:linear-gradient(red,blue);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br>

<form action="" method="POST">
<table border="0" bgcolor="black" align="center" cellspacing="20">


<tr>
<td>ID</td>
<td><input type="text" value="<?php echo "$id" ?>" name="id" cellspacing="20" required></td></tr>


<tr>
<td>name</td>
<td><input type="text" value="<?php echo "$name" ?>" name="name" cellspacing="20" required></td></tr>

<tr>
<td>price</td>
<td><input type="price" value="<?php echo "$price" ?>" name="price" cellspacing="20" required></td></tr>

<tr>
<td>Description</td>
<td><input type="text" value="<?php echo "$description" ?>" name="description" cellspacing="20" required></td></tr>

<tr>
<td>catagory</td>
<td><input type="text" value="<?php echo "$catagory" ?>" name="catagory" cellspacing="20" required></td> </tr>

<?php /*?><tr>
<td>file</td>
<td><input type="file" value="<?php echo "$file" ?>" name="file" cellspacing="20" required></td> </tr>
<?php */?>

<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="update"></td></tr>
<tr>
<a href="producthandler.php">
<td colspan="2" align="center"><input type="submit" id="button" value="cancel"></td></a></tr>
</form>
</table>







</body>
</html>

<?php /*?><?php

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$catagory = $_POST['catagory'];
	
	$query = "UPDATE products SET  name='$name',price='$price',description='$decsription',catagory='$catagory' WHERE id='$id'";
	
$data = mysqli_query($link,$query); 


if($data)
{
	
	echo"<script>;
		window.location.href='producthandler.php';
		</script>";
		
		?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" url=http://localhost/naturalfood/admin/producthanler.php">
		<?php
} 
else
{
	echo ("Failed to Update Record"); 	
}
}
?><?php */?>



<?php

if($_POST['submit'])
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$catagory = $_POST['catagory'];
	$query = "UPDATE products SET  name='$name',price='$price',description='$description',catagory='$catagory' WHERE id='$id'";
$data = mysqli_query($link,$query); 

if($data)
{
     echo "<script> alert('Record Updated');
		window.location.href='producthandler.php';
		</script>";
		?>
		 <meta charset="UTF-8">
		<?php
} 
else
{
	echo ("Failed to Update Record"); 	
}
}
?>