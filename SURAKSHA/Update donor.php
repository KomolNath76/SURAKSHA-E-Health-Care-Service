<html>
<head><title>Update Information</title>
<link rel ="stylesheet" href="Add Doctor&Donor Information.css">
</head>
<body>
<div class="box-1">
<div class="h2"> Update Information </div>
 </div>
 <form action="Update donor.php" method="post">
 <div class="ubox-2">
 <input type="number"class="input-box" name="id"placeholder="ID" required>
 	<br><br>
 <input type="text"class="input-box" name="name" placeholder="Name"required>
 	<br><br>
 <input type="number"class="input-box" name="age"placeholder="Age"required>
 	<br><br>
	 <input type="text"class="input-box" name="blood_group"placeholder="Blood Group"required>
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
	$age=$_POST['age'];
	$blood_group=$_POST['blood_group'];
	$contact=$_POST['contact'];
	$sql="UPDATE blooddonorlist set id='$id',name='$name',age='$age',blood_group='$blood_group',contact='$contact' WHERE blooddonorlist.id='$id'";
 if ($conn->query($sql) === TRUE){
	echo "";	
	header('location:Blood Donor List.php');
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



