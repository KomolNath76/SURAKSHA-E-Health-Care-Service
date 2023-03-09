<html>
<head><title>Update Information</title>
<link rel ="stylesheet" href="Add Doctor&Donor Information.css">
</head>
<body>
<div class="box-1">
<div class="h2"> Update Information </div>
 </div>
  <form action="Update medicine.php" method="post">
 		<div class="box-2">
			<input type="number"class="input-box" name="id"placeholder="ID" required>
 	<br><br>
 <input type="text"class="input-box" name="product_name"placeholder="Product Name" required>
 	<br><br>
 <input type="text"class="input-box" name="power" placeholder="Power"required>
 	<br><br>
 <input type="number"class="input-box" name="price"placeholder="Price"required>
 	<br><br>

 <div class="box-3">
 <input type="submit" name="submit" class="submit-box"value= "Update">
     <br><br>
<p>©SURAKSHA E-Health Care Service </p>
 </div>
</div>
    </form>
 </body>
 </html>
 
<?php
$conn=mysqli_connect("localhost","root","","cse299 project");
if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}
if(isset($_POST['submit']))
{
     $id=$_POST['id'];
	$product_name=$_POST['product_name'];
	$power=$_POST['power'];
	$price=$_POST['price'];
	$sql="UPDATE medicinelist set id='$id', product_name='$product_name',power='$power',price='$price' WHERE medicinelist.id='$id'";
 if ($conn->query($sql) === TRUE){
	echo "";	
	header('location:Admin Medicine list.php');
}
else{
	?>
     <script>
	 alert ("Failed");
	 </script>
	 <?php
}
 
}
$conn->close();
?>



