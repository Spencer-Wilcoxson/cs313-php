<?php
   session_start();
   $db = null;
   $isLoggedIn = false;

   $userID = null;
   
   $dbUrl = getenv('DATABASE_URL');
		 
   $dbopts = parse_url($dbUrl);
		 
   $dbHost = $dbopts["host"];
   $dbPort = $dbopts["port"];
   $dbUser = $dbopts["user"];
   $dbPassword = $dbopts["pass"];
   $dbName = ltrim($dbopts["path"], '/');
   try {
      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
   }
   
   catch (PDOException $ex) {
	   echo 'ERROR!'.$ex->getMessage();
	   die();
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
	  $eventDate = $_SESSION['eventDate'];
	  $db = $GLOBALS['db'];
	  
	 // $query = "DELETE FROM events WHERE name = '$eventName' AND eventDate = '$eventDate'";
	  
	 // $db->query($query);
  }
?>