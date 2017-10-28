function showGuest() {
	var xhttp = new XMLHttpRequest();
	
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var results = JSON.parse(this.responseText);
//			document.getElementById("addGuestList").innerHTML = results.length;
			var j = 0;
			for (var i = 0; i < results.length; i++) {
				j++;
			}
			
			document.getElementById("addGuestList").innerHTML = j;
		}
	};
	
	// send the request
	xhttp.open("POST", "inviteList.php", true);
	xhttp.send();
	// 
//	document.getElementById("addGuestList").innerHTML = "Hello?";
}