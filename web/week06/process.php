<?php
   session_start();

   require "dbconnect.php";
   
   if ($_POST['whatPage'] == 'addEvent') {
	   addEventData();
   }
   

   elseif ($_POST['whatPage'] == 'deleteEvent') {
	   deleteEventData();
   }
   
   elseif ($_POST['whatPage'] == 'changeEvent') {
	   changeEventData();
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
	   $_SESSION['eventName'] = $_POST['eventName'];
	   $_SESSION['reminderDate'] = $_POST['reminderDate'];
	   deleteEvent();
   }
   
   /*
   * Update an existing event
   */   
   function changeEventData() {
	   $_SESSION['oldEventName'] = $_POST['oldEventName'];
	   $_SESSION['newEventName'] = $_POST['newEventName'];
	   $_SESSION['oldEventDate'] = $_POST['oldEventDate'];
	   $_SESSION['newEventName'] = $_POST['newEventDate'];
	   $_SESSION['oldReminderDate'] = $_POST['oldReminderDate'];
	   $_SESSION['newReminderDate'] = $_POST['newReminderDate'];
   }
?>