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
   
   class product {
	   function product() {
		   $this->productName = '2018 Arbor Wasteland';
	      $this->price = 600;
	      $this->image = 'Images/Arbor_Wasteland.jpg';
	      $this->description = 'Experience the new Wasteland! New technology allows you to carve deeper into the snow, giving you a more relax, smooth ride.';
	   }   
   }
?>