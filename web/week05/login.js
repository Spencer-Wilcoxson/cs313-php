function usernameErrorMessage() {
	var input = document.getElementById("username").value;
	var message = document.getElementById("usernameErrorMessage").style;
	
	if (input == "") {
		message.visibility = "visible";
	}
	else {
		message.visibility = "hidden";
		
	}
}