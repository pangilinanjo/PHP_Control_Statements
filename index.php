<?php 
    $name = 'Jorlyn';
    $price = 3000;
    $best_sellers = ['Roses', 'Tulips', 'Lilies', 'Daisies', 'Orchids',
                    'Sunflowers', 'Peonies'];
    $greeting = 'Hello';
    $stock = 30;
    $ordered = 3;
    $day = 'Monday';

    if ($name !== '') {
        $greeting = 'Welcome back, ' . $name;
    }

    if ($stock > 0) {
        $message = 'In stock';
    } else {
        $message = 'Sold out';
    }

    if ($price < 20) {
        $price_message = 'Budget-friendly choice!';
    } elseif ($price <= 50) {
        $price_message = 'Reasonable price';
    } else {
        $price_message = 'Premium bouquet';
    }

    $order_message = ($ordered > 0) ? 'Order placed: ' . $ordered . ' bouquets' : 'No orders yet';

    $offer = match($day) {
        'Monday'   => '10% off Roses',
        'Tuesday'  => 'Buy 1 Tulip, get 1 free',  
        'Friday'   => 'Free delivery on all orders',
        default    => 'No special offers today',
    };

    $count = $ordered;
    $loop_output = ""; 
    do {
        $loop_output .= $count . " bouquets cost ₱" . ($count * $price) . "<br>";
        $count--; 
    } while ($count > 0);

    $list_output = "";
    foreach ($best_sellers as $flowers) {
        $list_output .= "<p>$flowers</p>";
    }


?>
    <?php include 'header.php'; ?>
        <h2><?= $greeting ?>!</h2>
        
        <h2>Best Sellers of the store</h2>
        <?= $list_output ?>

        <h2>Customer Selection</h2>
        <p>Among the best-selling flowers, which is the best for you?</p>
        <p>You selected: <?php echo $best_sellers[0]; ?></p>
        <p>Availability: <?= $message ?></p>
        <p>Price per bouquet: ₱<?php echo $price; ?> (<?= $price_message ?>)</p>
        <p><?= $order_message ?></p>
        <p>Special Offer: <?= $offer ?></p>

        <h2>Order Cost Calculation</h2>
        <p><?= $loop_output ?></p>   
    <?php include 'footer.php'; ?>