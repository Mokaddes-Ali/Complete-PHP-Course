<?php 
class Logger{
    private static $logs = [];
    private static $totalLogs = 0;

    public static function log($message){
        $timestamp = date("Y-m-d H:i:s");
        $logEntry = $timestamp . " - " . $message;

        self::$logs[] = $logEntry;
        self::$totalLogs++;
    }

    public static function getLogs(){
        return self::$logs;
    }
    public static function getTotalLogs(){
        return self::$totalLogs;
    }
 
    
}

Logger::log("User logged in");
Logger::log("Error: Database connection failed!");
Logger::log("New Product Added.");

$allLogs = Logger::getLogs();
$totalLogs = Logger::getTotalLogs();

echo "All Logs:<br>";
foreach($allLogs as $log){
    echo "-$log<br>";
}

echo "<br>Total Logs: $totalLogs";
?>