/*
🟪 Grouping Data & Actions
🟪 Hides Complexity
🟪 Data Protection
🟪 Controlled Access
🟪 Enhances Maintainability
 */



// 🟪 Encapsulation Using Return Object
/*
function Profile(){
    let details="Profile Details";
    let Roll=12;
    let Clas=3
    return {
        update:function () {
            console.log("Profile Update Process")
        },
        photoUpload:function () {
            console.log("Photo Upload Process")
        },
        passReset:function () {
            console.log("Pass Reset Process")
        }
    }
}

const LearnerProfile=Profile();
LearnerProfile.photoUpload();

*/


// 🟪 Using ES6 Classes


class BankAccount{
    #balance=100;// Private Variable
    deposit(amount){
        this.#balance+=amount;
    }
    cashOut(amount){
        this.#balance-=amount
    }
    checkBalance(){
        return this.#balance;
    }
}

const acc=new BankAccount();

acc.deposit(300);
acc.cashOut(50);
console.log(acc.checkBalance())













