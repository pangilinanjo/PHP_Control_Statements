<?php 
    $name = 'Jorlyn';
    $favorites = ['Roses', 'Tulips', 'Lilies', 'Orchids',
                'Sunflowers', 'Peonies', 'Daisies', 'Carnations',
                'Chrysanthemums', 'Marigolds', 'Lavender', 'Hibiscus',
                'Jasmine', 'Magnolias', 'Camellias'];
?>
    <?php include 'header.php'; ?>
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
    <?php include 'footer.php'; ?>