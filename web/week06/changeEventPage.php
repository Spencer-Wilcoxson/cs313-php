<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Change an Event</title>
   </head>
   
   <body>
      <form action="process.php" method="post">
	     <input type="text" name="oldEventName" placeholder="Old Name of Event"> <br />
		 <input type="text" name="newEventName" placeholder="New Event Name"> <br />
		 Old Reminder Date: <input type="date" name="oldReminderDate"> <br />
		 New Reminder Date: <input type="date" name="newReminderDate"> <br />
		 <input type="hidden" name="whatPage" value="changeEvent">
		 <input type="submit" value="Change">
	  </form>
   </body>
</html>