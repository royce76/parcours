let blues = document.getElementById("blue");
console.log(blues);

let reds = document.getElementById("red");
console.log(reds);

let greens = document.getElementById("green");
console.log(greens);

let blacks = document.getElementById("black");
console.log(blacks);

let emptys = document.getElementById("empty");
console.log(emptys);

let cases = document.getElementsByClassName("case");
console.log(cases);

let section = document.querySelector("section");
console.log(section);

let invisibles = document.getElementsByClassName("invisible");
console.log(invisibles);

section.style.display = "flex";
section.style.justifyContent = "space-between";

greens.style.backgroundColor = "green";
blues.style.backgroundColor = "blue";
reds.style.backgroundColor = "red";
blacks.style.backgroundColor = "black";
emptys.style.backgroundColor = "transparent";

function changeColor() {
    for(let i = 1; i < invisibles.length ; i++) {
        if ( invisibles[0].style.backgroundColor === "transparent" && this.style.backgroundColor !== "transparent") {
            invisibles[0].style.backgroundColor = this.style.backgroundColor;
        }
        else if (invisibles[0].style.backgroundColor !== this.style.backgroundColor) {
            invisibles[0].style.backgroundColor = this.style.backgroundColor;
        }
    }  
}

for(let casess of cases) {
    casess.style.border = "2px solid black";
    casess.style.width = "20vh";
    casess.style.height = "20vh";
    casess.addEventListener("click",changeColor);
    if(casess === emptys) {
        casess.style.width = "60vh";
        casess.style.height = "60vh";
    }
}

let images = document.createElement("img");
images.src = "corona.png";
images.setAttribute("width", "100%");
images.setAttribute("height", "90%");
greens.appendChild(images);
