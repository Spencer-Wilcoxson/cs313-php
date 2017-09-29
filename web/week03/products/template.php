<?php
   // change name
   $item = new productName();
   echo '<h1>2018 Arbor Coda Camber</h1>';
   // change product name
   echo '<img class="productImg" src='.$item->image.' alt="productName">';
   echo '<p id="productInfo">'.$item->description.'</p>';
   
   function price() {
	   echo '<span id="price">'.$GLOBALS['item']->price.'</span>';
   }
   
   function getItem() {
	   return $GLOBALS['item'];
   }
   
   function getProductImage() {
	   return $GLOBALS['item']->image;
   }
   
   function getProductDescription() {
	   return $GLOBALS['item']->description;
   }
   
   // change name
   class productName {}
	   function productName() {
	      $this->price = 550;
	      $this->image = '';
	      $this->description = '';
	   }   
   }
?>