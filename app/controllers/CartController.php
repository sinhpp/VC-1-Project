// app/controllers/CartController.php
require_once '../app/models/Cart.php';

class CartController {
    public function showCart() {
        $cartItems = Cart::getCart();
        require_once '../app/views/cart.php';
    }

    public function addToCart() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            Cart::addItem($_POST['product_id'], $_POST['quantity']);
            header('Location: cart');
        }
    }

    public function checkout() {
        require_once '../app/views/checkout.php';
    }
}
