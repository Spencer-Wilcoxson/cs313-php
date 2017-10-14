<?php

   $userID = null;
   
   $dbUrl = getenv('DATABASE_URL');
		 
   $dbopts = parse_url($dbUrl);
		 
   $dbHost = $dbopts["host"];
   $dbPort = $dbopts["port"];
   $dbUser = $dbopts["user"];
   $dbPassword = $dbopts["pass"];
   $dbName = ltrim($dbopts["path"], '/');
   try {
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
   }
   
   catch (PDOException $ex) {
	   echo 'ERROR!'.$ex->getMessage();
	   die();
   }
   
  function getUser() {
	  $user = $_POST['username'];
	  $pass = $_POST['password'];
	  $db = $GLOBALS['db'];
	  
	  foreach ($db->query('SELECT * FROM users WHERE username=\''.$user.'\'') as $row) {
		  
		  if ($pass == $row['password']) {
			  echo 'User: '.$row['username'];
			  echo '<br />';
			  $GLOBALS['userID'] = $row['id'];
		  }
		  else {
			  echo 'Invalid password';
		  }
	  }
  }
  
  function getUserEvents() {
	  $db = $GLOBALS['db'];
	  userID = $GLOBALS['userID'];
	  
	  foreach ($db->query('SELECT name, alerttime FROM events WHERE userID = '.userID) as $row) {
		  echo $row['name'].' '.$row['alerttime'];
		  echo '<br />';
	  }
?>