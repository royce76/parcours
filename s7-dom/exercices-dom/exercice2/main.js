var choices = document.getElementsByClassName("choice");
var choosenColor = document.getElementById("choosenColor");

for (var i = 0; i < choices.length; i++) {
  choices[i].onclick = function() {
    var color = this.style.background;
    choosenColor.style.background = color;
  };
}
