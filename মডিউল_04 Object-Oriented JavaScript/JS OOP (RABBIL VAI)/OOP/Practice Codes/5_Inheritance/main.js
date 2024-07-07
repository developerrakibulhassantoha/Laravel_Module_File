// 🟪 First Example think about Father & Son

class Father{

    addNumber(){
        let a=10;
        let b=20;
        let c=30;
        console.log(a+b+c);
    }

}


class Son extends Father{

}


let FatherObj=new  Father();
let SonObj=new  Son();

SonObj.addNumber()









// 🟪 Call parent class function and properties in child class