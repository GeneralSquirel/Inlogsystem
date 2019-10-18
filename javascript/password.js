window.onload = function() {
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var requirement = [false, false , false, false];

  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    console.log("dit werkt");
    document.getElementById("message").style.display = "block";
  }

  // When the user clicks outside of the password field, hide the message box
  var counted = 0;
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
    if (!requirement[0]) {
      counted++;
    }
    if (!requirement[1]) {
      counted++;
    }
    if (!requirement[2]) {
      counted++;
    }
    if (!requirement[3]) {
      counted++;
    }
    if (counted > 0){
        document.getElementById("message").style.display = "block";
    }
  }

  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
      requirement[0]=true;
    } else {
      letter.classList. remove("valid");
      letter.classList.add("invalid");
      requirement[0]=false;
  }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
      requirement[1]=true;
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
      requirement[1]=false;
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
      requirement[2]=true;
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
      requirement[2]=false;
    }

    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
      requirement[3]=true;
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
      requirement[3]=false;
    }
  }
}
