// public/index.php
require_once '../app/core/Router.php';
require_once '../app/controllers/ProductController.php';

$router = new Router();
$router->add('/', 'ProductController', 'index');  // Home page
$router->add('product', 'ProductController', 'showProduct');  // Product details
$router->add('cart', 'CartController', 'showCart');  // Shopping cart
$router->add('checkout', 'CartController', 'checkout');  // Checkout page

$router->handleRequest();
