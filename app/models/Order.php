// app/models/Order.php
class Order {
    public static function createOrder($userId, $totalPrice) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO orders (user_id, total_price) VALUES (?, ?)");
        return $stmt->execute([$userId, $totalPrice]);
    }

    public static function getOrdersByUser($userId) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM orders WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getOrderStatus($orderId) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT status FROM orders WHERE id = ?");
        $stmt->execute([$orderId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
