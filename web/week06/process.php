<?php
   session_start();

   require "dbconnect.php";
   
   if ($_POST['whatPage'] == 'addEvent') {
	   addEventData();
   }
   

   elseif ($_POST['whatPage'] == 'deleteEvent') {
	   deleteEventData();
   }
   
   else {
	   
   }
   
   /* redirect to the login screen */
   header("Location: login.php");
   exit;
   
   /*
   * Add events to the users database
   */
   function addEventData() {
   // get the data from the form and post it to the session
   $eventName = $_POST['eventName'];
   $eventDate = $_POST['eventDate'];
   $reminderDate = $_POST['reminderDate'];
   
   $_SESSION["eventName"] = $eventName;
   $_SESSION["eventDate"] = $eventDate;
   $_SESSION["reminderDate"] = $reminderDate;
   
   
   /* process the form data*/
   addEvent();
   }
   
   /*
   * Delete an event from the users database of events
   */
   function deleteEventData() {
	   _$SESSION['eventName'] = $_POST['eventName'];
	   $_SESSION['evetnDate'] = $_POST['eventDate'];
	   deleteEvent();
   }
?>