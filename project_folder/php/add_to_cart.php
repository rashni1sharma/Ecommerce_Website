<?php
session_start();

// Initialize cart if not already done
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Get product details from request
$product_id = $_POST['id'];
$product_name = $_POST['name'];
$product_price = $_POST['price'];

// Add product to cart
$_SESSION['cart'][] = array(
    'id' => $product_id,
    'name' => $product_name,
    'price' => $product_price,
);

// Return success response
echo json_encode(array('status' => 'success', 'message' => "$product_name added to cart."));
?>
