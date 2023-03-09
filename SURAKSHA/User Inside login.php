<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title> User Inside| SURAKSHA </title>
	<link rel ="stylesheet" href="User Inside login.css">
	</head>
		<body>
			<div class="logo">
            <img src="SURAKSHAPNG.png"width="30.5%";>
        </div>
		<br><br><br><br><br><br><br><br>
		<ul>
		<li><a href="User Doctor list.php"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Doctor List</a></li>
		<li><a href="Doctor Appointment.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Doctor Appointment</a></li>
			<li><a href="User Medicine list.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Medicine List</a></li>
				<li><a href="Medicine_Order.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Medicine Order</a></li>
		<li><a href="User Blood Donor List.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Blood Donor List</a></li>
		<li><a href="Logout.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;Log out</a></li>
		</ul>
		<div class ="background">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<h2 style="text-align: center;font-size:50px;color: azure;"> WELCOME TO USER DASHBOARD </h2><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		</body>
		</html>
<?php
session_start();
if(!$_SESSION['auth'])
{
	header('location:User SignIn.php');
}
?>