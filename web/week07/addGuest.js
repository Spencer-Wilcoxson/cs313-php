function showGuest() {
	var xhttp = new XMLHttpRequest();
	
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("addGuestList").innerHTML = "Hello";
		}
	};
	
	// send the request
	xhttp.open("POST", "inviteList.php", true);
	xhttp.send();
	// 
//	document.getElementById("addGuestList").innerHTML = "Hello?";
}