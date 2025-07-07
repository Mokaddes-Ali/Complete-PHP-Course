<?php 

class TempFile{
    private $fileName;

    public function __construct($fileName){
        $this->fileName = $fileName;
        file_put_contents($this->fileName, "Temporary Data!");
    }
    public function __destruct(){
        unlink($this->fileName);
        echo "Temporary File deleted.\n";
    }
}

$tempFile = new TempFile("text.txt");
?>