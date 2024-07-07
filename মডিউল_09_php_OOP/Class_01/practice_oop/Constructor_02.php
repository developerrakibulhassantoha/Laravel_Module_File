<?php
// ** Constructor function **

// 1. He can take parameter 
// 2. He execute automatically 
// 3. He can't return anything
// 4. Fast Executed Method;


class car{
    public function __construct()
    {
        echo "Auto Light on, Auto Sensor on, Auto Pilot on, Auto Developer on";
        
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
$CarObj= new car(); // create object

?>