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
		   $this->productName = '2018 Burton Off Axis';
	      $this->price = 770;
	      $this->image = 'Images/Burton-Off-Axis.png';
	      $this->description = 'Hope you can land anything, because with the new Off Axis you\'ll be pulling off tricks you never thought were possible';
	   }
   }
?>