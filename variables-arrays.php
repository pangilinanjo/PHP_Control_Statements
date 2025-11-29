<?php 
    $name = 'Jorlyn';
    $price = '26';
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

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Variables and Arrays</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <h1>The Flower Store</h1>
        <h2><?= $greeting ?>!</h2>
        
        <h2>Best Sellers of the store</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
            <li><?php echo $best_sellers[3]; ?></li>
            <li><?php echo $best_sellers[4]; ?></li>
            <li><?php echo $best_sellers[5]; ?></li>
            <li><?php echo $best_sellers[6]; ?></li>
        </ul>

        <h2>Customer Selection</h2>
        <p>Among the best-selling flowers, which is the best for you?</p>
        <p>You selected: <?php echo $best_sellers[0]; ?></p>
        <p>Availability: <?= $message ?></p>
        <p>Price per bouquet: $<?php echo $price; ?> (<?= $price_message ?>)</p>
        <p><?= $order_message ?></p>
        <p>Special Offer: <?= $offer ?></p>

        
    </body>
</html>