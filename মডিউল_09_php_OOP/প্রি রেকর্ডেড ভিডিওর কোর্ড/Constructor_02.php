<?php
class Human{
    public $name;
    public $age;
    public function __construct($personName,$personAge=0)
    {
       // echo "New Human Object Is Create";
        $this->name= $personName;
        $this->age=$personAge;

    }
    public function sayHi(){
        //echo "Doll";
        echo "<br>";
        $this->sayName();
    }
    // Rules 01
    public function sayName(){
        echo "My Name is {$this->name}, I am {$this->age} years old";
    }
    // Rules of 02
    public function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old";
        }else{
            echo "My Name is {$this->name}, I don't know how old I am";
        }
    }
}
$h1=new Human("Rakib");
$h2=new Human("Anikha",24);
$h3=new Human("Toha",23);
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();