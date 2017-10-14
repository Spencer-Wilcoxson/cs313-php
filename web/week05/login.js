function usernameErrorMessage() {
   var message = document.getElementById("usernameMessage");
   if (message.value == "") {
	  message.style.visibility = "hidden";
   }   
   else {
	   message.style.visibility = "true";
   }
}