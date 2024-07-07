<?php
// Constructor for inheritance  

class father{
    public function __construct()
    {
        echo "I am Father's Constructor";
    }
}
class son extends father{
    public function __construct()
    {
        echo "I am Son Constructor";
    }
}

$SonObj=new son();

?>