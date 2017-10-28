<?php 
   session_start();
   
   header("Content-type: application/json; charset=UTF-8");
   
   require 'dbconnect.php';
   
   connect();
   
   $userID = $_SESSION["userID"];
   $db = $GLOBALS['db'];
   
   $obj = json_decode($_POST['guests'], false);
   
//   for ($i = 0; $i < $obj.count(); $i++) {
//	   $getGuestQuery = "SELECT * FROM guestlist WHERE lastname = '$obj[i]->lastname' AND firstname = '$obj[i]->firstname'";
	   
	   
//	   foreach(($db->query($getGuestQuery)) as $row) {
	   
//	      $guestId = $row['id'];
//	   }
	   
	   $query = "INSERT INTO junction (eventsid, guestid, userid) VALUES (5, 9, $userID)";
	   
	   $db->query($query);
	   
   }
?>