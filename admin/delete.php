<?php
$link=mysqli_connect('localhost', 'root', '', 'food');

if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

mysqli_query($link,"DELETE FROM products WHERE id='".$id."'");
mysqli_close($link);
header("Location: producthandler.php");
?>