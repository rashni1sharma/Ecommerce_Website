<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="styles.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>My E-commerce Store</h1>
    </header>

    <main>
        <section id="products">
            <h2>Products</h2>
            <?php include 'php/fetch_products.php'; ?>
        </section>

        <section id="cart">
            <h2>Cart</h2>
            <div id="cart-items">
                <?php include 'php/view_cart.php'; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 roshani E-commerce Store</p>
    </footer>
</body>
</html>
