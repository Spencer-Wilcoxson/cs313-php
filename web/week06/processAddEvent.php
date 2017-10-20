<?php
   session_start();
   
   /* redirect to the login screen */
   header("Location: login.php");
   
   require "dbconnect.php";
   addEvent();
   echo "does this even work?";
   exit;
?>