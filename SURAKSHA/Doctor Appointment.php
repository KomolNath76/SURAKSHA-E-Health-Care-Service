
<html>
	<head>
	<meta charset="UTF-8">
	<title>Doctor Appointment</title>
	<link rel ="stylesheet" href="Doctor Appointment.css">
	</head>
		<body>
            <div class="logo">
            <img src="SURAKSHAPNG.png"width="20.5%";>
        </div>
   <div class="mritu">
       <div class="form-box">
		<h1> Doctor Appointment</h1>
              <div class="button-box">
             <div class="social-icons"><a href="https://www.facebook.com/Suraksha-E-health-Care-and-E-Pharm-106403521626839"> <img src="FB1.png"></a>
             <a href="https://www.google.com/"><img src="GO1.png"></a>
             <a href ="https://twitter.com/"> <img src="Tw1.png"></a>
            </div>    
		</div>
		<form action="Doctor Appointment.php"method="POST" class="input-group">
		<input type="email" class="input-field" name="email_address" placeholder="Email Address" required>

		<input type="text" class="input-field"name="full_name" placeholder="Full Name" required>
		
		<input type="text" class="input-field"name="contact" placeholder="Contact Number" required>
		
		<input type="number"class="input-field"name="age" placeholder="Age" required>
		
		<input type="text"class="input-field"name="doctor_name" placeholder="Doctor Name" required>
		
		<input type="text"class="input-field"name="department" placeholder="Department" required>

		<input type="text" class="input-field" name="date" placeholder="Date" required>

		<input type="text"class="input-field" name="time" placeholder="Time" required>

		<div class = "box-3">
         <button type="submit"name="submit" class="submit-btn">Submit</button>
		</div>
		</form>
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
	$email_address=$_POST['email_address'];
	$full_name=$_POST['full_name'];
	$contact=$_POST['contact'];
	$age=$_POST['age'];
	$doctor_name=$_POST['doctor_name'];
	$department=$_POST['department'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$status = "Pending"; 
	$sql="INSERT INTO doctor_appointment (email_address,full_name,contact,age,doctor_name,department,date,time,status)
	values ('$email_address','$full_name','$contact','$age','$doctor_name','$department','$date','$time','$status')";
 if ($conn->query($sql) === TRUE){
	?>
     <script>
	 alert (" We will notify you of the appointment by email.");
	 </script>
	 <?php
}
else{
	?>
     <script>
	 alert ("Already Submitted");
	 </script>
	 <?php
}
 
}
$conn->close();
?>
		