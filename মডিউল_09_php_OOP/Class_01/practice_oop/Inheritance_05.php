<?php

// Inheritance= উত্তরাধিকার
// Overriding= উত্তরাধিকার ক্ষমতা ব্যাবহার করে চেঞ্জ করা । 

class father{
    public function print(){
        for($i=1;$i<=100;$i=$i+1){
            echo "$i <br>";

        }
    }

}


class son extends father{
    public function print(){
        for($i=1;$i<=100;$i=$i+10){ //overriding
            echo "$i <br>";

        }
    }
    
}

$sonObj=new son();
$sonObj->print();

?>