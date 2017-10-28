<?php
   session_start();
   
   require "dbconnect.php";
   connect();
   
   $db = $GLOBALS['db'];
   $userID = $_SESSION['userID'];
   
   
   $query = "SELECT lastname, firstname FROM guestList WHERE userid = $userID";
   
   echo '<table> <tr> <th>Last Name</th> <th>First Name</th> <th>Invite</th></tr></table>';
   foreach (($db->query($query) as $row) {
   }
?>