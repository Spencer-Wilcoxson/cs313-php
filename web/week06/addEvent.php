<!DOCTYPE html>
<html>
   <head>
      <title>Add an event</title>
   </head>
   
   <body>
      <?php
         require "dbconnect.php";	  
	  ?>
      <h1>Add Event</h1>
	  <p>Please enter the event information below</p>
	  
	  <form method="post" action="<?php echo $_SERVER['php_self'];?>">
	     <input type="text" placeholder="Event Name" name="eventName"> <br />
		 Event Date: <input type="date" name="eventDate"> <br />
		 Reminder Date: <input type="date" name="ReminderDate"> <br />
		 <input type="submit" value="submit">
	  </form>
	  
	  
	  <!-- Only run this if the form above has been submitted -->
	  <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 echo "YESSSS!!!!!";
		 }	  
	  ?>
   </body>
</html>