function showGuest() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var myObjArray = JSON.parse(this.responseText);
			var div = document.getElementById("addGuestList");
			
			// create the table
			var table = document.createElement("table");
			var th = document.createElement("TH");
			var lastNameNode = document.createTextNode("Last Name");
			var firstNameNode = document.createTextNode("First Name");
			var addBoxNode = document.createTextNode("Add Guest");
			
			div.appendChild(firstNameNode);
			
			// add the table headers
//			th.appendChild(lastNameNode);
//			th.appendChild(firstNameNode);
//			th.appendChild(addBoxNode);
			
			// add the headers to the table
//			table.appendChild(th);
			
//			div.appendChild(table);
			
			
			
//			for (var i = ; i < myObjArray.length; i++) {
//				var object = myObjArray[i];
//				div.innerHTML +=
//			}
		}
	};
	
	xhttp.open("POST", "getListGuest.php", true);
	xhttp.send();
	
}