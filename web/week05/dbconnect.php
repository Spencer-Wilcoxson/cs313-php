<?php
function connect() {
   try {
	   $db = new PDO("pgsql:host=127.0.0.1/cs313-php/web/week05/;dbname=projectX", "postgres", "kdst4977");
	   echo "<p>Success</p>";
   }
   catch (PDOException $e) {
	   echo "<p>ERROR</p>";
	   die();
   }
}
?>