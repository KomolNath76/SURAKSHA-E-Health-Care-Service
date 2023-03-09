<?php
	
	session_start();
	$product_ids=array();
	//session_destroy();
	
	if(filter_input(INPUT_POST,'add_to_cart')){
		if(isset($_SESSION['shopping_cart'])){
			
			$count = count($_SESSION['shopping_cart']);
			$product_ids = array_column($_SESSION['shopping_cart'], 'ids');		
			//pre_r($product_ids);
			
			if(!in_array(filter_input(INPUT_GET,'ids'),$product_ids)){
				
				$_SESSION['shopping_cart'][$count] = array(
				
					'ids'		=>	filter_input(INPUT_GET, 'ID'),
					'name'		=>	filter_input(INPUT_POST, 'pname'),
					'price'		=>	filter_input(INPUT_POST, 'pprice'),
					'power'		=>	filter_input(INPUT_POST, 'ppower'),
					'quantity'	=>	filter_input(INPUT_POST, 'quantity')
				);
				
			}else{
				
				for($i = 0; $i < count($product_ids); $i++){
					if($product_ids[$i] == filter_input(INPUT_GET, 'ids')){
						$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
					}
				}
				
			}
			
			
		}else{
			$_SESSION['shopping_cart'][0] = array(
				
				'ids'		=>	filter_input(INPUT_GET, 'ID'),
				'name'		=>	filter_input(INPUT_POST, 'pname'),
				'price'		=>	filter_input(INPUT_POST, 'pprice'),
				'power'		=>	filter_input(INPUT_POST, 'ppower'),
				'quantity'	=>	filter_input(INPUT_POST, 'quantity')
			);
			
		}
	}
	
	
	if(filter_input(INPUT_GET,'action') == 'delete'){
		
		foreach($_SESSION['shopping_cart'] as $key => $product){
			
			if($product['ids'] == filter_input(INPUT_GET, 'ID')){
				unset($_SESSION['shopping_cart'][$key]);
			}
		}
		$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
	}
	
						
					
					
	
	
	//pre_r($_SESSION);
	/*function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo'</pre>';
	}*/
	
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Medicine List </title>
		<link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href= "Medicine_order.css"/>
	</head>
	<body>
	
		<div class= "container">
		<?php
		$connect = mysqli_connect("localhost","root","","cse299 project");
		if($connect-> connect_error)
		{
			die("Connection failed:".$connect->connect_error);
		}
		$query = 'SELECT * FROM medicinelist ORDER by Product_Name ASC';
		$result = mysqli_query($connect, $query);
		
		if($result){
			if(mysqli_num_rows($result)>0){
				while($product = mysqli_fetch_assoc($result)){
					//print_r($product);
					?>
					<div class = "col-sm-4 col-md-3">
						<form method= "post" action="Medicine_Order.php?action=add&ID=<?php echo $product['ID']; ?>">
							<div class="products">
								<h4 class="text-info"><?php echo $product['Product_Name']; ?></h4>
								<h4><?php echo $product['Price'];?> Taka</h4>
								<h4><?php echo $product['Power'];?> </h4>
								<input type= "text" name="quantity" class="form-control" value="1"/>
								
								<input type="hidden" name= "pname" value="<?php echo $product['Product_Name'];?>" />
								<input type="hidden" name= "pprice" value="<?php echo $product['Price'];?>" />
								<input type="hidden" name= "ppower" value="<?php echo $product['Power'];?>" />
								<input type="submit" name= "add_to_cart" style="margin-top:5px;" class="btn btn-info"
										value= "Add to Cart" />
								
							</div>
						</form>
					</div>
					<?php
				}
			}
		}	
		?>
		<div style="clear:both"></div>
		<br />
		<div class= "table-responsive">
		<table class="table">
			<tr><th colspan="6"><h3 style="color:blue;">Order Details</h3></th></tr>
		<tr>
			<th width = "25%"> Product Name </th>
			<th width = "15%"> Quantity </th>
			<th width = "15%"> Power </th>
			<th width = "20%"> Price </th>
			<th width = "20%"> Total </th>
			<th width = "5%"> Action </th>
		</tr>
		<?php
			
			if(!empty($_SESSION['shopping_cart'])){
				$total = 0;
				foreach($_SESSION['shopping_cart'] as $key => $product){
					?>
					<tr>
						<td><?php echo $product['name'] ;?></td>
						<td><?php echo $product['quantity'] ;?></td>
						<td><?php echo $product['power'] ;?></td>
						<td><?php echo $product['price'];?> Taka</td>
						<td><?php echo number_format($product['quantity'] * $product['price'],2 ) ;?> Taka</td>
						<td>
							<a href= "Medicine_Order.php?action=delete&ID=<?php echo $product['ids']; ?>">
								<div class="btn-danger">REMOVE</div>
							</a>
						</td>
					</tr>
					<?php
					$total = $total + ($product['quantity'] * $product['price']);
				}
				?>
				<tr>
					<td colspan="3.5" align="right"><b>TOTAL</b></td>
					<td align="right"><b><?php  echo number_format($total,2);  ?> Taka </b></td>
					<td></td>
				</tr>
				<tr>
					<td align="right" colspan="5">
						<?php 
							if(isset($_SESSION['shopping_cart'])):
							if(count($_SESSION['shopping_cart']) > 0):
						?>
						
				<form action="#" method="post">
					<div class="box-2">
						<input type="email"  class="form-control" name="useremail"placeholder="Email Address" required>
							
		
						<input type="text" class="form-control" name="username" placeholder="Name" required>
							
						<input type="text" class="form-control" name="useraddress" placeholder="Address"required>
							
						<input type="number" class="form-control" name="usercontact"placeholder="Contact"required>
						<input type="radio"Checked><b>Cash On Delivery</b>
							
							<div class="box-3">
								<input type="submit" name="submit" style="margin-top:5px;" class="btn btn-info" value= "Confirm Order">
								<br><br>
									<p>©SURAKSHA E-Health Care Service </p>

							</div>
					</div>
				</form>
	
					
						<?php endif; endif; ?>
					</td>
				</tr>	
				
				<?php
			}
			if(isset($_POST['submit'])){
				
				
				$insertusername =  $_POST['username'];
				$insertuseremail = $_POST['useremail'];
				$insertaddress = $_POST['useraddress'];
				$insertcontact = $_POST['usercontact'];
					
					if(!empty($_SESSION['shopping_cart'])){
						foreach($_SESSION['shopping_cart'] as $key => $product){
							$insertproductname = $product['name'];
							$insertquantity = $product['quantity'];
							$insertpower = $product['power'];
							$insertprice = $product['price'];
							$inserttotal = $product['quantity'] * $product['price'];
							$status = "Ordered"; 
							$connect = mysqli_connect("localhost","root","","cse299 project");
							if($connect-> connect_error)
							{
								die("Connection failed:".$connect->connect_error);
							}
							
							$sqlinsert = "INSERT INTO userorder (useremail, username, useraddress, usercontact, product_name, quantity, power, price, total,status) 
							VALUES('$insertuseremail','$insertusername', '$insertaddress','$insertcontact','$insertproductname','$insertquantity','$insertpower','$insertprice','$inserttotal','$status')";
							$res = mysqli_query($connect, $sqlinsert);							
						}
						
							if($res){
								?>
							<script>
								alert ("Thanks For Your order");
								window.location.href='Order Success.html';
										</script>
						<?php
						}	
							
							session_destroy();			
										
					}

			}
		?>
		
		</table>
		</div>
		</div>
	</body
</html>

