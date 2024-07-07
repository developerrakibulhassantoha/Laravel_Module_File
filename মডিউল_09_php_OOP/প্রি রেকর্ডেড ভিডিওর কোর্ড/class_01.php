<?php
class Human{
    public $name;
    function sayHi(){
        echo "Rakibul Hassan";
        echo "<br>";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}\n";
    }
}
class Cat{
    public $name;
    function sayHi(){
        echo "My Name is {$this->name}";
    }
}
class Dog{
    public $name;
    function sayHi(){
        echo "My Name is {$this->name}\n";
    }
}
$h1 = new Human();
$h1->name="Toha"; //set
$h1->sayName();
echo "<br>";

$h2 =new Human();
$h2->name="Babo"; //set
$h2->sayHi();
echo "<br>";

 $c1 = new Cat();
 $c1->name="Miew Cat";
 $c1->sayHi();
 echo "<br>";

 $d1 = new Dog();
 $d1->name="RajkhanDong";
 $d1 ->sayHi();
