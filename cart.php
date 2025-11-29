<?php 
    $item = 'Roses';
    $stock = 30;
    $wanted = 3;
    $deliver = true;
    $can_buy = ($wanted <= $stock) && $deliver;
?>

    <?php include 'header.php'; ?>
        <h2>Shopping Cart</h2>
        <p>Item: <?= $item ?></p>
        <p>Stock: <?= $stock ?></p>
        <p>Wanted: <?= $wanted ?></p>
        <p>Can Buy: <?= $can_buy ? 'Yes' : 'No' ?></p>
    <?php include 'footer.php'; ?>