<?php
// Constructor Parameter

class car{
    public function __construct($num1,$num2,$num3)
    {
        echo $num1+$num2-$num3;
    }
    public $color="Douse";

    public function drive(){
        echo "I'm driving";
    }
    public function washing(){
        echo "I working care washings";
    }
}
// object
$CarObj= new car(2,5,3);

?>