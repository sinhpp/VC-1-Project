require_once '../app/models/User.php';


class AuthController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (User::register($_POST['name'], $_POST['email'], $_POST['password'])) {
                header('Location: login');
            } else {
                echo "Registration Failed!";
            }
        }
        require_once '../app/views/auth/register.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = User::login($_POST['email'], $_POST['password']);
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                header('Location: profile');
            } else {
                echo "Invalid credentials!";
            }
        }
        require_once '../app/views/auth/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: login');
    }
}
