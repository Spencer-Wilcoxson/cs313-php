<?php
   session_start();
   require "dbconnect.php";
   
   $timeOut = 0;
   
   function isConnected() {
	  if ($_SESSION['isConnected'] == true) {
		  echo "true";
		  return;
		  
	  }
	  else {
		  connect();
		  if ($GLOBALS["timeOut"] == 3) {
			  echo "Connection Timed Out";
			  return;
		  }
		  else {
			  $GLOBALS["timeOut"]++;
			  isConnected();
		  }
	  }
   }
   
   function query() {
	   $q = "SELECT * FROM testData";
	   $db = $_SESSION['db'];
	   
	   foreach ($db->query($q) as $row) {
	      echo $row['data'];
	   }
   }
   
   function blah() {
	   $query = "SELECT * FROM testData";
	   $db = $_SESSION['db'];
	   
	   $statment = $db->query($query);
	   
	   $results = $statment->fetchAll();
	   $code = json_encode($results);
	   echo $code;
   }
?>