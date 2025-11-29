<?php 
$name = 'Jorlyn';
$price = '26';
$best_sellers = ['Roses', 'Tulips', 'Lilies', 'Daisies', 'Orchids',
 'Sunflowers', 'Peonies'];
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
        <h2>Welcome <?php echo $name; ?>!</h2>
        
        <h2>Best Sellers</h2>
        <ul>
            <li><?php echo $best_sellers[0]; ?></li>
            <li><?php echo $best_sellers[1]; ?></li>
            <li><?php echo $best_sellers[2]; ?></li>
            <li><?php echo $best_sellers[3]; ?></li>
            <li><?php echo $best_sellers[4]; ?></li>
        </ul>

        <h2>Survey</h2>
        <p>Among the best-selling flowers, which is the best for you?</p>
        <p>You selected: <?php echo $best_sellers[0]; ?></p>
        <p>Price per bouquet: $<?php echo $price; ?></p>
    </body>
</html>