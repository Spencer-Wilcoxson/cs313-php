<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Invite Guests</title>
	  <script src="addGuest.js"></script>
   </head>
   
   <body>
      <h1>Invite Guests</h1>
	  <p>Select Guests below to add to the guest list for an event, or add a new guest below</p>
	  <input type="button" value="Test Button" onclick="showGuest()">
	  
	  <?php
	     require 'inviteList.php';
//	     require 'inviteList.php';
//	     require 'dbconnect.php';
//		 connect();
		 
//		 $db = $GLOBALS['db'];
//	     $userID = $_SESSION['userID'];
	  
//	     echo '<table>';
//	     echo '<tr>';
//	     echo '<th>Last Name</th>';
//	     echo '<th>First Name</th>';
//	     echo '<th>Invite</th>';
//	     echo '</tr>';
		 
//		 $query = "SELECT lastname, firstname FROM guestlist WHERE userid = $userID";
//		 foreach ($db->query($query) as $row) {
//			 echo '<tr>';
//			 echo '<td>'.$row['lastname'].'</td>';
//			 echo '<td>'.$row['firstname'].'</td>';
//			 echo '<td><input type="checkbox" class="inviteCheck"></td>';
//			 echo '</tr>';
//		 }
//		 echo '</table>';
	  ?>
	  <div id="addGuestList">
	  
	  </div>
   </body>
</html>