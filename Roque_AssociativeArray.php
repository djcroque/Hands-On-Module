<!--Roque, Daryl John Clark Q.
    CYB-201
    6DWEB-->

<?php
$title = 'Associative Array';
$name = '';
$products =[
    'Christmas Tree' => 1999.99,
    'Advent Candle' => 1499.99,
    'Parol Lantern (Large)' => 2399.99,
    'Parol Lantern (Small)' => 1299.99,
    'Christmas Lights (5 meters)' => 899.99,
];
?>

<?php include 'header.php'; ?>

<h2>Here are our most famous products with their prices!<br>
    Products with prices Php 2000 upwards are premium products, <br>
    while those with only Php 1000 upwards are special products!</h2>
<p>
<table>
<tr>
    <th>Product</th>
    <th>Price</th>
    <th>Product Type</th>
</tr>
<tr>
<?php foreach ($products as $item => $price) {
    ?>
    <td><?=$item?></td>
    <td>Php <?= $price?></td>
    <td>
    <?php
        if ($price >= 2000) {
            echo 'Premium';
        }
        else if ($price >= 1000) {
            echo 'Special';
        }
        else {
            echo 'Regular';
        }
        ?>
    </td>
</tr>
<?php
}
?>
</table>


<?php include 'footer.php'; ?>
