<?php 
   $num1 = 20;
   $num2 = 30;

   $equal = $num1 == $num2;
   
//    echo $equal;
 echo "Checking if \$num1 == \$num2: ";
var_dump($equal);

   
   $notEqual = $num1 != $num2;
//    echo $notEqual;
  echo "Checking if \$num1 != \$num2: ";
var_dump($notEqual);
   
   $identical = $num1 === $num2;
   // === is identical operator
    echo "Checking if \$num1 === \$num2 (Identical): ";
  var_dump($identical);
  
   $notIdentical = $num1 !== $num2;
   // === is identical operator
     echo "Checking if \$num1 !== \$num2 (Not Identical): ";
  var_dump($notIdentical);
    
   $greater = $num1 > $num2;
    echo "Checking if \$num1 > \$num2: ";
  var_dump($greater );
  
  $greaterEqual = $num1 >= $num2;
     echo "Checking if \$num1 >= \$num2: ";
  var_dump($greaterEqual );
  
   $less = $num1 < $num2;
     echo "Checking if \$num1 < \$num2: ";
  var_dump($less );

   $lessEqual = $num1 <= $num2;
    echo "Checking if \$num1 <= \$num2: ";
  var_dump($lessEqual );
  
    ?>