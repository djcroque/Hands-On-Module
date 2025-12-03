<?php
declare(strict_types = 1);
$name = '';
$title='Functions';
$products = [
    'Christmas Tree' => ['price' => 1999, 'stock' => 12],
    'Christmas Lights (3 meters)' => ['price' => 799, 'stock' => 27],
    'Christmas Lights (5 meters)' => ['price' => 999, 'stock' => 4],
    'Parol' => ['price' => 1499, 'stock' => 1],
    'Nativity Scene' => ['price' => 499, 'stock' => 4],
    'Christmas Balls (10 pcs)' => ['price' => 1299, 'stock' => 6],
];

$tax = 20;

function get_reorder_message(int $stock):string
{
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float
{
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float
{
    return ($price * $quantity) * ($tax / 100);
}
?>

<?php include 'header.php' ?>

<h2>STOCK CONTROL OF PASKU CHRISTMAS STORE PRODUCTS</h2>

<table>
<tr>
    <th>Product</th>
    <th>Stock</th>
    <th>Re-Order</th>
    <th>Total Value</th>
    <th>Tax Due</th>
</tr>
<?php
foreach($products as $product_name => $data){

?>
<tr>
    <td><?= $product_name;?></td>
    <td><?= $data['stock']; ?> </td>
    <td><?= get_reorder_message($data['stock']); ?></td>
    <td>Php <?= get_total_value($data['price'], $data['stock']); ?></td>
    <td>Php <?= get_tax_due($data['price'], $data['stock'], $tax); ?></td>
</tr>
<?php } ?>
</table>



<?php include 'footer.php' ?>