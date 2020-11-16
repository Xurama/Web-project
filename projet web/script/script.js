var words = [" chanteurs.", " producteurs.", " danseurs."];
var span = document.querySelector("span");
var counter = 0;
var arrayLength = words.length - 1;

function changeWord() {
  if (counter == arrayLength){
    counter = 0;    
  }
  else {
    counter++;
  }
 span.innerHTML = words[counter];
 setTimeout(changeWord, 2500);
}
setTimeout(changeWord, 1000);