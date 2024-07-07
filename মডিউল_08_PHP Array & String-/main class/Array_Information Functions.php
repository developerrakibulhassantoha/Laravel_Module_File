<?php
// Array Information Functions

#count() - Counts the number of elements in an array.
$numbers = array(1, 2, 3, 4, 5);
echo count($numbers);

#sizeof() - An alias of count(). Also counts the number of elements in an array.
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo sizeof($numbers);

#array_sum() - Computes the sum of values in an array.
$numbers = array(1, 2, 3, 4, 5);
echo array_sum($numbers);

#array_product() - Computes the product of values in an array.
$numbers = array(1, 2, 3, 4, 5);
echo array_product($numbers);

#in_array() - Checks if a value exists in an array.
$numbers = array(1, 2, 3, 4, 5);
if(in_array(6, $numbers)) {
    echo "3 is in the array.";  // This will be printed
}
else{
    echo "That is not array";
}

#is_array() - Checks if a variable is an array.
$numbers = array(1, 2, 3, 4, 5);
if(is_array($numbers)) {
    echo "This is an array.";
}

#array_key_exists() - Checks if a key exists in an array.
$assoc = array("first" => "apple", "second" => "banana");
if(array_key_exists("first", $assoc)) {
    echo "Key 'first' exists in the array.";
}
// $key =array_key_exists("first", $assoc);
// echo $key;

#array_search() - Searches the array for a given value and returns the first corresponding key.
// $assoc = array("first" => "apple", "second" => "banana");
// $key = array_search("banana", $assoc);
// echo $key;
