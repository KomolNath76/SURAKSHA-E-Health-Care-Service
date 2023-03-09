<html>
<head><title>Update Appointment</title>
<link rel ="stylesheet" href="Update User order.css">
</head>
<body>
<div class="box-1">
  <div class="h2"> Update Appointment </div>

 </div>
  <form action="Update Appointment.php" method="post">
 		<div class="box-2">
		 <input type="number"class="input-box" name="serial"placeholder="Serial" required>
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
	$serial=$_POST['serial'];
	$status=$_POST['status'];
	$sql="UPDATE doctor_appointment set serial='$serial',status='$status' WHERE doctor_appointment.serial='$serial'";
 if ($conn->query($sql) === TRUE){	
	header('location:Update Appointment list.php');
	
}

 
}
$conn->close();
?>



