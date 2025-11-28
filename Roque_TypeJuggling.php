<!--Roque, Daryl John Clark Q.
    CYB-201
    6DWEB-->

<?php
$title = 'Type Juggling';
$name = '';
$products = ['Christmas Tree', 'Advent Candle', 'Parol Lantern (Large)', 'Parol Lantern (Small)', 'Christmas Lights (5 meters)', 'Christmas Lights (3 meters)'];
$prices = ['1990.99', '1499.99', '2399.99', '1299.99', '899.99', '649.99'];
$quantity = 4;
$num = 2;
$payment = 1000;
$disc = 0;
$less = 0;
?>


<?php include 'header.php' ?>
<h2>Here is your invoice for your purchased product</h2>
<h2>Purchase of products worth Php 1500 or more could give you a 5% discount on total price.</h2>
<h2>An additional 5% discount would be made if your total purchase is more than Php 3000.</h2>

<table>
	<tr>
		<th>Information</th>
		<th>Details</th>
</tr>
<tr>
	<td>Chosen Item</td>
	<td><?= $products[$num-1]; ?></td>
</tr>
<tr>
	<td>Price</td>
	<td>Php <?= $prices[$num-1]; ?></td>
</tr>
<tr>
	<td>Quantity</td>
	<td><?= $prices[$num-1]; ?></td>
</tr>
<tr>
	<td>Initial Amount of Purchase</td>
	<td>Php <?php $init = $prices[$num-1] * $quantity; echo $init ?></td>
</tr>
<tr>
	<td>Eligible for 5% discount for item price?</td>
	<td>
		<?php
		if ($prices[$num-1] >= 1500) {
			echo 'Yes';
			$disc += 0.05;
		}
		else {
			echo 'No';
		}
		?>
		</td>
</tr>
<tr>
	<td>Eligible for 5% discount for total purchase?</td>
	<td>
		<?php
		if ($init >= 3000) {
			echo 'Yes';
			$disc += 0.05;
		}
		else {
			echo 'No';
		}
		?>
		</td>
</tr>
	<?php if ($disc > 0) {
			?>
<tr>
			<td>Total Discount Percentage</td>
			<td><?= ($disc * 100); ?> %</td>
	</tr>
	<?php 
		$less = $init * $disc;
	?>
<tr>
	<td>Total Discount Amount</td>
	<td>Php <?= $less; ?></td>
	</tr>
<?php 
$final = $init - $less;
	}
	else {
		$final = $init;
	}
	?>
	<tr>
		<td>Final Price</td>
		<td>Php <?= $final; ?></td>
</tr>
<tr>
	<td>Payment</td>
	<td>Php <?= $payment; ?></td>
</tr>
<tr>
<?php if ($payment > $final) {
	?>
	<td>Change</td>
	<td>Php <?php echo ($payment - $final); ?></td>
<?php }
else if ($payment == $final) {
	?>
	<td>Change</td>
	<td>Exact amount paid ?></td>
<?php }
else {
	?>
	<td><strong>SORRY</strong></td>
	<td><strong>YOUR PAYMENT IS INSUFFICIENT</strong></td>
	<?php
}
?>
</tr>
</table>

<?php include 'footer.php' ?>