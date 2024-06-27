<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="644d4d89-c163-4b70-bd63-904357453523";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  

   

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- custom css file link  -->

   <link type="text/css" rel="stylesheet" href="css/style.scss">
   
</head>
<body>



   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.php" class="find-home-form" method="post">
         <h3>Find Home</h3>
         <div class="box">
            <p>Enter location <span>*</span></p>  
            <input type="text" name="h_location" required maxlength="100" placeholder="Enter city name" class="input"> 
         </div>
         <div class="flex">
            <div class="box">
               <p>Property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">Flat</option>
                  <option value="house">House</option>
                  <option value="shop">Shop</option>
               </select>
            </div>
            <div class="box">
               <p>Offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">Sale</option>
                  <option value="resale">Resale</option>
                  <option value="rent">Rent</option>
               </select>
            </div>
           <!-- <div class="box">
               <p>Minimum budget <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="5000">CAD 5000</option>
                  <option value="10000">CAD 10000</option>
                  <option value="15000">CAD 15000</option>
                  <option value="20000">CAD 20000</option>
                  <option value="30000">CAD 30000</option>
                  <option value="40000">CAD 40000</option>
                  <option value="40000">CAD 40000</option>
                  <option value="50000">CAD 50000</option>
                  <option value="100000">CAD 100000</option>
                  <option value="500000">CAD 500000</option>
                  <option value="1000000">CAD 1000000</option>
                  <option value="2000000">CAD 2000000</option>
                  <option value="3000000">CAD 3000000</option>
                  <option value="4000000">CAD 4000000</option>
                  <option value="5000000">CAD 5000000</option>
                  <option value="6000000">CAD 6000000</option>
                  <option value="7000000">CAD 7000000</option>
                  <option value="8000000">CAD 8000000</option>
                  <option value="9000000">CAD 9000000</option>
                  <option value="10000000">CAD 10000000</option>
               </select>
            </div>
            <div class="box">
               <p>Maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
               <option value="5000">CAD 5k</option>
                  <option value="5000">CAD 5000</option>
                  <option value="10000">CAD 10000</option>
                  <option value="15000">CAD 15000</option>
                  <option value="20000">CAD 20000</option>
                  <option value="30000">CAD 30000</option>
                  <option value="40000">CAD 40000</option>
                  <option value="40000">CAD 40000</option>
                  <option value="50000">CAD 50000</option>
                  <option value="100000">CAD 100000</option>
                  <option value="500000">CAD 500000</option>
                  <option value="1000000">CAD 1000000</option>
                  <option value="2000000">CAD 2000000</option>
                  <option value="3000000">CAD 3000000</option>
                  <option value="4000000">CAD 4000000</option>
                  <option value="5000000">CAD 5000000</option>
                  <option value="6000000">CAD 6000000</option>
                  <option value="7000000">CAD 7000000</option>
                  <option value="8000000">CAD 8000000</option>
                  <option value="9000000">CAD 9000000</option>
                  <option value="10000000">CAD 10000000</option>
               </select>
            </div>
         </div> -->

         <div class="box">
               <p>Minimum budget <span>*</span></p>
               <input type="number" name="h_min" required maxlength="100" placeholder="Amount in CAD" class="input">
            </div>
            <div class="box">
               <p>Maximum budget <span>*</span></p>
               <input type="number" name="h_max" required maxlength="100" placeholder="Amount in CAD" class="input">
            </div>
         </div>
         <input type="submit" value="search property" name="h_search" class="btn">
         
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">Latest Listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Save</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= $fetch_property['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="price"><i class="fa-solid fa-dollar-sign"></i><span><?= $fetch_property['price']; ?></span></div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>Sqft</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">View Property</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
      }
      ?>
      
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">View all</a>
   </div>

</section>

<!-- listings section ends -->


<!-- services section starts  -->

<section class="services">

   <h1 class="heading">Our services</h1>

   <div class="box-container">

      <div class="box">
          <i class="fa-solid fa-dollar-sign" style="font-size:30px;"></i>
         <h3>Buy House</h3>
         <p>
Embark on your home-buying journey with us—a seamless experience, expert guidance, and curated property options await.</p>
      </div>

      <div class="box">
         <i class="fa-solid fa-tags" style="font-size:30px;"></i>
         <h3>Rent House</h3>
         <p>Discover your ideal home with our house rental service. From cozy apartments to spacious family homes, we offer a diverse range of quality rentals. </p>
      </div>

      <div class="box">
         <i class="fa-solid fa-gavel" style="font-size:30px;"></i>
         <h3>Sell House</h3>
         <p>Unlock the potential of your property—sell with confidence through our streamlined portal. Benefit from strategic exposure and expert assistance</p>
      </div>

      <div class="box">
         <i class="fa-solid fa-list-check" style="font-size:30px;"></i>
         <h3>Permit Management</h3>
         <p>Facilitate construction projects seamlessly with our Builder Permit Management System. Streamline permit applications, approvals, and tracking effortlessly </p>
      </div>

      <div class="box">
      <i class="fa-solid fa-tower-broadcast" style="font-size:30px;"></i>
         <h3>Live Tracking</h3>
         <p>Experience real-time project oversight with our portal's live tracking feature. Monitor construction progress, resource allocation, and milestones seamlessly</p>
      </div>

      <div class="box">
         <i class="fa-solid fa-headset" style="font-size:30px;"></i>
         <h3>24/7 Service</h3>
         <p>Access support around the clock with our 24-hour live customer service, providing instant assistance whenever you need it. Our team  provides reliable support.</p>
      </div>

   </div>

</section>

<!-- services section ends -->








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>


<script src="js/counter.js"></script>





</body>
</html>