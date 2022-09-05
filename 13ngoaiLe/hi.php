<?php
class Calculator
{
   function division($a, $b): float|int
   {
      if ($b == 0) {
       throw new Exception('Error');
      }
      return $a / $b;
   }
}

try {
  $x = 0;
  $y = 10;
  $calculator = new Calculator();
  $calculator->division($y, $x);
} catch (Exception $e) {
  echo $e->getMessage();
}

 