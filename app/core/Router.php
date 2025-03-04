// app/core/Router.php
class Router {
    private $routes = [];

    public function add($route, $controller, $method) {
        $this->routes[$route] = ['controller' => $controller, 'method' => $method];
    }

    public function handleRequest() {
        $url = $_GET['url'] ?? '/';
        if (isset($this->routes[$url])) {
            $controller = new $this->routes[$url]['controller'];
            $method = $this->routes[$url]['method'];
            $controller->$method();
        } else {
            echo "404 Not Found";
        }
    }
}
