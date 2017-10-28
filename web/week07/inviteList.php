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
   
//   $a = array();
   
   $query = "SELECT lastname, firstname FROM guestList";
   $results = $db->query($query);
   
   $results = json_encode($results);
   
   echo $results;
?>