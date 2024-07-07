<?php
// parent keyword= উত্তরাধিকার ক্ষমতা ব্যবহার করে অব্জেক্ট তৈরি ছাড়াই সরাসরি কোনো প্রপারটিস একসেস করা 

class father{
    public function print(){
        for($i=1;$i<=100;$i=$i+1){
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