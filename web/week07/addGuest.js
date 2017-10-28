function showGuest() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var myObjArray = JSON.parse(this.responseText);
			document.getElementById("addGuestList").innerHTML = "HELLO???";
		}
	};
	
	xhttp.open("POST", "getListGuest.php", true);
	xhttp.send();
	
}