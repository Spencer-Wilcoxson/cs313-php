<?php
   require "dbconnect.php";
   connect();
   
   $db = $GLOBALS['db'];
   %userID = $_SESSION['userID'];
   
   echo "HELLO";
?>