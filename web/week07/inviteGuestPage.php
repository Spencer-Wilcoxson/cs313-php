<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Invite Guests</title>
	  <script src="addGuest.js"></script>
   </head>
   
   <body>
      <h1>Invite Guests</h1>
	  <p>Select Guests below to add to the guest list for an event, or add a new guest below</p>
	  
	  <?php
	     require 'inviteList.php';
	  ?>
	  
	  <div id="temp">
	  </div>
	 
	  <input type="button" value="Invite Guests" onclick="addGuest()">
	  
	  <p>Or add a new guest below!</p>
	  <form method="Post" action="process.php">
	     <input type="text" placeholder="Last Name" name="lastName"> <br />
		 <input type="text" placeholder="First Name" name="firstName"> <br />
		 <input type="text" placeholder = "Phone Number" name="phoneNumber"> <br />
		 <input type="text" placeholder = "Email" name="email"> <br />
		 <input type="hidden" name="whatPage" value="addGuestPage"> 
		 <input type="submit" value="Submit">
	  </form>
   </body>
</html>