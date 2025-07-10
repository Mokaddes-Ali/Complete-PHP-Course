<?php

//php file write, read, close,rename, make folder
$file = fopen("new.txt", "w");
fwrite($file,"Projukti Plus");
         echo "\n";

$file = fopen("new.txt", "r");
echo fread($file,filesize("new.txt"));
fclose($file);
// mkdir("File Create");
// rename("another.txt" , "new.txt")


// In short way file_put_contents and file_get_contents
echo "\n";
echo "\n";
file_put_contents("test.txt", "Projukti Plus:" . " " . "-");
//FILE_APPEND function join the data in same file 
file_put_contents("test.txt", "Here Discuss Techology in Bangla", FILE_APPEND);
echo file_get_contents("test.txt");

//make new file in a folder
file_put_contents("9. File Handling/newFile.txt", "make a new file in folder with function");


//organize by variale name

$fileName = "test.txt";
$fileData = "Projukti Plus";
$fileNewData = "Here Discuss Techology in Bangla";

$fileCreateWithData = file_put_contents($fileName, $fileData . " " . "-");
$fileDataAdd = file_put_contents($fileName, $fileNewData, FILE_APPEND);
$fileRead = file_get_contents($fileName);
          echo "$fileRead ";
          echo "\n";
          echo "\n";
          
//make new file in a folder and read text
$newFile = "9. File Handling/newFile.txt";
$fileData = "make a new file in folder with function";
$makeFolder = file_put_contents($newFile, $fileData );
$readFile = file_get_contents($newFile);
echo $readFile;
echo "\n";

$myFolder = "9. File Handling";

if(!is_dir($myFolder)){
    mkdir($myFolder);
}else{
    echo "$myFolder folder create already";
}

echo "\n";
echo "\n";

// echo __DIR__;
echo "\n";

 $fileDirectory = "D:/Web Development/Code Practise/Php/PHP-Projukti Plus/9. File Handling/neFile.txt";
// OR
// $fileDirectory = "D:\\Web Development\\Code Practise\\Php\\PHP-Projukti Plus\\9. File Handling\\newFile.txt";
if (file_exists($fileDirectory)){
    echo file_get_contents($fileDirectory); 
}else{
    echo "File Not Found";
    
}
/* 
file_exists();
is_readable();
is_writeable();
 */

?>