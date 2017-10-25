<?php
   session_start();
   $db = null;
   $isLoggedIn = false;

   $userID = null;
   
   
   function connect() {
      $dbUrl = getenv('DATABASE_URL');
	  $db = $GLOBALS['db'];
   
		 
      $dbopts = parse_url($dbUrl);
		 
      $dbHost = $dbopts["host"];
      $dbPort = $dbopts["port"];
      $dbUser = $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName = ltrim($dbopts["path"], '/');
      try {
         $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		 $GLOBALS['db'] = $db;
      }
    
      catch (PDOException $ex) {
	      echo 'ERROR!'.$ex->getMessage();
	      die();
      }
   }
   
  function getUser() {
	  $db = $GLOBALS['db'];	  
	  $user = $_POST['username'];
	  $pass = $_POST['password'];
	  
	  foreach ($db->query('SELECT * FROM users WHERE username=\''.$user.'\'') as $row) {
		  
		  if ($pass == $row['password']) {
			echo $row['username'];
			echo '<br />';
			$GLOBALS['userID'] = $row['id'];
			$_SESSION["userID"] = $row['id'];
		  }
		  else {
			echo 'Invalid password';
			$GLOBALS['isLoggedIn'] = false;
		  }
	  }
 }
  
  function getUserEvents() {
	  $userID = $_SESSION["userID"];
	  $db = $GLOBALS['db'];
	  
	  echo '<table border="1">';
	  echo '<tr>';
	  echo '<th>Event</th> <th>Alert Time</th>';
	  echo '</tr>';
	  foreach ($db->query('SELECT name, alerttime FROM events WHERE userid = '.$userID) as $row) {
		  echo '<tr>';
		  echo '<td>'.$row['name'].'</td><td>'.$row['alerttime'].'</td>';
		  echo '</tr>';
	  }
	  echo '</table>';
	  
  }
  
  function testInput($data) {
	  $data = trim($data);
	  $data = stripcslashes($data);
	  $data = htmlspecialchars($data);
  }
  
  function addEvent() {
	  $db = $GLOBALS['db'];
	  $userID = $_SESSION["userID"];
	  
	  $eventName = $_SESSION["eventName"];
	  $eventDate = $_SESSION["eventDate"];
	  $reminderDate = $_SESSION["reminderDate"];
	  
	  $query = "INSERT INTO events (name, alerttime, userid) VALUES ('$eventName', '$reminderDate', $userID)";
	  $db->query($query);
  }
  
  function deleteEvent() {
	  $eventName = $_SESSION['eventName'];
	  $reminderDate = $_SESSION['reminderDate'];
	  $db = $GLOBALS['db'];
	  $userID = $_SESSION['userID'];
	  
	  $query = "DELETE FROM events WHERE name = '$eventName' AND alerttime = '$reminderDate' AND userid = $userID";
	  $db->query($query);
  }
  
  function updateEvent() {
	  $oldEventName = $_SESSION['oldEventName'];
	  $newEventName = $_SESSION['newEventName'];
	  $oldReminderTime = $_SESSION['oldReminderTime'];
	  $newReminderTime = $_SESSION['newReminderTime'];
	  
	  $db = $GLOBALS['db'];
	  
	  $query = "UPDATE events SET name = '$newEventName', alerttime = '$newReminderTime' WHERE name = '$oldEventName'";
	  $db->query($query);
  }
  
  function getGuestList() {
	  $db = $GLOBALS['db'];
	  $userID = $_SESSION['userID'];
	  
	  echo '<table border="1">';
	  echo '<tr>';
	  echo '<th>Last Name</th>';
	  echo '<th>First Name</th>';
	  echo '<th>Event Name</th>';
	  echo '</tr>';
//	  echo '</table>';
	  
	  $query = "SELECT guestlist.lastname, guestlist.firstname, events.name FROM ((junction INNER JOIN guestlist ON junction.guestid = guestlist.id) INNER JOIN events ON junction.eventsid = events.id) WHERE junction.userid = $userID";
	  foreach ($db->query($query) as $row) {
		  echo '<tr>';
		  echo '<td>'.$row['lastname'].'</td>';
		  echo '<td>'.$row['firstname'].'</td>';
		  echo '<td>'.$row['name'].'</td>';
		  echo '</tr>';
	  }
	  echo '</table>';
  }
?>