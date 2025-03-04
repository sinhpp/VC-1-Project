<!-- app/views/home.php -->
<?php require_once 'layout/header.php'; ?>

<div class="container mt-5">
    <h2>Product List</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/<?= $product['image'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5><?= $product['name'] ?></h5>
                        <p>$<?= $product['price'] ?></p>
                        <a href="product?id=<?= $product['id'] ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>
