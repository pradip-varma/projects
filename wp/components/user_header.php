<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1" style="background-color:#303030">
      <section class="flex">
         
         <a href="./home.php" class=" header-logo" > <img src="img/logo.png" class=" header-logo" alt=""> </a>

         
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex ">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="./home.php" class=" nav-2-logo" > <img src="img/logo.png" class=" header-logo" alt=""> </a>
         <div class="menu">
            <ul>
               <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                  
               </li>
               <li><a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Advance Search</a>
                  
               </li>
               
               <li><a href="post_property.php"><i class="fa-solid fa-file-circle-plus"></i> Post Property</a></li>
               <!-- <li><a href="builder.php"><i class="fa-solid fa-helmet-safety"></i> Builder</a></li> -->
               <li><a href="about.php"><i class="fa-solid fa-user"></i> About us</a></i></li>
               <li><a href="contact.php"><i class="fa-solid fa-envelope"></i> Contact us</a></i></li>

            <li><a href="#"><i class="fa-solid fa-circle-user "></i> Account<i class="fas fa-angle-down"></i></a>
               <ul class="account-link">
                  <li><a href="login.php">Login now</a></li>
                  <li><a href="register.php">Register new</a></li>
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">Update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a>
                  <?php } ?></li>
               </ul>
            </li>
            </ul>
         </div>

         <ul>
            
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->