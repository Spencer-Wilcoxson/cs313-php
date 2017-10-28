<?php 
   session_start();
   
   header("Content-type: application/json; charset=UTF-8");
   
   require 'dbconnect.php';
   
   connect();
   
   $userID = $_SESSION["userID"];
   $db = $GLOBALS['db'];
   
   $obj = json_decode($_POST['guests'], false);
   
   foreach ($obj as $item) {
	   $getGuestQuery = "SELECT id FROM guestlist WHERE lastname = '$item->lastname' AND firstname = '$item->firstname'";
	   
	   $guestId = $db->query($getGuestQuery);
	   
//	   foreach(($db->query($getGuestQuery)) as $row) {
//	   
//	      $guestId = $row['id'];
//	   }
	   
	   $query = "INSERT INTO junction (eventsid, guestid, userid) VALUES (5, $guestId, $userID)";
	   
	   $db->query($query);
	   
   }
?>