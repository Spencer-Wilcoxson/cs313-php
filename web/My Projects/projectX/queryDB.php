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
	   
	   // prepare the pdo statement and execute it
	   $pdoStmt = $db->prepare($q);
	   $pdoStmt->exectue();

	   // get all of the results
	   $resutls = $pdoStmt->fetchAll();
	   
	   // display the results
	   $j = json_encode($results);
	   echo $j;
	   //$data = $db->query($q);
   }
?>