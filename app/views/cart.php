<!-- app/views/cart.php -->
<?php foreach ($cartItems as $productId => $quantity): ?>
    <p>Product ID: <?= $productId ?> - Quantity: <?= $quantity ?></p>
<?php endforeach; ?>
<a href="checkout">Proceed to Checkout</a>
