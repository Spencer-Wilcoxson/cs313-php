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
	   $query = "SELECT data FROM testData";
	   $db = _SESSION['db'];
	   
	   foreach ($db->query($query) as $row) {
	   echo "$row['data']";
	   }
   }
?>