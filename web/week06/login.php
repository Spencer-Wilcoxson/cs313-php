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
   </body>
</html>