<?

class Database {
    private $host = 'localhost';
    private $db_name = 'username';
    private $username = 'root';
    private $password = '123456';
    private $connection;

    // Connection
    public function connect() {
        $this->connection = null;
    

    try {
        $this->connection = new PDO('postgres:host=' . $this->host . ';dbname= ' . $this->db_name,
        $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->connection;

    }
}