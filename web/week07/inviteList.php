<?php
   session_start();
   
   require "dbconnect.php";
   connect();
   
   $db = $GLOBALS['db'];
   $userID = $_SESSION['userID'];
   
   
//   $query = "SELECT lastname, firstname FROM guestList WHERE userid = $userID";
   
//   echo '<table> <tr> <th>Last Name</th> <th>First Name</th> <th>Invite</th></tr></table>';
   echo '<table>';
   echo '<tr>';
   echo '<th>Last Name</th>';
   echo '<th>First Name</th>';
   echo '<th>Invite</th>';
   echo '</tr>';
   echo '</table>';
   
   $query = "SELECT lastname, firstname FROM guestlist WHERE userid = $userID";
   foreach ($db->query($query) as $row) {
      echo '<tr>';
	  echo '<td>'.$row['lastname'].'</td>';
	  echo '<td>'.$row['firstname'].'</td>';
	  echo '<td><input type="checkbox" class="inviteCheck"></td>';
	  echo '</tr>';
   }
   echo '</table>';
?>