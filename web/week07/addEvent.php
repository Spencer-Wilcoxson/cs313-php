<?php
   session_start();
?>
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
	  
	  <form method="post" action="process.php">
	     <input type="text" placeholder="Event Name" name="eventName"> <br />
		 Event Date: <input type="date" name="eventDate"> <br />
		 Reminder Date: <input type="date" name="reminderDate"> <br />
		 <input type="hidden" name="whatPage" value="addEvent">
		 <input type="submit" value="submit">
	  </form>
   </body>
</html>