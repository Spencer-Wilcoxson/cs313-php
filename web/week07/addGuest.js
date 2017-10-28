function showGuest() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var myObjArray = JSON.parse(this.responseText);
			window.alert("HELLO??");
		}
	};
	
	xhttp.open("GET", "getListGuest.php", true);
	xhttp.send();
	
}