<?php
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        echo "Connecting to MySQL database.\n";
        // Perform MySQL database connection logic
    }
    
    public function query($sql) {
        echo "Executing MySQL query: " . $sql . "\n";
        // Execute MySQL query logic
    }
    
    public function disconnect() {
        echo "Disconnecting from MySQL database.\n";
        // Perform MySQL database disconnection logic
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Connecting to PostgreSQL database.\n";
        // Perform PostgreSQL database connection logic
    }
    
    public function query($sql) {
        echo "Executing PostgreSQL query: " . $sql . "\n";
        // Execute PostgreSQL query logic
    }
    
    public function disconnect() {
        echo "Disconnecting from PostgreSQL database.\n";
        // Perform PostgreSQL database disconnection logic
    }
}

$mysql = new MySQLDatabase();
$mysql->connect();
$mysql->query("SELECT * FROM users");
$mysql->disconnect();

$postgres = new PostgreSQLDatabase();
$postgres->connect();
$postgres->query("SELECT * FROM products");
$postgres->disconnect();
?>