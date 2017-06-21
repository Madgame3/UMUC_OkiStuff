<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section id="index-page">
     <h1>Categories</h1>
     <hr>
     <div id="item-flex-box">
       <div class="category-box"><a href="./category_clothing.php">Clothing & Accessories
         <img src="./images/clothing.jpg" alt="clothing">
       </a></div>
       <div class="category-box"><a href="./category_tools.php">Crafts & Tools
         <img src="./images/tools.jpg" alt="tools">
       </a></div>
       <div class="category-box"><a href="./category_electronics.php">Electronics
         <img src="./images/electronics.jpg" alt="electronics">
       </a></div>
       <div class="category-box"><a href="./category_sports.php">Hobbies & Sports
         <img src="./images/sports.jpg" alt="sports">
       </a></div>
       <div class="category-box"><a href="./category_home.php">Home & Living
         <img src="./images/home.jpg" alt="home">
       </a></div>
       <div class="category-box"><a href="./category_baby.php">Kids & Baby
       <img src="./images/baby.jpg" alt="baby"></a></div>
       <div class="category-box"><a href="./category_pets.php">Pets
         <img src="./images/pet.jpg" alt="pet">
       </a></div>
       <div class="category-box"><a href="./category_business.php">Business & Services
         <img src="./images/business.jpg" alt="business">
       </a></div>
       <div class="category-box"><a href="./category_vehicles.php">Vehicles
       <img src="./images/vehicles.jpg" alt="car"></a></div>
     </div>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
