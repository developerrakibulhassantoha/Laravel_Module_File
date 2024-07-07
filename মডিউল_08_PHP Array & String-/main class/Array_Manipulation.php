<?php
// Array Creation and Manipulation Functions

//array() - Creates an array.
$fruits = array("apple", "banana", "cherry");
$person =["name"=>"Rakibul Hassan", "age"=>23, "city"=>"Cox's Bazar"];
echo $person['age'];
echo $fruits[1];

# array_values() - Returns all the values from the array.
$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$values = array_values($assoc);
print_r($values);

# array_keys() - Returns all the keys from the array.
$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
$keys = array_keys($assoc);
print_r($keys);

# array_combine() - Combines two arrays: one for keys and the other for values.
$keys=array("R", "H", "A", "S");
$values=array("Rakib", "Hassan", "Anika", "Sharmin");
$addArray=array_combine($keys, $values);
print_r($addArray);

# array_fill() - Fills an array with values.
$filled = array_fill(10, 13, "apple");
print_r($filled);

# array_push() - Adds one or more elements to the end of an array.
$fruits = array("apple", "banana", "cherry");
array_push($fruits, "date", "elderberry", "Rakib");
print_r($fruits);

# array_pop() - Removes the last element from an array.
$fruits = array("apple", "banana", "cherry");
array_pop($fruits);
//echo $lastFruit;
print_r($fruits);

# array_unshift() - Adds one or more elements to the beginning of an array.
$arrayUnshift=['apple', 'banana', 'orange', 'cherry'];
array_unshift($arrayUnshift, 'malta');
print_r($arrayUnshift);

# array_shift() - Removes the first element from an array.
$arrayshift=['apple', 'banana', 'orange', 'cherry'];
array_shift($arrayshift,);
print_r($arrayshift);

#array_splice() - Removes a portion of the array and replaces it with something else.
$fruits = array("apple", "banana", "cherry");
array_splice($fruits, 0, 2, array("malta", 'juice'));
print_r($fruits);

#array_slice() - Extracts a portion of the array.
$fruits = array("apple", "banana", "cherry");
$portion = array_slice($fruits, 1, 2);
print_r($portion);
