// app/controllers/ProductController.php
require_once '../app/models/Product.php';

class ProductController {
    public function index() {
        $products = Product::getAll();
        require_once '../app/views/home.php';
    }

    public function showProduct() {
        $id = $_GET['id'] ?? 1;
        $product = Product::getById($id);
        require_once '../app/views/product.php';
    }
}
