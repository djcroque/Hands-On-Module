<!--Roque, Daryl John Clark Q.
    CYB-201
    6DWEB-->

<?php
$title = 'Multidimensional Array';
$name = 'Clark';
$events =[
    ['name' => 'End-of-November Sale',
    'desc' => 'A 10% discount on selected items at the end of the month before December!',
    'date' => 'November 30, 2025'],
    ['name' => 'Christmas Tree Lighting',
    'desc' => 'Come see the bright store Christmas tree to warm our spirits!',
    'date' => 'December 2, 2025'],
    ['name' => 'Santa Stall',
    'desc' => 'Our friendly neighbourhood Santa Claus is here to guess who\'s naughty or nice!',
    'date' => 'December 1-22, 2025'],
        ['name' => 'Christmas Bazaar',
    'desc' => 'Stalls from different stores join us in perfecting the holiday season!',
    'date' => 'December 20, 2025'],];
$events[0]['date'] = 'November 28-30, 2025';
$events[1]['desc'] = 'Come join us in making our Christmas even brighter!';
?>

<?php include 'header.php'; ?>
<h2>Here are our following events to be held in our store:</h2>
<p>
<table>
<tr>
     <th>Event Name</th>
     <th>Details</th>
     <th>Date</th>
</tr>
<?php foreach ($events as $event) { ?>
<tr>
    <td><?=$event['name'];?></td>
    <td><?=$event['desc'];?></td>
     <td><?=$event['date'];?></td>
</tr>
<?php
}
?>
</table>

<?php include 'footer.php'; ?>