<html>
<head><title>Add Information</title>
<link rel ="stylesheet" href="Add medicine Information.css">
</head>
<body>
<div class="box-1">
 <div class="h2"> Add Information </div>
 </div>
 <form action="Add medicine Information.php" method="post">
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
 <input type="submit" name="submit" class="submit-box"value= "Submit">
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
	$sql="INSERT INTO medicinelist (id, product_name, power, price)
	values ('$id','$product_name', '$power', '$price')";
 if ($conn->query($sql) == TRUE){
	 ?>
     <script>
	 alert ("Your record has been added successfully");
	  window.location.href='Admin Medicine list.php';
	 </script>
	
	 <?php	
	
	
}
else{
     ?>
     <script>
	 alert ("Data Already Inserted");
	   window.location.href='Admin Medicine list.php';
	 </script>
	 <?php
}
 
}
$conn->close();
?>



