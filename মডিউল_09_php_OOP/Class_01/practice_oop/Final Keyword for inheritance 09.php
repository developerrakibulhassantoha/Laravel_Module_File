<?php
//Final Keyword for inheritance
// 100% ত্যাজ্য পুত্র final class
// নির্দিস্ট কোনো প্রাপারটিস থেকে ত্যাজ্য করে final method,final variable 

// 100% ত্যাজ্য পুত্র final class
final class fathers{
    public function building(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
    public function hotel(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
}
class Son extends fathers{
    

}

// নির্দিস্ট কোনো প্রাপারটিস থেকে ত্যাজ্য করে final method,final variable 
class Father{
    public function building(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
    final public function hotel(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    public function Jom(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    final public function visa(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    public function restore(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
}
class sons extends Father{
    public function building(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
    public function hotel(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    public function Jom(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    public function visa(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
    public function restore(){
        for($i=5;$i>=50;$i=$i+3){
            echo "$i <br>";
        }
    }
}


?>