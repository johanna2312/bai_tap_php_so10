<?php
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        echo "[INFO] " . $message . "\n";
    }
    
    public function logWarning($message) {
        echo "[WARNING] " . $message . "\n";
    }
    
    public function logError($message) {
        echo "[ERROR] " . $message . "\n";
    }
}

class DatabaseLogger implements Logger {
    public function logInfo($message) {
        echo "[INFO] Logging info to database: " . $message . "\n";
    }
    
    public function logWarning($message) {
        echo "[WARNING] Logging warning to database: " . $message . "\n";
    }
    
    public function logError($message) {
        echo "[ERROR] Logging error to database: " . $message . "\n";
    }
}

$fileLogger = new FileLogger();
$fileLogger->logInfo("This is an information message");
$fileLogger->logWarning("This is a warning message");
$fileLogger->logError("This is an error message");

$databaseLogger = new DatabaseLogger();
$databaseLogger->logInfo("This is an information message");
$databaseLogger->logWarning("This is a warning message");
$databaseLogger->logError("This is an error message");
?>