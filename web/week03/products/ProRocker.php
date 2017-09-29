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
		   $this->productName = '2018 Arbor Bryan Iguchi Pro Rocker';
	      $this->price = 530;
	      $this->image = 'Images/Arbor-Bryan-Pro-Rocker.png';
	      $this->description = 'The Bryan Iguchi Pro Rocker was built for riding rails. You\'ll be able to grind all the rails in the park with this board.';
	   }   
   }
?>