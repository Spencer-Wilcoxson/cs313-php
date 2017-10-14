<!DOCTYPE html>
<html>
   <head>
      <title>User Events</title>
	  <link rel="stylesheet" type="text/css" href="userInfo.css">
   </head>
   
   <?php
      require 'dbconnect.php';
	  getUser();
	  getUserEventInfo();
   ?>
</html>