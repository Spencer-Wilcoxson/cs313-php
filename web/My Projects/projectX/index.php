<!DOCTYPE html>
<html>
   <head>
      <title>Test</title>
   </head>
   
   <body>
   <p>This is just a test</p>
   <?php
      require "queryDB.php";
	  isConnected();
	  echo query();
   ?>
   </body>
</html>