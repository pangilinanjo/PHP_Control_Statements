<?php
declare(strict_types = 1); 

$flowerproduct = [
    // Bouquets
    "Roses (Bouquet)" => ["price" => 2500.00, "stock" => 18],
    "Tulips (Bouquet)" => ["price" => 2500.00, "stock" => 8],
    "Lilies (Bouquet)" => ["price" => 2200.00, "stock" => 12],
    "Peonies (Bouquet)" => ["price" => 4500.00, "stock" => 4],
    "Carnations (Bouquet)" => ["price" => 1500.00, "stock" => 14],
    // Bundles
    "Daisies (Bundle)" => ["price" => 800.00, "stock" => 5],
    "Lavender (Bundle)" => ["price" => 900.00, "stock" => 11],
    "Marigolds (Bundle)" => ["price" => 450.00, "stock" => 6],
    // Stems
    "Orchids (Stem)" => ["price" => 350.00, "stock" => 25],
    "Sunflowers (Stem)" => ["price" => 200.00, "stock" => 9],
    "Chrysanthemums (Stem)" => ["price" => 120.00, "stock" => 7],
    // Additional new products
    "Hydrangeas (Bouquet)" => ["price" => 2800.00, "stock" => 10],
    "Gardenias (Stem)" => ["price" => 180.00, "stock" => 15],
    "Baby's Breath (Bundle)" => ["price" => 600.00, "stock" => 20],
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $taxPercent = 0): float {
    $total = $price * $quantity;
    return $total * ($taxPercent / 100);
}
?>

<?php include 'header.php'; ?>

<h2>Flower Stock Inventory List</h2>

    <table>
        <tr>
            <th>Product</th>
            <th>Price (Php)</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total Stock Value</th>
            <th>Tax Due (<?= $tax_rate ?>%)</th>
        </tr>

        <?php foreach ($flowerproduct as $product_flower => $data) {
            $price = $data["price"];
            $stock = $data["stock"];
            $reorder_msg = get_reorder_message($stock);
            $total_value = get_total_value($price, $stock);
            $tax_due = get_tax_due($price, $stock, $tax_rate);
        ?>

        <tr>
            <td><?= $product_flower ?></td>
            <td>₱<?= $price ?></td>
            <td><?= $stock ?></td>
            <td><?= $reorder_msg ?></td>
            <td>₱<?= $total_value ?></td>
            <td>₱<?= $tax_due ?></td>
        </tr>

        <?php 
        } 
        ?>
    </table>

<?php include 'footer.php'; ?>