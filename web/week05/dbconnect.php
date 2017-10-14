<?php
   $dbUrl = getenv('DATABASE_URL');
		 
   $dbopts = parse_url($dbUrl);
		 
   $dbHost = $dbopts["host"];
   $dbPort = $dbopts["port"];
   $dbUser = $dbopts["user"];
   $dbPassword = $dbopts["pass"];
   $dbName = ltrim($dbopts["path"], '/');
   try {
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	  foreach ($db->query('SELECT * FROM users') as $row) {
		  echo 'User'.$row['username'];
		  echo '<br />';
	  }
   }
   
   catch (PDOException $ex) {
	   echo 'ERROR!'.$ex->getMessage();
	   die();
   }
   
 //  function getUser() {
//	   $username = $_POST['username'];
//	   $password = $_POST['password'];
//	   $db = $GLOBALS['db'];
	   
//	   foreach ($db->query("SELECT * FROM users WHERE username=$username" as $row) {
//		   echo 'Username: '.$row['username'];
//		   echo '<br />';
//	   }
   }
?>