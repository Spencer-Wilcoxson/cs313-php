<?php
   session_start();
   
   require "dbconnect.php";
   connect();
   
//   public class guest {
//	   $lastname = null;
//	   $firstname = null;
//   }
   
   
   $db = $GLOBALS['db'];
   $userID = $_SESSION['userID'];
   
   $a = array();
   
   $query = "SELECT lastname, firstname FROM guestList WHERE userid = $userID";
   
   foreach (($db->query($query) as $row) {
	   array_push($a, $row);
   }
   
   echo "HELLO";
?>