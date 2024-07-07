<?php
// class
class car{
    public $color="Douse"; //variable

    // function
    public function drive(){
        echo "I'm driving";
    } 
    // function
    public function washing(){
        echo "I working care washings";
    }
}
// object
$CarObj= new car(); // create object
echo $CarObj->color; // call variable
echo "<br>";
$CarObj->drive(); // call function
echo "<br>";
$CarObj->washing(); // call function

?>