<!-- app/views/admin/products.php -->
<div class="container mt-5">
    <h2>Manage Products</h2>
    <a href="addProduct.php" class="btn btn-success">Add New Product</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td>$<?= $product['price'] ?></td>
                <td>
                    <a href="editProduct.php?id=<?= $product['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="deleteProduct.php?id=<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
