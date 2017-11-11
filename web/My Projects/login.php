<?php
   session_start();
   
   require 'dbconnect.php';
   
   connect();
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['password'] = $_POST['password'];
?>