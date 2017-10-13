<?php 
   Session_Start();
   
   function addItemToCart($item) {
	   $_SESSION[$item->getProductName()] = $item;
	   echo '<p>$item->name</p>';
   }
?>

<!DOCTYPE html>
<html>
   <head>
   </head>
</html>