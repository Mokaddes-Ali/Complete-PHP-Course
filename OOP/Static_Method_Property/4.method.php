<?php 

class MathOperations{
    public static function add($a, $b){
        return $a + $b;
    }

      public static function multipy($a, $b){
        return $a * $b;
    }

        public static function square($number){
        return $number * $number;
    }
}

echo "Addition of two number 10 and 15:" . " " . MathOperations::add(10,15) . "\n";
echo "Multiplicatin of two number 10 and 15:" . " " . MathOperations::multipy(10,15) . "\n";

echo "Square of number 6:" . " " . MathOperations::square(6);
?>