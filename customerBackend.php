<?php
$user = $_POST['user'];
$pass = $_POST['password'];

$shippingcost = $_POST['shipping'];
if($shippingcost == 0){$shippingtype = "Seven Day";}
else if($shippingcost == 5){$shippingtype = "Three Day";}
else if($shippingcost == 50){$shippingtype = "Over Night";}

$q1 = $_POST['quantity1'];
$q2 = $_POST['quantity2'];
$q3 = $_POST['quantity3'];

$total = $shippingcost + $q1*75 + $q2*100 + $q3*45
?>
<!DOCTYPE html> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<h1>Shoe Store</h1>
		</div>
		<div id="receipt">
			<h2>Order Details: </h2>
			<div>
				<p>User: <?=$user?></p>
				<p>Password: <?=$pass?></p>
			</div>
			<table>
				<tr>
					<th></th>
					<th>Quantity</th>
					<th>Cost Per Item</th>
					<th>Sub Total</th>
				</tr>
				<tr>
					<th>Athletic</th>
					<td><?=$q1?></td>
					<td>$75</td>
					<td>$<?=$q1*75?></td>
				</tr>
				<tr>
					<th>Dress</th>
					<td><?=$q2?></td>
					<td>$100</td>
					<td>$<?=$q2*100?></td>
				</tr>
				<tr>
					<th>Sandals</th>
					<td><?=$q3?></td>
					<td>$45</td>
					<td>$<?=$q3*45?></td>
				</tr>
				<tr>
					<th>Shipping</th>
					<td colspan="2"><?=$shippingtype?></td>
					<td>$<?=$shippingcost?></td>
				</tr>
				<tr>
					<th colspan="3">Total Cost</th>
					<th>$<?=$total?></th>
				</tr>
			</table>
		</div>
	</body>
</html>