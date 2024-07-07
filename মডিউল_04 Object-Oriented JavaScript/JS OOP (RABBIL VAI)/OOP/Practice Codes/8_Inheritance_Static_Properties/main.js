/*
 🟪 When a class extends another,
 🟪 it inherits the parent class's static properties and methods
 */



class Parent{
  static msg(){
      console.log("Message from Parent")
  }
}

class Child extends Parent{

}


Child.msg();
