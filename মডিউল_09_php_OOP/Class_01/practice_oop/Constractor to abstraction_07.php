<?php
// Abstract

abstract class father{
    public function print(){
        for($i=1;$i<=100;$i=$i+5){
            echo "$i <br>";

        }
    }

}

class son extends father{
    function demo(){
        parent::print();

    }
    
}

$sonObj=new son();
$sonObj->demo();

?>