<?php

// Access Static & Non-Static Properties inside the class *self::  $this->


 class MyGadgets{

    public static $myDSLRCameraName="Canon 200D";
    
    public  $myMobileName="Android Phone";

    public static function Chata(){
        echo "I am Chata";
    }

    public function HandWatch(){
        echo "I am HandWatch";
    }


    public static function DSLR(){
        echo self::$myDSLRCameraName;
    }


    public function Mobile(){
        echo $this->myMobileName;
    }

 }
 

// 1. Create Object
// 2. Access From this 

 
 
