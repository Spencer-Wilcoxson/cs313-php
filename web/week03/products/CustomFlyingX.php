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
		   $this->productName = '2018 Burton Custom Flying X';
	      $this->price = 675;
	      $this->image = 'Images/Burton-Custom-Flying-X.png';
	      $this->description = 'They say that X marks the spot. You just better be able to find the X while spinning through the air!';
	   }   
   }
?>