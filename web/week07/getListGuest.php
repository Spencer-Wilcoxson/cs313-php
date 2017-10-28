<?php
   require 'dbconnect.php';
   connect();
   
   /*
   * Get a list of guests to invite and add it to the guestlist
   */
   
   $db = $GLOBALS['db'];
   $userID = $_SESSION['userID'];
   $a = array();
   
   class guest {
	   $lastname = null;
	   $firstname = null;
	   $number = null;
	   $email = null;
	   
	   public function __construct($lastname, $firstname, $number, $email) {
		   $this->lastname = $lastname;
		   $this->lastname = $firstname;
		   $this->number = $number;
		   $this->email = $email;
	   }
   }
   
/*   $query = "SELECT * FROM guestlist WHERE userid = $userID";
    foreach ($db->query($query) as $row) {
		// push a new guest object on to the array
		array_push($a, new guest("$row['lastname']", "$row['firstname']", $row['number'], "$row['email']" ));
	}
*/	
	/*
	* convert to json
	*/
//	$objectArray = json_encode($a);
	
//	echo $objectArray;
?>