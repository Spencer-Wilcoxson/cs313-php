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
   
   function JSON() {
	   $q = "SELECT * FROM testData";
	   $db = $_SESSION['db'];
	   $myObj->name = 'john';
	   $myObj->age = 24;
	   
	   $statement = $db->prepare($q);
	   $statement->execute();
	   $results = $statement->fetchAll(PDO::_ASSOC);
	   $json = json_encode($results);
	   echo $json;
	   //$data = $db->query($q);
   }
?>