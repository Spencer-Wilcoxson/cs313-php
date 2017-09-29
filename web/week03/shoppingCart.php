<?php 
   Session_Start();
   
   function addItemToCart($item) {
	   $_SESSION["Items"] = array_push($_SESSION, $item);
   }
?>