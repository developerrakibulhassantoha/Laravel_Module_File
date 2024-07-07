class Person{

    // 1.Auto Fire 2. Can't Return 3. Params
    constructor(a,b) {
        console.log(a+b)
    }


    first_name="Rabbil";
    last_name="Hasan";

    getName(){
        return ('My full name is '+this.first_name+" "+this.last_name)
    }

}

let personObj=new Person(20,30);