function itemCheck(){
if (!window.FileReader) {
      console.log("The file API isn't supported on this browser yet.");
    return;
  }
  input = document.getElementById('image');
  if (!input) {
      console.log("Um, couldn't find the fileinput element.");
  }
  else if (!input.files) {
      console.log("This browser doesn't seem to support the `files` property of file inputs.");
  }
  else {
    console.log("im doing something");
    file = input.files[0];
    if(file.size > 1048576 ){
      alert("That File is Huge!, please compress and try again");
      document.getElementById("submit").setAttribute("disabled","disabled");
      }
    else{
      console.log("im renabling");
      document.getElementById("submit").removeAttribute("disabled");
    }
  }
}
