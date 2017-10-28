<?php
   session_start();
   
   require "dbconnect.php";
   connect();
   
   $db = $GLOBALS['db'];
   $userID = $_SESSION['userID'];
   
   echo '<table ID="guestList">';
   echo '<tr>';
   echo '<th>Last Name</th>';
   echo '<th>First Name</th>';
   echo '<th>Invite</th>';
   echo '</tr>';
   
   $query = "SELECT lastname, firstname FROM guestlist WHERE userid = $userID";
   foreach ($db->query($query) as $row) {
      echo '<tr>';
	  echo '<td>'.$row['lastname'].'</td>';
	  echo '<td>'.$row['firstname'].'</td>';
	  echo '<td><input type="checkbox" class="inviteCheck" name="check"></td>';
	  echo '</tr>';
   }
   echo '</table>';
?>