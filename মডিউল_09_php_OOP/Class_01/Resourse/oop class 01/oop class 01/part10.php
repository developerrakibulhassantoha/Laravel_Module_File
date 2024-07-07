<?php

// Final Keyword for inheritance  
// 100% ত্যাজ্য পুত্র final class
// নির্দিস্ট কোনো প্রাপারটিস থেকে ত্যাজ্য করে final method,final variable 

 class Father{

    public function Murgi(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }

    final public function Jomi(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }

    public function SwimingPool(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
    
}




class Son extends Father{
    public function SwimingPool(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }

    public function Murgi(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }

    public function Jomi(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
}



