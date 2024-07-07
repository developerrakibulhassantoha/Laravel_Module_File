<?php

/* Access Modifier 

public= 

private

protected


*/


class MyHouse{

    // My Wife 
    private  $Bou="Angle Omuk";
    protected $NijerChele="Bathas";
    public $KajerChele="Akash";
   

    function demo(){
        echo $this->KajerChele;
    }



}


class MyShoshurHouse extends MyHouse{

     function demo(){
        echo $this->KajerChele;
    }



}



class MyFriendsHouse {

    function demo(){
        $obj=new MyHouse();
        $obj->KajerChele;
    }
 


}











