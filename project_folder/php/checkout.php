<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Your cart is empty.";
    exit;
}

$_SESSION['cart'] = array();
echo "Thank you for your purchase!";
?>
