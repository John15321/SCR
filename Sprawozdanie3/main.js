function Person(firstName, lastName, dob)
{
    this.firstName = firstName;
    this.lastName = lastName;
    this.dob = dob;

    this.pr = function() {
        console.log(`${this.firstName} ${this.lastName} ${this.dob}`);
    }
}




const person1 = new Person(1,2,3);
person1.pr();























