
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function validpassword(){
  var npassword=document.myform.psw.value;

  var cpassword=document.myform.psw_repeat.value;

  if (npassword.length<6){
    alert("password must contain 6 characters");
    return false;
  }

  if(npassword == cpassword){
    return true;
  }else {

    alert("password and confirm password must be same");
    return false;
  }
}


function mainpassword(){

  var newpassword=document.mainpage.psw.value;

  if(newpassword.length<6){
    alert("password must be contain 6 characters")
    return false;
  }
}



function showPassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function showPasswordAll() {
  var x = document.getElementById("mypass1");
  var y = document.getElementById("mypass");
  if (x.type === "password" ) {
    x.type = "text";
  } else {
    x.type  = "password";
  }



  if (y.type === "password" ) {
    y.type = "text";
  } else {
    y.type  = "password";
  }


  }



  function darkMode() {
     var element = document.body;
     element.classList.toggle("dark-mode");
  }
