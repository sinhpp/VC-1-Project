// app/controllers/AdminController.php
require_once '../app/models/Product.php';
require_once '../app/models/Order.php';

class AdminController {
    public function manageProducts() {
        $products = Product::getAll();
        require_once '../app/views/admin/products.php';
    }

    // app/controllers/AdminController.php

    public function manageOrders() {
        $db = Database::connect();
        $orders = $db->query("SELECT * FROM orders")->fetchAll(PDO::FETCH_ASSOC);
        require_once '../app/views/admin/orders.php';
    }

    public function updateOrderStatus() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db = Database::connect();
            $stmt = $db->prepare("UPDATE orders SET status = ? WHERE id = ?");
            $stmt->execute([$_POST['status'], $_POST['order_id']]);
            header('Location: manage_orders');
        }
    }
}

