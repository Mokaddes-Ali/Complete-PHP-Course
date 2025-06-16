<?php

$yourMarks = 30;

switch($yourMarks){

case ($yourMarks >= 80) :
    echo "Your result is A+";
    break;
case ($yourMarks >= 70) :
    echo "Your result is A.";
     break;
case ($yourMarks >= 60):
    echo "Your result is A-";
     break;
case ($yourMarks >= 50) :
    echo "Your result is B";
     break;
case ($yourMarks >= 40) :
    echo "Your result is C";
     break;
case ($yourMarks >= 33) :
    echo "Your result is D";
     break;
default:
    echo "You are failed";
}
?>

<!-- Note Book: if-elseif a all programme run hy but switch statement kothay mile gelei programme break kre da... -->