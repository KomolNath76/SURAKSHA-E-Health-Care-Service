<html>
<head><title>Update Order</title>
<link rel ="stylesheet" href="Update User order.css">
</head>
<body>
<div class="box-1">
  <div class="h2"> Update Order </div>

 </div>
  <form action="Update User order.php" method="post">
 		<div class="box-2">
		 <input type="id"class="input-box" name="id"placeholder="Order ID" required>
 	<br><br>
 <input type="text"class="input-box" name="status" placeholder="Status"required>
 <br><br>
 <div class="box-3">
 <input type="submit" name="submit" class="submit-box"value= "Update"><br><br>
 <p>©SURAKSHA E-Health Care Service </p>
 </div>
</div>
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
	$status=$_POST['status'];
	$sql="UPDATE userorder set id='$id',status='$status' WHERE userorder.id='$id'";
 if ($conn->query($sql) === TRUE){	
	header('location:Order list.php');
	
}

 
}
$conn->close();
?>



