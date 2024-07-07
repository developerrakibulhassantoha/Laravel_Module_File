// 🟪 Constructor inside only parent class
// 🟪 Constructor inside only parent class pass parameters


// 🟪 Constructor inside only child class
// 🟪 Constructor inside only child class pass parameters


// 🟪 Constructor inside both parent & child class
// 🟪 Constructor inside both parent & child class pass parameters





class Father{
    constructor(a,b) {
        console.log("I am Father Constructor="+(a+b))
    }
}


class Son extends Father{
    constructor(a,b) {
        super()
        console.log("I am Son Constructor="+(a+b))
    }
}


let FatherObj=new Father(20,40);




