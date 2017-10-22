<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Guest Information</title>
   </head>
   
   <h1>Guest List</h1>
   <div id="guestList">
      <?php
	     require 'dbconnect.php';
		 getGuestList();
		 
		 
	  ?>
   </div>
</html>