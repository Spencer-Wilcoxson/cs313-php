<?php
   session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Events</title>
	  <script src="loadPage.js"></script>
   </head>
   
   <body>
      <h1>Events</h1>
	  <?php
	     require 'dbconnect.php';
		 connect();
		 getUserEvents();
	  ?>
	  
	  <div>
	     <input type="button" value="Main Page" onclick="userLogin()">
	  </div>
   </body>
</html>