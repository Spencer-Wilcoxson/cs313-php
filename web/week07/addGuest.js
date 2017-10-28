function addGuest() {
	var table = document.getElementById('guestList');
	var guests = new Array();
	
	for (var rows = 1; rows < table.rows.length; rows++) {
		var check = table.rows[rows].cells[2].children[0];
		
		// is the guest added to the guest list?
		if (check.checked == true) {
			var person = new createGuest(table.rows[rows].cells[0].innerHTML, table.rows[rows].cells[1].innerHTML);
			guests.push(person);
		}
	}
}

function createGuest(lastName, firstName) {
	this.firstName = firstName;
	this.lastName = lastName;
}