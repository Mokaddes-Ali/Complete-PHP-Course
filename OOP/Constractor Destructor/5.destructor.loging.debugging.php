<?php 

class Logger{
    private $logFile;

    public function __construct($logFile){
        $this->logFile = $logFile;
        file_put_contents($this->logFile, date("Y-m-d H:i:s") . " Data started\n");
        echo "Logger Started...\n";
    }

    public function __destruct(){
        file_put_contents($this->logFile, date("Y-m-d H:i:s") . " Data ended\n", FILE_APPEND);
        echo "Logger Ended...\n";
    }
}

$logger = new Logger("app.log");
echo "Working with Logger object...\n";
?>
