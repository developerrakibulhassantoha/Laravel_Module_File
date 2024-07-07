<?php
/*
// Associative arrays:
// how to create Associative array
$person= array(
    'first-Name'=> 'Rakibul',
    'last_Name'=> 'Hassan',
    'Age'=>23,
    'city'=>'cox`s bazar',
    'my_wife_name'=>'sharmin akther',

);
// Accessing Values
echo $person['Age'];

//Looping Through an Associative Array
foreach($person as $key=>$value){
    echo "$key: $value <br>";

}
*/
$users = array(
    "john" => array(
        "age" => 25,
        "email" => "john@example.com"
    ),
    "jane" => array(
        "age" => 30,
        "email" => "jane@example.com"
    )
);

// echo $users["john"]["email"];


//Looping Through Multidimensional Arrays
foreach($users as $username => $details) {
    echo "Username: $username\n";
    foreach($details as $key => $value) {
        echo "$key: $value\n";
    }
}

