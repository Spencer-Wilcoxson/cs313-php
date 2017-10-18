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
	     <input type="button" value="Add Event" onclick="addEvent()">
		 <input type="button" value="Delete Event">
	  </div>
   </body>
</html>