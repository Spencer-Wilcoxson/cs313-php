<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Delete Event</title>
   </head>
   
   <body>
      <h1>Delete Event</h1>
	  <p>Please enter the event information below that you wish to delete</p>
	  
	  <form method="post" action="process.php">
	     <input type="text" name="eventName" placeholder="Event Name">
		 <input type="date" name="eventDate" placeholder="Event Date" >
		 <input type="hidden" name="whatPage" value="deleteEvent">
		 <input type="submit" value="submit">
	  </form>
   </body>
</html>