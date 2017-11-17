<?php
   session_start();
   
   function connect() {
	   $dbURL = getenv('DATABASE_URL');
	   
	   $dbopts = parse_url($dbURL);
	   
	   $dbHost = $dbopts["host"];
	   $dbPort = $dbopts["port"];
       $dbUser = $dbopts["user"];
       $dbPassword = $dbopts["pass"];
       $dbName = ltrim($dbopts["path"], '/');
	   
	   try {
		   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		   $_SESSION['db'] = $db;
		   $_SESSION['isConnected'] = true;
       }
    
      catch (PDOException $ex) {
		  echo 'ERROR!'.$ex->getMessage();
	      die();
	  }
   }
   
?>