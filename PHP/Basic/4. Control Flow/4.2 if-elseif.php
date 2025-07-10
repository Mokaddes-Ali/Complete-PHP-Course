<?php

$yourMarks = 60;

if($yourMarks >= 80){
    echo "Your result is A+\n";
}elseif($yourMarks >= 70){
    echo "Your result is A.\n";
}elseif($yourMarks >= 60){
    echo "Your result is A-\n";
}elseif($yourMarks >= 50){
    echo "Your result is B\n";
}elseif($yourMarks >= 40){
    echo "Your result is C\n";
}elseif($yourMarks >= 33){
    echo "Your result is D\n";
}else{
    echo "You are failed\n";
}
?>