<header class="header">
   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><img src="images/logo.jpeg" height="50" width="50">    LANDMARK</a>
         <ul>
            <li><a href="post_property.php">Upload Property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div class="menu">
            <ul>
               <li><a href="#">Listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="post_property.php">Upload Property</a></li>
                     <li><a href="my_listings.php">My Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">Options<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">Filter Search</a></li>
                     <li><a href="listings.php">All Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About us</a></i></li>
                     <li><a href="contact.php">Contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">Login now</a></li>
                  <li><a href="register.php">Register new</a></li>
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">Update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>
</header>