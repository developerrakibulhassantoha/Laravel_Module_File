/*
🟪 Classes are blueprints of an Object
🟪 Class is a template while Objects are instances of the class
🟪 Using let or var to declare variables inside a class is unnecessary because class
properties are automatically scoped to the class instance and don't require explicit
variable declarations
 */



// 🟪 Declaring Class & Using Class

class Person{

    first_name="Rabbil";
    last_name="Hasan";

     getName(){
         return ('My full name is '+this.first_name+" "+this.last_name)
     }

}

let PersonObj=new Person();
console.log(PersonObj.getName())




// 🟪 Re-declaring Class

