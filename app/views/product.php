<!-- app/views/product.php -->
<?php require_once 'layout/header.php'; ?>

<div class="container mt-5">
    <h2><?= $product['name'] ?></h2>
    <img src="assets/images/<?= $product['image'] ?>" width="300">
    <p><?= $product['description'] ?></p>
    <p>Price: $<?= $product['price'] ?></p>
    <button class="btn btn-success">Add to Cart</button>
</div>

<?php require_once 'layout/footer.php'; ?>
