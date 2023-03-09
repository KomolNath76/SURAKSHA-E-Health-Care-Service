<html>
<head><title>Delete Information</title>
<link rel ="stylesheet" href="Delete Doctor&Donor.css">
</head>
<body>
<div class="box-1">
 <div class="h2"> Delete Information </div>
 </div>
 <form action="Delete Doctor.php" method="post">
 		<div class="box-2">
 <input type="number"class="input-box" name="id"placeholder="ID" required>
 	<br><br>
 <div class="box-3">
 <input type="submit" name="submit" class="submit-box"value= "Delete">
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
	$sql="Delete FROM doctorlist WHERE id = '$id'";
 if ($conn->query($sql) === TRUE){
	echo "";	
	header('location:Doctor list.php');
}
else{
	?>
     <script>
	 alert ("Not Deleted");
	 </script>
	 <?php
}
 
}
$conn->close();
?>



