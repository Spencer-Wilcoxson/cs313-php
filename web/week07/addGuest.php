<?php 
   session_start();
   
   header("Content-type: application/json; charset=UTF-8");
   
   require 'dbconnect.php';
   
   connect();
   
   $userID = $_SESSION["userID"];
   $db = $GLOBALS['db'];
   
   $obj = json_decode($_POST['guests'], false);
   
   foreach ($obj as $item) {
	   $query = "INSERT INTO junction (eventsid, guestid, userid) VALUES (5, $item->id, $userID)";
	   $db->query($query); 
   }
?>