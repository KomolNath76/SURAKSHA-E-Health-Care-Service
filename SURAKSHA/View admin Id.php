<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Admin Id </title>
	<style media ="screen">
        body{
            background:linear-gradient(to right,#d4d3dd,#EFEFBB); 
        }
	table{
		align-content: center;
        border:2px solid black;
		border-collapse: collapse;
		margin-left:170px;
		width:1000px;
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
            <h2>Admin Id</h2>
			<table>
			<tr>
			<th>ID</th>
			<th>Password</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			$sql = "Select ID, Password from admin_id";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>" . $row["ID"] ."</td><td>". $row["Password"] ."</td></tr>";
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

			