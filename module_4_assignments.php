<?php

/* Problem_1
  A PHP function to sort an array of strings by their length, in ascending order.
*/
function sortStringsByLength($arr) {
    usort($arr, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $arr;
  }

  $arr = array("apple", "mango", "orange", "milk", "tamarind");
$arr = sortStringsByLength($arr);
print_r($arr);
echo PHP_EOL;


/* Problem_2  
  A PHP function to concatenate two strings, but with the second string starting from the end of the first string.
*/

function concatStrings($string1, $string2) {
  return $string1 . $string2;
}

$string1 = "Rakib";
$string2 = "Hasan";
$result = concatStrings($string1, $string2);
echo $result, "\n";


/*Problem_3
  A PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/

function removeFirstAndLast($arr) {
  array_shift($arr); 
  array_pop($arr); 
  return $arr;
}

$arr = array(1, 2, 3, 4, 5, 6);
$newArr = removeFirstAndLast($arr);
print_r($newArr);
echo PHP_EOL;

/*Problem_4
  A PHP function to check if a string contains only letters and whitespace.
*/
function checkOnlyLettersWhitespace($str) {
  return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$string1 = "Rakib Hasan";

IF(checkOnlyLettersWhitespace($string1)){
   echo "Yes, This string contains only letters and whitespace. \n";
}Else {
  echo "No, This string isn't contains only letters and whitespace. \n";
}

echo PHP_EOL;

/*Problem_5
  A PHP function to find the second largest number in an array of numbers.
*/

function findSecondLargest($arr) {

  $n = count($arr);
  if ($n<2) {
    return "Array should have at least two elements";
  }

  $largest = $arr[0];
  $secondLargest = $arr[0];
  
  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $largest) {
      $secondLargest = $largest;
      $largest = $arr[$i];
    } else if ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
      $secondLargest = $arr[$i];
    }
  }
  
  return $secondLargest;
}

$arr = [1, 2, 4, 5, 10, 20];
$newarr = findSecondLargest($arr);

print_r ($newarr);

echo PHP_EOL;