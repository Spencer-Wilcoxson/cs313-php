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
	 
	  <input type="button" value="Invite Guests" onclick="addGuest()">
   </body>
</html>