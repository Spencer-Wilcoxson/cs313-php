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
		   $this->productName = '2018 Arbor Helix';
	      $this->price = 480;
	      $this->image = 'Images/Arbor-Helix.png';
	      $this->description = 'Great Flix, Great Camber, Great ridding. Everything about the Arbor Helix is made for a all around great ride.';
	   }   
   }
?>