<!DOCTYPE html>
<html>
   <head>
      <title>Welcome!</title>
   </head>
   
   <body>
      <?php
	     require 'dbconnect.php';
		 
	  ?>
	  
	  <h1 id="welcome">Welcome <?php getUser(); ?></h1>
	  <p> Please select what you would like to do below</p>
	  <div id="options">
	     <form action="addEvent.php"><input type="button" value="Add Event"> </form>
		 <input type="button" value="Delete Event">
	  </div>
   </body>
</html>