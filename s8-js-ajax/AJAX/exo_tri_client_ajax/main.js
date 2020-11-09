
let test = document.getElementById("test");
let httpRequest = new XMLHttpRequest();
let table = document.getElementById("table");


httpRequest.onreadystatechange = function() {
    
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // affiche dans la div test
            // test.innerHTML = this.responseText;

            let data = JSON.parse(this.response);
            
            let utilisateurs = data.utilisateurs;
            console.log(utilisateurs);

            for (user of utilisateurs) {
                console.log(user);
                    let line = document.createElement("tr");
                    for(prop in user) {
                        let td = document.createElement("td");
                        td.innerText = user[prop];
                        line.appendChild(td);
                    }
                table.appendChild(line);              
            }              
        } 
        else {       
            console.log("une erreure est survenue");
        }  
    } 
    else {
        console.log("en attente de réponse");
    }

};

httpRequest.open('GET', "user.json", true);
httpRequest.send();




