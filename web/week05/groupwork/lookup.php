<!DOCTYPE html>
<html>
   <head>
      <title>Week 05</title>
   </head>
   
   <body>
   <?php
   try {
      $username = 'postgres';
	  $password = 'kdst4977';
	  $connect = new PDO('pgsql:host=127.0.0.1;dbname=gp', $username, $password);
   }
   catch (PDOException $ex) {
	   echo 'ERROR!' . $ex->getMessage();
	   die();
   }
   
   echo '<h2>Scriptures</h2>';
   ?>
   </body>
</html>