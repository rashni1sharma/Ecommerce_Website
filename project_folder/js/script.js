function addToCart(id, name, price) {
    fetch('php/add_to_cart.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id, name, price })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        document.getElementById('cart-items').innerHTML = '<h2>Loading...</h2>';
        fetch('php/view_cart.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('cart-items').innerHTML = html;
            });
    });
}
