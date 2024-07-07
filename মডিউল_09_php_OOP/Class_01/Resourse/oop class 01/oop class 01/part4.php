<?php

// Constructor parameter 


class car{
   
    public function __construct($num1,$num2,$num3)
    {
        echo $num1+$num2+$num3;
    }
   
   
    public $color="Red";

    public function driving(){
        echo "I am driving";
    }

    public function washing(){
     echo "I am washing";
    }
   
}

// Object
$CarObj=new car(1,2,3);



