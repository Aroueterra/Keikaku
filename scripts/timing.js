var text = ["Enter an anime title?", "Enter a manga title?", "Enter a character name?"];
var counter = 0;
var elem = document.getElementById("changeText");
var inst = setInterval(change, 5000);



function change() {
  //document.getElementsByName('search')[0].options[0].innerHTML = text[counter];
   elem.textContent = text[counter];
  counter++;
  if (counter >= text.length) {
    counter = 0;
    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
  }
}
var module = document.getElementById("clamp");

$clamp(module, {clamp: 3});

function getval(select)
{
    var inputBox = document.getElementById("changeText");
    inputBox.value = select.value.toLowerCase() + ":" + inputBox.value;
}