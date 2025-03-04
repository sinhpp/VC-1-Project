// app/models/Cart.php
class Cart {
    public static function addItem($productId, $quantity) {
        session_start();
        $_SESSION['cart'][$productId] = $quantity;
    }

    public static function getCart() {
        return $_SESSION['cart'] ?? [];
    }
}
