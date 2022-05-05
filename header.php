<header class="header">

   <div class="flex">
   <a href="#"><img src ="collection.jpg">
      <a href="#" class="logo">3 Bro's Fabrics</a>

      <nav class="navbar">
     
          <a  href="feb.php">Home</a>
           <a href="About.php">About</a>
          <a  href="Products.php">Products</a>
          <a  href="Contact.php">Contact</a>
        
     
         <a href="products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>