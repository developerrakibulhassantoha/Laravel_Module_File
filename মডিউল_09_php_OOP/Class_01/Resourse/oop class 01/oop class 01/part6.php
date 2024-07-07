<?php

// Inheritance= উত্তরাধিকার
// Overriding= উত্তরাধিকার ক্ষমতা ব্যাবহার করে চেঞ্জ করা । 

class Father{

    public function print100(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
}

class Son extends Father{

    // 
    public function print100(){
        for($i=0;$i<=100;$i=$i+10){
            echo "$i <br/>";
        }
    }

}


class Son2 extends Father{

    

}


class Son3 extends Father{

    

}


$SonObj=new Son();
$SonObj->print100();
