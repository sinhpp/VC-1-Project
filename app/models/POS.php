// app/models/POS.php
class POS {
    public static function addOrder($cashierId, $total, $paymentMethod) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO pos_orders (cashier_id, total, payment_method) VALUES (?, ?, ?)");
        return $stmt->execute([$cashierId, $total, $paymentMethod]);
    }

    public static function getOrders() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM pos_orders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
