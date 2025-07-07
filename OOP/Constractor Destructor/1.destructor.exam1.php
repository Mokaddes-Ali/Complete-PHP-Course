<?php


class FileHandler{
    private $file;
    public function __construct($fileName){
        $this->file = fopen($fileName,"w");
        if($this->file){
        echo "File".$fileName."Open Successfully! \n";
        }else{
            echo "Failed to open the file\n";
        }
    }

    public function __destruct(){
        if($this->file){
            fclose($this->file);
            echo "File close successfully.\n";
        }
    }

    public function writeToFile( $content){
        if($this->file){
            fwrite($this->file, $content);
             echo "Content written successfully.\n";
        }
    }
}

$fileHandler = new FileHandler("example.txt");
$fileHandler->writeToFile("Hello World!");
?>