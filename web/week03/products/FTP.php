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
		   $this->productName = '2018 Family Tree Panhandler';
	      $this->price = 845;
	      $this->image = 'Images/Burton-Family-Tree-Panhandler.png';
	      $this->description = 'Panhandling has never felt so good.';
	   }   
   }
?>