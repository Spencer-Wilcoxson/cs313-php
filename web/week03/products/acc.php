<?php
   $item = new codaCamber();
   
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
   
   class codaCamber {
	   function codaCamber() {
		   $this->productName = '2018 Arbor Coda Camber';
	      $this->price = 550;
	      $this->image = 'Images/Arbor-Coda-Camber.png';
	      $this->description = 'The Coda Camber is back and better then ever. This new and imporved board tears through even the toughest pow.';
	   }   
   }
?>