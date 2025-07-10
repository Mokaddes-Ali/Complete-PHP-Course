<?php
$a = 5;

// Increment Operator

// post increment: প্রথমে $a এর মান $c তে যাবে, তারপর $a বাড়বে
$c = $a++;
echo "Post-increment: Value of c (before increment) = $c\n";
echo "Value of a (after increment) = $a\n";

// pre increment: আগে $b বাড়বে, তারপর $d তে সেই মান যাবে
$b = 5;
$d = ++$b; //output 6, 
echo "Pre-increment: Value of d (after increment) = $d\n";
echo "Value of b (after increment) = $b\n";

#example2

// Decrement Operator

// post decrement: প্রথমে $a এর মান $c তে যাবে, তারপর $a কমবে
$c = $a--;
echo "Post-decrement: Value of c (before decrement) = $c\n";
echo "Value of a (after decrement) = $a\n";

// pre decrement: আগে $b কমবে, তারপর $d তে সেই মান যাবে
$d = --$b;
echo "Pre-decrement: Value of d (after decrement) = $d\n";
echo "Value of b (after decrement) = $b\n";
?>