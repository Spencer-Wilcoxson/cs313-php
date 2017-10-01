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
		   $this->productName = '2018 Burton Flying V';
	      $this->price = 700;
	      $this->image = 'Images/Burton-Flying-V.png';
	      $this->description = 'Prepare to take to the skies with the new Flying V from Burton!';
	   }   
   }
?>