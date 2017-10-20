<?php
   session_start();

   require "dbconnect.php";
   
   /* process the form data*/
   addEvent();
   
   /* redirect to the login screen */
   header("Location: login.php");
   exit;
?>