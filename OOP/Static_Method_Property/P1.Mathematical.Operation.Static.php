<?php 
class MathUtility{
     private static $totalCalculations = 0;

        public static function add($a, $b){
            self::$totalCalculations++;
         return $a + $b;
    }

      public static function subtract($a, $b){
         self::$totalCalculations++;
        return $a - $b;
    }

    public static function getTotalCalculations(){
        return self::$totalCalculations;

    }
}

$result1 = MathUtility::add(10,20);
$result2 = MathUtility::subtract(40,20);

$totalCalculations = MathUtility::getTotalCalculations();

echo "Result 1 : $result1\n";
echo "Result 2 : $result2\n";
echo "Total Calculations: $totalCalculations";
?>