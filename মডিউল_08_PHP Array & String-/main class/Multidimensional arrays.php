<?php
//Declaring a Multidimensional Array

$array = [
    ['Rakib', 'Hassan', 'Babo'],
    ['Age', 23, 'city'],
    ['apple', 'carrot', 'papaya']
];
echo $array[1][2];


// Associative Multidimensional Array
$array=[
    [
        'first-Name'=> 'Babu',
        'last_Name'=> 'Mia',
        'Age'=>23,
        'city'=>'cox`s bazar',
        'my_wife_name'=>'Sultana',
    
    ],
    [
        'first-Name'=> 'Rajib',
        'last_Name'=> 'mia',
        'Age'=>23,
        'city'=>'cox`s bazar',
        'my_wife_name'=>'sharmin akther',
    
    ],
    ['first-Name'=> "Raihan", 'last_Name'=>'Akhter', 'Age'=>23,'city'=>'cox`s bazar', 'my_wife_name'=>'sharmin akther']
        
];
// Accessing Multidimensional array 
echo $array[2]['last_Name'];

// Looping Through Multidimensional Arrays
foreach($array as $child){
    foreach($child as $key=>$value){
        echo "$key: $value<br>";
    }
}

 $persons=array(
    "rakib"=>array(
        "age"=>23,
        "city"=>"cox`s bazar",
        'name'=>'Rakibul Hassan'
    ),
    "Hasan"=>array(
        "age"=>24,
        "city"=>"cox`s bazar",
        'name'=>'Hassan'
    ),
    "Babu"=>array(
        "age"=>33,
        "city"=>"cox`s bazar",
        'name'=>'Sharmin akhter anikha'
    )
);
 echo $persons ["Babu"]["name"];
foreach($persons as $child){
    foreach($child as $key=>$value){
        echo "$key: $value<br>";
    }
}
