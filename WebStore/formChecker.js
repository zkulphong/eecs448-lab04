function validate(event){
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var keyboard = document.getElementById("keyboard").value;
  var monitor = document.getElementById("monitor").value;
  var mouse = document.getElementById("mouse").value;

  var emailRe = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (!emailRe.test(username)){
    event.preventDefault();
  }

  if (password.trim() == ""){
    event.preventDefault();
  }

  if (keyboard < 0 || monitor < 0 || mouse < 0 || keyboard.trim() == "" || monitor.trim() == "" || mouse.trim() == "" ){
    event.preventDefault();
  }


}

function reset(){
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";
  document.getElementById("keyboard").value = 0;
  document.getElementById("monitor").value = 0;
  document.getElementById("mouse").value = 0;
  document.getElementById("defaultShipping").checked = "checked";
}
