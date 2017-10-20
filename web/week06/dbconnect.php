<?php
   session_start();

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
	  $user = $_POST['username'];
	  $pass = $_POST['password'];
	  $db = $GLOBALS['db'];
	  
	  foreach ($db->query('SELECT * FROM users WHERE username=\''.$user.'\'') as $row) {
		  
		  if ($pass == $row['password']) {
			  echo $row['username'];
			  echo '<br />';
			  $GLOBALS['userID'] = $row['id'];
		  }
		  else {
			  echo 'Invalid password';
		  }
	  }
  }
  
  function getUserEventInfo() {
	  $userID = $GLOBALS['userID'];
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
	  $userID = $GLOBALS['userID'];
	  
	  $query = "INSERT INTO events (name, alerttime, userid) VALUES ('TestEvent', '2018-08-26', 2)";
	  $db->query($query);
  }
?>