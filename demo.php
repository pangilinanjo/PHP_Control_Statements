<?php 
    $item = 'Roses';
    $stock = 30;
    $wanted = '3'; 
    $deliver = true; 
    $price = '26';
    $final_price = $price + true; 
    $check = '0';
    $is_valid = (bool)$check;
?>

    <?php include 'header.php'; ?>
        <h2>Type Juggling in Action</h2>

        <p>Item selected: <?= $item ?></p>
        <p>Available stock: <?= $stock ?></p>
        <p>Quantity ordered: <?= $wanted ?></p>
        <p>Total price (with bonus): $<?= $final_price ?></p>
        <p>Is valid (from "0"): <?= $is_valid ? 'true' : 'false' ?></p>

    <?php include 'footer.php'; ?>