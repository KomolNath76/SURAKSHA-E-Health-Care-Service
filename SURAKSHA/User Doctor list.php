<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title> Doctor List </title>
	<style media ="screen">
        body{
            background:linear-gradient(to right,#134E5E,#71B280); 
        }
	table{
		border:2px solid black;
		border-collapse: collapse;
		margin-left:170px;
		width:1100px;
		margin-top:35px;
		
	}
	th{
		border:2px solid black;
		font-size:25px;
		padding:5px;
		background-color:#d8f8b7;
        color: #4A0606;
	}
	td{
		border:2px solid black;
		font-size:20px;
		padding:5px;
		text-align:center;
		background:#334d50;
        color:beige;
	}
        h2{
        text-align: center;
        font-family: sans-serif;
            color: azure;
        }
        p{
            text-align: center;
            color:blanchedalmond;
        }
		
	</style>
	</head>
		<body>
            <h2>Registered Doctor List</h2>
			<table>
			<tr>
			<th>Name</th>
			<th>Department</th>
			<th>Contact</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			$sql = "Select ID, Name, Department,Contact from doctorlist";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["Name"] ."</td><td>". $row["Department"] ."</td><td>". $row["Contact"]."</td></tr>";
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

			
	