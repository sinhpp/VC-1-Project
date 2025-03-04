// app/controllers/POSController.php
require_once '../app/models/POS.php';

class POSController {
    public function checkout() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            POS::addOrder($_SESSION['user_id'], $_POST['total'], $_POST['payment_method']);
            header('Location: pos_orders');
        }
    }

    public function showOrders() {
        $orders = POS::getOrders();
        require_once '../app/views/pos_orders.php';
    }
}
