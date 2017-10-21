<?php
   session_start(); 
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Welcome!</title>
	  <script src="loadPage.js"></script>
   </head>
   
   <body>
      <?php
	     require 'dbconnect.php';
		 
	  ?>
	  
	  <h1 id="welcome">Welcome <?php getUser(); ?></h1>
	  <p> Please select what you would like to do below</p>
	  <div id="options">
	     <input type="button" value="Add Event" onclick="addEventPage()">
		 <input type="button" value="Delete Event" onclick="deleteEventPage()">
		 <input type="button" value="View Event" onclick="viewEventsPage()">
		 <input type="button" value="Update Event" onclick="changeEventPage()">
   </body>
</html>