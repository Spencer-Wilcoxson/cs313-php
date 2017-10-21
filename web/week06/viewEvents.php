<?php
   session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Events</title>
   </head>
   
   <body>
      <h1>Events</h1>
	  <?php
	     require 'dbconnect';
		 
		 getUserEvents();
	  ?>
   </body>
</html>