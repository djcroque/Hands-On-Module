<!--Roque, Daryl John Clark Q.
    CYB-201
    6DWEB-->

<?php
$title = 'Logical Operator';
$name = 'Clark';
$product = 'Christmas Lights';
$price = 800;
$quantity = 4;
$total = $price * $quantity;
$discount_tf = $total > 2500;
$statement = '';
$price_discount = 0;
$fin_price = $total;

if ($discount_tf === true) {
	$statement = 'Yes';
	$price_discount = $total * 0.10;
	$fin_price = $total - $price_discount;
}
else {
	$statement = 'No';
}
?>

<?php include 'header.php' ?>

<h2>Total purchase exceeding Php 2,500 would give you a 10% discount</h2>
<h2>Check for discount for purchase of <?php echo $quantity;?> pieces of
    <?php echo $product?></h2>
<br>
<table>
	<tr>
		<th>Information</th>
		<th>Details</th>
</tr>
<tr>
		<td>Price for Each Piece</td>
		<td><strong>Php <?= $price ?></strong></td>
</tr>
<tr>
		<td>Quantity</td>
		<td><strong><?= $quantity ?></strong></td>
</tr>
<tr>
		<td>Total Purchase</td>
		<td><strong>Php <?= $total ?></strong></td>
</tr>
<tr>
		<td>Discount?</td>
		<td><strong><?= $statement ?></strong></td>
</tr>
<?php if ($discount_tf === true) {
	?>
<tr>
		<td>Discount Price</td>
		<td><strong>Php <?= $price_discount ?></strong></td>
</tr>
<?php } ?>
<tr>
		<td>Final Price</td>
		<td><strong>Php <?= $fin_price ?></strong></td>
</tr>
</table>


<?php include 'footer.php' ?>