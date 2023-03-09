<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel ="stylesheet" href="SignIn.css">
	</head>
		<body>
            <div class="logo">
            <img src="SURAKSHAPNG.png"width="20.5%";>
        </div>
   <div class="mritu">
       <div class="form-box">
		<h2>Sign In</h2>
            <div class="button-box">
             <div class="social-icons"><a href="https://www.facebook.com/Suraksha-E-health-Care-and-E-Pharm-106403521626839"> <img src="FB1.png"></a>
             <a href="https://www.google.com/"><img src="GO1.png"></a>
             <a href ="https://twitter.com/"> <img src="Tw1.png"></a>
            </div>  
		</div>
		<form action="#"method="POST" class="input-group">
		<input type="number" class="input-field"name="id" placeholder="Admin Id" required>
		<input type="Password"class="input-field" name="password"placeholder="Password" required>
                 <div class="container"> 
		</div>
		<div class = "box-3">
                <button type="submit" name="submit" class="submit-btn">Log In</button>
				</div>
                </form> 
           
		<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}

if($_POST)
{
	$id=$_POST['id'];
	$password=$_POST['password'];
$sql = "Select ID,Password from admin_id where id='$id' and password= '$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['auth']='true';
		header('location:Admin login inside.php');
		
	}
	
	else{
		?>
     <script>
	 alert ("Wrong ID or Password");
	 </script>
	 <?php
		}
	}
	?>
       </div>
            </div>
		</body>
		</html>
