<?php;
   session_start();
   
   $_SESSION['isConnected'] = false;
   
   function connect() {
	   $username = $_SESSION['username'];
	   $password = $_SESSION['password'];
	   
	   // sanitate the input
	   $username = stripInput($username);
	   $password = stripInput($password);
	   
	   // hash the password
	   $password = password_hash($password, PASSWORD_BCRYPT);
	   
	   // connect to the database
	   try {
		   $db = new PDO("pgpsql:host=127.0.0.1;dbname='temp'", $username, $password);
		   $_SESSION('db') = $db;
		   $_SESSION('isConnected') = true;
	   }
	   catch (PDOException $e) {
		   echo "ERROR! ".$e->getMessage();
		   die();
	   }
   }
   
   function stripInput($input) {
	   $input = stripslashes($input);
	   $input = htmlspecialchars($input);
	   return $input;
   }
?>