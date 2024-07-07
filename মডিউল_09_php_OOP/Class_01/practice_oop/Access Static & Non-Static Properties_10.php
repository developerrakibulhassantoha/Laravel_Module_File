<?php
 // Access Static & Non-Static Properties inside the class *self::  $this->
class MyGadgets{
    public static $MyCamera="Canon-201d";
    public $MyMobile="Oppo A78";

    public static function Camera(){
        echo self::$MyCamera;

    }

    public function mobile(){
        echo $this->MyMobile;

    }

    public function aumbralla(){
        echo self::$MyCamera;

    }

    public static function TV(){
        echo "I am TV";

    }

}

// without create object access function because static function
MyGadgets:: TV(); 
echo "<br>";

// 1. Create Object
$Obj=new MyGadgets();

// 2. Access From this 
$Obj->mobile();
echo "<br>";
$Obj->Camera();
echo "<br>";
$Obj->aumbralla();
echo "<br>";
$Obj->TV();
