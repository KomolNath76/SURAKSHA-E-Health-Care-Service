<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Update Medicine List </title>
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
            <h2>Medicine List</h2>
			<table>
			<tr>
			<th>ID</th>
			<th>Product Name</th>
			<th>Power</th>
			<th>Price(Taka)</th>
			<th>Update</th>
			<th>Delete</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			
			$sql = "Select ID,Product_Name,Power,Price from medicinelist";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo '<tr><td>' . $row["ID"] .'</td>
					<td>'. $row["Product_Name"] .'</td>
					<td>'. $row["Power"] .'</td>
					<td>'. $row["Price"] .'</td>
					<td><button><a href="Update medicine.php"style="text-decoration:none;color:blue;">Update</a></button></td>
					<td><button><a href="Delete medicine.php"style="text-decoration:none;color:red;">Delete</a></button></td>
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

			
	