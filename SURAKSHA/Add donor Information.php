<html>
<head><title>Add Information</title>
<link rel ="stylesheet" href="Add Doctor&Donor Information.css">
</head>
<body>
<div class="box-1">
  <div class="h2"> Add Information </div>
 </div>
 <form action="Add donor Information.php" method="post">
 		<div class="xbox-2">
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
 <input type="submit" name="submit" class="submit-box"value= "Submit"><br><br>
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
	$sql="INSERT INTO blooddonorlist (id, name, age, blood_group, contact)
	values ('$id', '$name', '$age', '$blood_group', '$contact')";
 if ($conn->query($sql) === TRUE){
	?>
     <script>
	 alert ("Your record has been added successfully");
	  window.location.href='Blood Donor List.php';
	 </script>
	
	 <?php	
	
}
else{
	?>
     <script>
	 alert ("Data Already Inserted");
	 window.location.href='Blood Donor List.php';
	 </script>
	 <?php
}
 
}
$conn->close();
?>



