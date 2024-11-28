<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Your cart is empty.";
    exit;
}

$total = 0;
echo "<h2>Your Cart</h2>";
foreach ($_SESSION['cart'] as $item) {
    echo "<p>{$item['name']} - $ {$item['price']}</p>";
    $total += $item['price'];
}
echo "<h3>Total: $ {$total}</h3>";
?>
