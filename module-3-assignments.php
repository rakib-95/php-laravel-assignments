<?php

// Assignment : 1
function isEven($number) {
    if ($number % 2 == 0) {
      return "$number is an Even Number";
    } else {
      return "$number is an Odd Number";
    }
  }

  $number = -2;
echo isEven($number), PHP_EOL;

// Assignment : 2 
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum +=$i;
}
echo "The summation of the series 1 + 2 + 3 + ... + 100 is: $sum", PHP_EOL;

