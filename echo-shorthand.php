<?php 
$name = 'Jorlyn';
$favorites = ['Roses', 'Tulips', 'Lilies', 'Orchids',
            'Sunflowers', 'Peonies', 'Daisies', 'Carnations',
            'Chrysanthemums', 'Marigolds', 'Lavender', 'Hibiscus',
            'Jasmine', 'Magnolias', 'Camellias'];
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Shorthand echo</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <h1>The Flower Store</h1>

        <h2><?= $name;?>, please select the flower you will order:</h2>
        <ul>
            <li><?= $favorites[0]; ?></li>
            <li><?= $favorites[1]; ?></li>
            <li><?= $favorites[2]; ?></li>
            <li><?= $favorites[3]; ?></li>
            <li><?= $favorites[4]; ?></li>
            <li><?= $favorites[5]; ?></li>
            <li><?= $favorites[6]; ?></li>
            <li><?= $favorites[7]; ?></li>
            <li><?= $favorites[8]; ?></li>
            <li><?= $favorites[9]; ?></li>
            <li><?= $favorites[10]; ?></li>
            <li><?= $favorites[11]; ?></li>
            <li><?= $favorites[12]; ?></li>
            <li><?= $favorites[13]; ?></li>
            <li><?= $favorites[14]; ?></li>
        </ul> 
        <p>Your order is:
            <?= $favorites[0]; ?>.</p>
    </body>
</html>