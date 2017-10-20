<?php
   session_start();
   
   /* redirect to the login screen */
   header("Location: login.php");
   
   require "dbconnect.php";
   
   /* process the form data*/
   addEvent();
   
   exit;
?>