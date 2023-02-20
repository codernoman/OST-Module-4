<?php
// Start 1 No question

function sortStringsByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array('Sazib', 'Al Noman', 'Arif', 'Tamal');
$sortedStrings = sortStringsByLength($strings);
print_r($sortedStrings);


echo PHP_EOL;
echo "-------------------------------";
echo PHP_EOL;
// End 1 No question


// Start 2 No Question
function concat_reverse($str1, $str2) {
	$len1 = strlen($str1);
	$len2 = strlen($str2);
	$newstr = '';
	for ($i = $len1 - 1; $i >= 0; $i--) {
	  $newstr .= $str1[$i];
	}
	for ($i = $len2 - 1; $i >= 0; $i--) {
	  $newstr .= $str2[$i];
	}
	return $newstr;
  }
$str1 = "Al";
$str2 = "Noman";
$result = concat_reverse($str1, $str2);
echo $result; 

echo PHP_EOL;
echo "-------------------------------";
echo PHP_EOL;
// End 2 No Question


// Start 3 No Question
function remove_element($arr){
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$my_array = array('Sazib', 'Noman', 'Arif', 'Tamal');
$new_array = remove_element($my_array);
print_r($new_array);
echo PHP_EOL;
echo "-------------------------------";
echo PHP_EOL;
// End 3 No Question


// Start 4 No question
function containsOnlyLettersAndWhitespace($str) {
	return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
  }
  echo containsOnlyLettersAndWhitespace("hello");


echo PHP_EOL;
echo "-------------------------------";
echo PHP_EOL;
// End 4 No question


// Start 5 No question
function findSecondLargestNumber($arr) {
    $largest = null;
    $secondLargest = null;

    foreach ($arr as $num) {
        if ($largest === null || $num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num !== $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}
$numbers = array(10,60,90,30,120);
$secondLargest = findSecondLargestNumber($numbers);
echo "The second largest number is: ".$secondLargest;



echo PHP_EOL;
// End 5 No question
