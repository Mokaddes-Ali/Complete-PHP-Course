<?php
class MathHelper{
   public static $pi = 3.1416;

   public static function multiplyByPi($number){
   return  $number * self::$pi;
   }

}
   echo "value of P:" . MathHelper::$pi . "\n";
   echo "10 multiplited by PI:" . MathHelper::multiplyByPi(10) . "\n";
?>