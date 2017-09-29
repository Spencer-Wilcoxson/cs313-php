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
		   $this->productName = '2018 Arbor Formula';
	      $this->price = 575;
	      $this->image = 'Images/Arbor-Formula.png';
	      $this->description = 'The Arbor Formula is the perfect all mountain board. Want to take it down down the steep slopes? No problem! What about the park? Go for It!
		  Theres nothing you can\'t do when you have this board strapped on your feet!';
	   }   
   }
?>