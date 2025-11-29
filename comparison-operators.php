<?php 
    $item = 'Roses';
    $stock = 30;
    $wanted = 3;
    $deliver = true;
    $can_buy = ($wanted <= $stock) && ($deliver == true);
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Expressions & Operators</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <h1>The Flower Store</h1>
        <h2>Shopping Cart</h2>
        <p>Item: <?= $item; ?></p>
        <p>Stock: <?= $stock; ?></p>
        <p>Wanted: <?= $wanted; ?></p>
        <p>Can Buy: <?= $can_buy; ?></p>
    </body>
</html>