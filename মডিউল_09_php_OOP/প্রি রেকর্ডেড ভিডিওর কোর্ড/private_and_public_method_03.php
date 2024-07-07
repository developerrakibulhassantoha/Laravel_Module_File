<?php
class Fund{
    private $fund;
    function __construct($initialFund=0)
    {
        $this->fund=$initialFund;
    }
    public function addFund($money){
        $this->fund+= $money;
        $this->deductFund(0);
    }
    public function deductFund($money){
        $this->fund-=$money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}";
    }
}
$ourFund= new Fund(100);
//$ourFund->getTotal();
$ourFund->addFund(500);
$ourFund->deductFund(320);
$ourFund->getTotal();