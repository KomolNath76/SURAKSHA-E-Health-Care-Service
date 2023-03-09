<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Update Appointment List </title>
	<style media ="screen">
	body{
            background:linear-gradient(to right,#d4d3dd,#EFEFBB); 
        }
table{
		border:2px solid black;
		border-collapse: collapse;
		margin-left:130px;
		width:1100px;
		margin-top:35px;
		
	}
	th{
		border:2px solid black;
		font-size:25px;
		padding:5px;
        color:antiquewhite;
		background-color:#114e60;
	}
	td{
		border:2px solid black;
		font-size:20px;
		padding:5px;
		text-align:center;
		background-color:#93EDC7;
        }
        h2{
        text-align: center;
        font-family: sans-serif;
        }
        p{
            text-align: center;
        }
		
	</style>
	</head>
		<body>
		<h2>Appointment List</h2>
			<table>
			<tr>
			<th>Serial</th>
			<th>Email Address</th>
			<th>Full Name</th>
			<th>Contact</th>
			<th>Age</th>
			<th>Doctor Name</th>
			<th>Department</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th>Update</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			
			$sql = "Select serial, email_address,full_name,contact,age,doctor_name,department,date,time,status from doctor_appointment";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo '<tr><td>' . $row["serial"] .'</td>
					<td>'. $row["email_address"] .'</td>
					<td>'. $row["full_name"] .'</td>
					<td>'. $row["contact"] .'</td>
					<td>'. $row["age"] .'</td>
					<td>'. $row["doctor_name"] .'</td>
					<td>'. $row["department"] .'</td>
					<td>'. $row["date"] .'</td>
					<td>'. $row["time"].' </td>
					<td>'. $row["status"].'</td>
					<td><button><a href="Update Appointment.php"style="text-decoration:none;color:red;">Update</a></button></td>
					</tr>';
				}		
			}
			else{
				echo"";
			}
		$conn->close();
			?>							
			</table>	
		</body>
	</html>

			
	