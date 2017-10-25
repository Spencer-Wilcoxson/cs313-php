<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Guest Information</title>
	  <script src="loadPage.js"></script>
   </head>
   
   <h1>Guest List</h1>
   <div id="guestList">
      <?php
	     require 'dbconnect.php';
		 connect();
		 getGuestList();
	  ?>
	  
	  <input type="button" value="Invite Guests" onclick="inviteGuestPage()">
	  <input type="button" value="back" onclick="userlogin.php()">
   </div>
</html>