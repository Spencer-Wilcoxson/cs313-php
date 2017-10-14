function usernameErrorMessage() {
   var input = document.getElementById("username").innerHTML;
   var message = document.getElementById("usernameMessage");
   if (input.innerHTML == "") {
	  message.style.visibility = "hidden";
   }   
   else {
	   message.style.visibility = "true";
   }
}