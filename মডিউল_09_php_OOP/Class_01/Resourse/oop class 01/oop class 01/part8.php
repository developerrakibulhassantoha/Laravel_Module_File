<?php

// Abstract 

abstract class Father{

    public function print100(){
        for($i=0;$i<=100;$i=$i+1){
            echo "$i <br/>";
        }
    }
}




class Son extends Father{

    public function demo(){
        parent::print100();
    }

}

class GrandSon extends Son{
    
}





$objGrandSon=new GrandSon();
$objGrandSon->print100();
