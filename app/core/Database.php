<?php 
class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $dbh;
    private $stmt;
    public function __construct() {

    $dsn = "mysql:host=". $this->host.";dbname=" . $this->db_name;
    $option = [
    PDO :: ATTR_PERSISTENT => true,
    PDO :: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

    try {
            $this->dbh = new PDO($dsn, $this->user,$this->pass, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type=null) {
        if(is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        $this->stmt->execute();
    }

    public function resultAll() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultSingle() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function fetchColumn($columnIndex = 0) {
        $this->execute();
    
        // Handle potential errors during execution
        if (!$this->stmt) {
            // Implement error handling (e.g., throw exception, log error)
            return false;
        }
    
        $result = $this->stmt->fetchColumn($columnIndex);
    
        // Differentiate between no rows and a boolean value (false)
        if ($result === false) {
            if ($this->stmt->rowCount() === 0) {
                // No rows found
                return null;
            } else {
                // Handle boolean value (false) or other potential issues
                // (e.g., log a warning or return a default value)
            }
        }
    
        return $result;
    }

}

?>