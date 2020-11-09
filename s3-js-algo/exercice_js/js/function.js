console.log("test");
/*
//exercice 1



function product(a,b){
    console.log("Iam the product function");
    var result = a*b;
    return result;
    
}

var result = product(4,30);
console.log("the result is : "+ result);

*/

//exercice 3
/*
function welcome(firstname="john",lastname="doe"){
    var name= firstname+" "+lastname;
    return name;
}
name=welcome();
console.log("welcome to our site "+name)
*/

//exercice 4
/*
function isAdult(age){
    var i= age;
    if(i<18){
        i=false;
    }
    else if(i===undefined){
        i=false;
    }
    else{
        i=true;
        console.log("welcome to the site");
    }
    return i;
}
i=isAdult();
console.log(i);
*/

//exercice 5
//https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Date/getFullYear

/*
function birthYear(age){

    var dateToday = new Date();
    
    var year = dateToday.getFullYear()-age;
    
    if(age===undefined){
        return "no age given.";
    }
    else{
        return year;
    }
}

year=birthYear(20);
console.log(year);
*/

//exercice 6

var user ={
    firstname : "john",
    lastname : "doe",
    age : "42",
    job :"dev" 
};

    function identityCard(data){
        
        var result="";
        
        for(var prop in data){
            result+=prop+" : "+data[prop]+ "\n";
                  
        }
        return result;
    
}
 

result=identityCard(user);
console.log(result);