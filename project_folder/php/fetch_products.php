<?php
include 'db_connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>
                <h3>{$row['name']}</h3>
                <p>Price: $ {$row['price']}</p>
                <button onclick=\"addToCart({$row['id']}, '{$row['name']}', {$row['price']})\">Add to Cart</button>
              </div>";
    }
} else {
    echo "No products available.";
}

$conn->close();
?>
