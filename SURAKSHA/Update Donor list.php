<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Update Donor List </title>
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
            <h2>Blood Donor List</h2>
			<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Blood Group</th>
			<th>Contact</th>
			<th>Update</th>
			<th>Delete</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			
			$sql = "Select ID, Name, Age,Blood_Group,Contact from blooddonorlist";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo '<tr><td>' . $row["ID"] .'</td>
					<td>'. $row["Name"] .'</td>
					<td>'. $row["Age"] .'</td>
					<td>'. $row["Blood_Group"].'</td>
					<td>'. $row["Contact"].'</td>
					<td><button><a href="Update Donor.php"style="text-decoration:none;color:blue;">Update</a></button></td>
					<td><button><a href="Delete Donor.php"style="text-decoration:none;color:red;">Delete</a></button></td>
					</tr>';
				}		
			}
			else{
				echo"No result";
			}
		$conn->close();
			?>							
			</table>
            <br><p>©SURAKSHA E-Health Care Service </p>
		</body>
	</html>

			
	