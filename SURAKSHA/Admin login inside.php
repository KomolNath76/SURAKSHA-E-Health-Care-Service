<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title> Admin Inside| SURAKSHA </title>
	<link rel ="stylesheet" href="Admin login Inside.css">
	</head>
		<body>
			<div class="logo">
            <img src="SURAKSHAPNG.png"width="30.5%";>
        </div>
		<br><br><br><br><br><br><br><br>
		<ul>
		<li class="dropdown">
		<a href="#"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Doctor List</a>
		<div class="dropdown-1">
		<a href="Doctor list.php">View List</a>
		<a href="Update Appointment list.php">View appointment</a>
		<a href="Add doctor Information.php">Add Information</a>
		<a href="Update Doctor list.php">Update Information</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Medicine List</a>
		<div class="dropdown-1">
		<a href="Admin Medicine list.php">View List</a>
		<a href="Add medicine Information.php">Add Information</a>
		<a href="Update medicine list.php">Update Information</a>
		<a href="Order list.php">View Order</a>
		</div>
		</li>
		<li class="dropdown">
		<a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Blood Donor List</a>
		<div class="dropdown-1">
		<a href="Blood Donor List.php">View List</a>
		<a href="Add donor Information.php">Add Information</a>
		<a href="Update Donor list.php">Update Information</a>
		</div>
		</li>
	
		<li class="dropdown">
		<a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</a>
		<div class="dropdown-1">
		<a href="View admin Id.php">View Admin Id</a>
		<a href="View admin request.php">Admin Request</a>
		</div>
		</li>
		
		

		<li><a href="Logout.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Log out</a></li>
            </ul>
		<div class ="background">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h2 style="text-align: center;font-size:50px; color:whitesmoke"> WELCOME TO ADMIN DASHBOARD </h2><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
		</body>
		</html>
		<?php
session_start();
if(!$_SESSION['auth'])
{
	header('location:Admin SignIn.php');
}
?>