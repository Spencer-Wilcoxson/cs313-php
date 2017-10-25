<?php
   session_start();

   require "dbconnect.php";
   connect();
   
   // get the data from the form and post it to the session
   $eventName = $_POST['eventName'];
   $eventDate = $_POST['eventDate'];
   $reminderDate = $_POST['reminderDate'];
   
   $_SESSION["eventName"] = $eventName;
   $_SESSION["eventDate"] = $eventDate;
   $_SESSION["reminderDate"] = $reminderDate;
   
   
   /* process the form data*/
//   addEvent();
   
   /* redirect to the login screen */
   header("Location: login.php");
   exit;
?>