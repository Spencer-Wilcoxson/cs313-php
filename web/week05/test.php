<?php
   $user = 'postgres';
   $pass = 'kdst4977';
   
   try {
	   $connect = new PDO('pgsql:host=127.0.0.1;dbname=projectX', $user, $pass);
   }
   catch (PDOException $ex) {
	   echo 'ERROR!'.$ex->getMessage();
	   die();
   }
?>