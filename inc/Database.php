<?php
class Database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function __construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->baseName = 'masterclass';
        $this->connect();
    }

    function __destruct() {
        $this->disconnect();
    }

    // Подключение к базе
    function connect() {
        if (!$this->conn) {
            try {
                $this->conn = new PDO(
                    'mysql:host='.$this->host.';dbname='.$this->baseName.';charset=utf8',
                    $this->user,
                    $this->password,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return $this->conn;
    }

    // Отключение
    function disconnect() {
        $this->conn = null;
    }

    // Получить одну запись
    function getOne($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Получить все записи
    function getAll($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Выполнить запрос (INSERT, UPDATE, DELETE)
    function executeRun($query, $params = []) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->rowCount(); // возвращает кол-во затронутых строк
    }

    // Транзакция - начать
    function beginTransaction() {
        $this->conn->beginTransaction();
    }

    // Транзакция - подтвердить
    function commit() {
        $this->conn->commit();
    }

    // Транзакция - откатить
    function rollBack() {
        $this->conn->rollBack();
    }
}
