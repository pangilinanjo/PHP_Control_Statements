<?php 
    // Type juggling example using flower store data
    $item = 'Roses';
    $stock = 30;
    $wanted = '3'; // string
    $deliver = true; 
    $price = '26'; // string
    $final_price = $price + true; // true = 1 = 27
    $check = '0';
    $is_valid = (bool)$check; // false
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Type Juggling</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <h1>The Flower Shop</h1>

        <h2>Type Juggling in Action:</h2>
        <p>Item selected: <?= $item; ?></p>
        <p>Available stock: <?= $stock; ?></p>
        <p>Quantity ordered: <?= $wanted; ?></p>
        <p>Total price (with bonus): $<?= $final_price; ?></p>
        <p>Is valid (from '0'): <?= $is_valid; ?></p>  <!-- won't visibly show false, it will be blank on the browser. -->
    </body>
</html>