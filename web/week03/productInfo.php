<?php
   session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <script href="productInfo.js"></script>
	  <link rel="stylesheet" type="text/css" href="menu.css">
	  <link rel="stylesheet" type="text/css" href="productInfo.css">
	  <title>Info</title>
   </head>
   
   <body>
      <?php include "menu.php"; ?>
	  <!-- Open the products information page -->
      <?php
	     $productName = $_GET['product'];
		 echo $productName;
		 require "products/".$productName.".php";
	  ?>
	  
	  <div class="product">
	     <h1><?php echo getProductName(); ?></h1>
	     <img id="productImage" src=<?php getProductImage();?> alt="<?php getProductName(); ?>"
		 <p id="productInfo"><?php echo getProductDescription(); ?></p>
	  
	     <p>Price: <span id="price"><?php echo "$"; getPrice();?></span></p>
	  </div>
	  <button id="addToCart">Add To Cart</button>
	  
   </body>
</html>