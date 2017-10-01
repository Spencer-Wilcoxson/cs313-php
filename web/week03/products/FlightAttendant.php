<?php
   $item = new product();
   
   function getPrice() {
	   echo $GLOBALS['item']->price;
   }
   
   function getItem() {
	   return $GLOBALS['item'];
   }
   
      function getProductImage() {
	   echo $GLOBALS['item']->image;
   }
   
   function getProductDescription() {
	   echo $GLOBALS['item']->description;
   }
   
   function getProductName() {
	   echo $GLOBALS['item']->productName;
   }
   
   class public product {
	   function product() {
		  $this->productName = '2018 Burton Flight Attendant';
	      $this->price = 675;
	      $this->image = 'Images/Burton-Flight-Attendant.png';
	      $this->description = 'Ladies and Gentlemen, this is your captian speaking. Please prepare for takeoff.';
	   }   
   }
?>