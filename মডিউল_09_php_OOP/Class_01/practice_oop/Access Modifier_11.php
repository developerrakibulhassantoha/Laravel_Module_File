<?php
/* Access Modifier 

1. public

2. private

3. protected
*/
class MyHouse{
    private $myWife="Sharmim Akther Anikha";
    protected $myChilde="Rajip Hassan";
    public $CleanMan="Akash";

    function demo(){
        echo $this->myWife;
        echo "<br>";
        echo $this->myChilde;
        echo "<br>";
        echo $this->CleanMan;

    }

}
class spouseHouse extends MyHouse{
    function Demos(){
        echo $this->myChilde;
        echo "<br>";
        echo $this->CleanMan;
        
        
    }

}
class friendHouse{
    function FndDemo(){
        $Obj=new MyHouse();
        
        $Obj->CleanMan;
        
        
    }

}
$Obj=new MyHouse();
$Obj->demo();
$Obj=new spouseHouse();
$Obj->Demos();
// $Obj->demo();
$Obj=new friendHouse();
$Obj->FndDemo();