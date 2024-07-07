<?php

// Properties Value Change using Constructor parameter 

class car{
    public function __construct($newColor,)
    {
        $this->changeColor=$newColor;
    }
    public $changeColor="Douse";

    public function drive(){
        echo "I'm driving";
    }
    public function washing(){
        echo "I working care washings";
    }
}
// object
$CarObj= new car("Blue");
echo $CarObj->changeColor;

?>