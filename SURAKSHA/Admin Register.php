<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel ="stylesheet" href="Admin Register.css">
	</head>
		<body>
            <div class="logo">
            <img src="SURAKSHAPNG.png"width="20.5%";>
        </div>
   <div class="mritu">
       <div class="form-box">
		<h1> Register Now</h1>
            <div class="button-box">
             <div class="social-icons"><a href="https://www.facebook.com/Suraksha-E-health-Care-and-E-Pharm-106403521626839"> <img src="FB1.png"></a>
             <a href="https://www.google.com/"><img src="GO1.png"></a>
             <a href ="https://twitter.com/"> <img src="Tw1.png"></a>
            </div>  
		</div>
		<form action="Admin Register.php"method="POST" class="input-group">
		
		<input type="email" class="input-field" name="email_address" placeholder="Email Address" required>
		
		<input type="text" class="input-field"name="full_name" placeholder="Full Name" required>
	
		<input type="text" class="input-field"name="contact" placeholder="Contact Number" required>

		<input type="number"class="input-field"name="age"placeholder="Age" required>
		
		<input type="text"class="input-field"name="address" placeholder="Present Address" required>
		
		<input type="text" class="input-field" name="blood_group"placeholder="Blood Group" required>
		
		<div class = "box-3">
                <button type="submit"name ="submit" class="submit-btn">Admin Request</button>
				</div>
		<div class="box-4">
		<p style="text-align:center;">  Do you have an account? <a href="Admin SignIn.php">Sign In</a></p>
		</div>
		</form>
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
	$email_address=$_POST['email_address'];
	$full_name=$_POST['full_name'];
	$contact=$_POST['contact'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$blood_group=$_POST['blood_group'];
	$sql="INSERT INTO admin_registration (email_address,full_name,contact,age,address,blood_group)
	values ('$email_address','$full_name','$contact','$age','$address','$blood_group')";
 if ($conn->query($sql) === TRUE){
	?>
     <script>
	 alert ("Thanks For Your Registration");
	 </script>
	 <?php
}
else{
	?>
     <script>
	 alert ("Already registered");
	 </script>
	 <?php
}
 
}
$conn->close();
?>
		