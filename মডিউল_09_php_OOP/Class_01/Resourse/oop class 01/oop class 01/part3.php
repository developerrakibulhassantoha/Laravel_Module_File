<?php

// Constructor function 
// 1. He can take parameter 
// 2. He execute automatically 
// 3. He can't return anything
// 4. Fast Executed Method;

class car{
   
    public function __construct()
    {
        echo "Auto Light on, Auto Sensor On, Auto Pilot On";  
    }
   
   
    public $color="Red";

    public function driving(){
        return "I am driving";
    }

    public function washing(){
     echo "I am washing";
    }
   
}

// Object
$CarObj=new car();

echo $CarObj->driving();



