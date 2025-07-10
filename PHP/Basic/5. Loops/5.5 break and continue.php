<?php

// Example of Break
for ($i = 1 ; $i<=10 ; $i++){
    if($i%2 == 0){
        break;
    }
    echo "Print Odd Number:" . " " . "$i\n";
}

   echo "\n";

for ($i = 1 ; $i<=10 ; $i++){ 
    if($i%2 !==0){ 
        break; 
    }
     echo "Even Number:" . " " . "$i\n";
    }

// Example of continue
echo "Start continue\n";
for ($i = 1 ; $i<=10 ; $i++){
    if($i%2 == 0){
        continue;
    }
    echo "Print Odd Number:" . " " . "$i\n";
}

   echo "\n";

for ($i = 1 ; $i<=10 ; $i++){ 
    if($i%2 !==0){ 
        continue; 
    }
     echo "Even Number:" . " " . "$i\n";
    }
     
 ?>