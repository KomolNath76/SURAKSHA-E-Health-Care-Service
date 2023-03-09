<!Doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Update Order List </title>
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
		<h2>Order List</h2>
			<table>
			<tr>
			<th>Order ID</th>
			<th>Email Address</th>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
			
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Power</th>
			<th>Price</th>
			<th>Total</th>
			<th>Order Status</th>
			<th>Update</th>
			</tr>
			<?php
			$conn=mysqli_connect("localhost","root","","cse299 project");
			if($conn-> connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
			
			$sql = "Select id, useremail,username,useraddress,usercontact,product_name,quantity,power,price,total,status from userorder";
			$result = $conn-> query($sql);
			if($result->num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo '<tr><td>' . $row["id"] .'</td>
					<td>'. $row["useremail"] .'</td>
					<td>'. $row["username"] .'</td>
					<td>'. $row["useraddress"] .'</td>
					<td>'. $row["usercontact"] .'</td>
					<td>'. $row["product_name"] .'</td>
					<td>'. $row["quantity"] .'</td>
					<td>'. $row["power"] .'</td>
					<td>'. $row["price"].' Tk</td>
					<td>'. $row["total"].' Tk</td>
					<td>'. $row["status"].'</td>
					<td><button><a href="Update User Order.php"style="text-decoration:none;color:red;">Update</a></button></td>
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

			
	