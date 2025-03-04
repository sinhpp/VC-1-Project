// app/controllers/OrderController.php
require_once '../app/models/Order.php';

class OrderController {
    public function checkout() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit();
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $totalPrice = $_POST['total_price'];
            Order::createOrder($_SESSION['user_id'], $totalPrice);
            header('Location: orders');
        }
        require_once '../app/views/checkout.php';
    }

    public function trackOrders() {
        session_start();
        $orders = Order::getOrdersByUser($_SESSION['user_id']);
        require_once '../app/views/orders.php';
    }
}
