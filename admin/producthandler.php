<?php
$link = mysqli_connect("localhost", "root", "", "food");

echo"connected";

?>
<!DOCTYPE HTML>
<html>
	<head>
	
	
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
	
	</head>
	<body>
		

<div>
<table class="center">





<?php
	//id name price  description catagory file
	echo "<tr> <th style='background-color:RED'> <font color='white'>  id </th> 
	<th style='background-color:RED'> <font color='WHITE'> name </th> 
	<th style='background-color:RED'> <font color='WHITE'> Price </th> 
	<th style='background-color:RED'><font color='WHITE'>Description</th> 
	<th style='background-color:RED'> <font color='WHITE'> Category </th> 
	<th style='background-color:RED'> <font color='WHITE'> File </th> 
	<th style='background-color:RED'> <font color='WHITE'> Delete </th>
	<th style='background-color:RED'> <font color='WHITE'> Edit </th></tr>";
    $sql="select * from products";
	$sql1=mysqli_query($link,$sql);
	while($result1=mysqli_fetch_array($sql1))
	{
   echo "<tr><td style='background-color:white'><font color='Black'> $result1[id] </td>
   <td style='background-color:white'><font color='black'> $result1[name] </td>
   <td style='background-color:white'><font color='Black'> $result1[price] </td>
   <td style='background-color:white'><font color='Black'> $result1[description] </td>
   <td style='background-color:white'><font color='Black'> $result1[catagory] </td>
   <td style='background-color:white'><font color='black'> <img src='". $result1['file']."' height='100' width='100'/></td>  
   <td><button><a href='delete.php?id=$result1[id]'>Delete</a></button></td>
 <td><button> <a href='editupdate.php?id=$result1[id]&name=$result1[name]&price=$result1[price]&description=$result1[description]&catagory=$result1[catagory]&file=$result1[file]'>Edit/update</a></button></td>
   </tr>";
    }    
    ?>
	
	
  
</table>
</div>

  
	
	
	</body>
</html>