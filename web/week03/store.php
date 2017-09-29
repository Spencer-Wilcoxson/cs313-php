<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Store</title>
	  <link rel="stylesheet" type="text/css" href="week03.css">
	  <link rel="stylesheet" type="text/css" href="menu.css">
   </head>
   
   <body>
      <!-- The menu -->
	  <div class="menu">
	     <?php include 'menu.php';?>
	  </div>
	  
	  <br />
	  
	  <!-- Welcome text -->
	  <h1>Spencer's Store!</h1>
	  <p id="WelcomeText">Welcome to our store! We specialize in selling only the highest end snowboards for the cheapest prices. We'll beat anyone's price's, Guaranteed!</p>
	  
      <!-- All of the snowboards that we sell -->
      <div id="Gear">
	     <h2>Arbor Snowboards</h2>

		 <!-- 2018 Arbor Coda Camber -->
		 <div class="product">
		    <a href="productInfo.php?product=acc">
			   <img id="Arbor-Coda-Camber" src="Images/Arbor-Coda-Camber.png" alt="2018 Arbor Coda Camber">
			   <span class="productName">Coda Camber</span>
			</a>
		 </div>
		 
		 <!-- 2018 Arbor Wasteland -->
		 <div class="product">
		    <a href="productInfo.php?product=Wasteland">
			   <img id="Arbor-Wasteland" src="Images/Arbor_Wasteland.jpg" alt="2018 Arbor Wasteland">
			   <span class="productName">Wasteland</span>
			</a>
		 </div>
		 
		 <!-- 2018 Bryan Iguchi Pro Rocker -->
		 <div class="product">
		    <a href="productInfo.php?product=ProRocker">
			   <img id="Arbor-Bryan-Pro-Rocker" src="Images/Arbor-Bryan-Pro-Rocker.png" alt="2018 Arbor Bryan Iguchi Pro Rocker">
			   <span class="productName">Bryan Iguchi Pro Rocker</span>
			</a>
		 </div>
	     
		 <!-- 2018 Arbor Formula -->
		 <div class="product">
		    <a href="productInfo.php?product=Formula">
			   <img id="Arbor-Formula" src="Images/Arbor-Formula.png" alt="2018 Arbor Formula">
			   <span class="productName">Formula</span>
			</a>
		 </div>
		 
		 <!-- Arbor Helix -->
		 <div class="product">
		    <a href="productInfo.php?product=Helix">
			   <img id="Arbor-Helix" src="Images/Arbor-Helix.png" alt="2018 Arbor Helix">
			   <span class="productName">Helix</span>
			</a>
		 </div>
	  
	     <h2>Burton Snowboards</h2>
		  
		  <!-- Burton Flight Attendent -->
		  <div class="product">
		     <a href="productInfo.php?product=FlightAttendant">
			    <img id="Burton-Flight-Attendant" src="Images/Burton-Flight-Attendant.png" alt="2018 Burton Flight Attendant">
				<span class="productName">Flight Attendant</span>
			 </a>
		  </div>
		  
		  <!-- Burton Flying V -->
		  <div class="product">
		     <a href="productInfo.php?product=FlyingV">
			    <img id="Burton-Flying-V" src="Images/Burton-Flying-V.png" alt="Burton Flying V">
                <span class="productName">Flying V</span>
             </a>				
		  </div>
		  
		  <!-- Burton Off Axis -->
		  <div class="product">
		     <a href="productInfo.php?product=OffAxis">
			    <img id="Burton-Off-Axis" src="Images/Burton-Off-Axis.png" alt="Burton Off Axis">
				<span class="productName">Off Axis</span>
			 </a>
		  </div>
		  
		  <!-- Burton Custom Flying X -->
		  <div class="product">
		     <a href="productInfo.php?product=CustomFlyingX">
			    <img id="Burton-Custom-Flying-X" src="Images/Burton-Custom-Flying-X.png" alt="Burton Custom Flying X">
				<span class="productName">Custom Flying X</span>
			 </a>
		  </div>
		  
		  <!-- Burton Family Tree Panhandler -->
		  <div class="product">
		     <a href="productInfo.php?product=FTP">
			    <img id="Burton-Family-Tree-Panhandler" src="Images/Burton-Family-Tree-Panhandler.png" alt="Burton Family Tree Panhandler">
				<span class="productInfo">Family Tree Panhandler</span>
			 </a>
		  </div>
	  </div>
   </body>
</html>