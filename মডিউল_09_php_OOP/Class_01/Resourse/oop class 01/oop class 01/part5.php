<?php

// Properties Value Change using Constructor parameter 


class car{
   
    public function __construct($newColor)
    {
       $this->CarColor=$newColor;
    }
   
   
    public $CarColor="Red";

    public function driving(){
        echo "I am driving";
    }

    public function washing(){
     echo "I am washing";
    }
   
}

// Object
$CarObj=new car("Green");

echo $CarObj->CarColor;



