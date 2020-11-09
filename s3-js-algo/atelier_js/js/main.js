//-------string------

var firstName = "royce";
var lastName = "george";
var NameAndFirstName = firstName +" "+ lastName; 
/*concatenate firstName and lastName*/
console.log(NameAndFirstName);
//line 2

//-------number------

var userAge = 25;
console.log(userAge);
//add 1 to userAge variable
userAge = userAge + 1;
//userAge += 1;
//userAge ++;
console.log(userAge);

//substract 1 to userAge Variable
userAge = userAge - 1;
//userAge -= 1;
// userAge --;
console.log(userAge);

//operation exemple

var a = 42;
var b = 16;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);

a *= b;
console.log(a);

//-------boulean------

var available = true;
var madeInEu = false;

var line = "Firstline\n\t\\Secondline\nThirdline";
console.log(line);
var myStr = "This is the start." + "This is the end.";
console.log(myStr);

//-------Array with numerical index----

var user = [
    "royce",
    "george",
    28,
    "alfortVille",
    "male",
    true,
    [
        "dog",
        "cat",
        "golden fish",
        [
            "golden",
            "maicon",
            "york"
        ]
    ]
];
//--Display the first element in array--
console.log(user[0]);

user[0] = "toto";
console.log(user[0]);
//concatening
console.log("you user name is : " + user[0] + " " + user[1]);

console.log(user[0] + " has a " + user[6][1] + " it is a " + user[6][3][1]);

//---Accessing letter in tring with array notation---

var texte= "Lorem Ipsum dolor";
console.log(texte[0]);

// associative array (or json object)

user = {
    firstName : "Royce",
    lastName : "George",
    age : 33,
    city : "Oissel"
};
console.log(user);
//console.log(" Hello " + user["firstName"]); ou write
console.log("hello " + user.firstName);