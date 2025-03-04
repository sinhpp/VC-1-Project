// app/core/Database.php
class Database {
    private static $pdo = null;

    public static function connect() {
        if (self::$pdo === null) {
            self::$pdo = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");
        }
        return self::$pdo;
    }
}
