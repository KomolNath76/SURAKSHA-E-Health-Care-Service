<html>
<head><title>Update Information</title>
<link rel ="stylesheet" href="Add Doctor&Donor Information.css">
</head>
<body>
<div class="box-1">
 <div class="h2"> Update Information </div>
 </div>
 <form action="Update doctor.php" method="post">
 		<div class="box-2">
 <input type="number"class="input-box" name="id"placeholder="ID" required>
 	<br><br>
 <input type="text"class="input-box" name="name" placeholder="Name"required>
 	<br><br>
 <input type="text"class="input-box" name="department"placeholder="Department"required>
 	<br><br>
 <input type="text"class="input-box" name="contact" placeholder="Contact"required>
 <br><br>
 <div class="box-3">
 <input type="submit" name="submit" class="submit-box"value= "Update"><br><br>
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
	$name=$_POST['name'];
	$department=$_POST['department'];
	$contact=$_POST['contact'];
	$sql="UPDATE doctorlist set id='$id',name='$name',department='$department',contact='$contact' WHERE doctorlist.id='$id'";
 if ($conn->query($sql) === TRUE){
	echo "";	
	header('location:Doctor list.php');
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



