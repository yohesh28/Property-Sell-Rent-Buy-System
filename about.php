<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about img.jpg" alt="">
      </div>
      <div class="content">
         <h3>We Are the Best Real Estate Company</h3>
         <p>Globalization and fast lifestyle has encouraged the real estate industry to step in E-World. Now active partakers of real estate world are eagerly seeking the right options to establish themselves in E-Real Estate World. Landmark.Com is a solution to all what bothers to people who all are dealing in properties or people who all are searching property. As one of the leading property portals, RealestateIndia has tuned itself with pulse of real estate sector. Moving ahead with esteemed registered users and regularly visited by players of real estate industry, RealestateIndia.Com has become the pivot for real-estate sector</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>
</section>
<br>
<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/OIP.jpg" alt="">
         <h3>contact property owner</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p></p>
      </div>

   </div>
</section>
<section class="reviews">
   <h1 class="heading">Testimonials</h1>
   <div class="box-container">
      <div class="box">
         <div class="user">
            <img src="images/tes.jpg" alt="">
            <div>
               <h3>Unni Krishnan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"We were so fortunate to have found Landmark.com when we moved to Tamilnadu. This Website helped us find the right house in the right neighborhood for the right price. This Website was patient as we traveled from kerala to look at homes over several months and cautioned us about making unreasonable offers when we fell too quickly for overpriced homes.
                            In short,Landmark.com was always on our side working to make our house purchase as simple and successful as possible.  We would recommend this page to anyone."</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/tes2.jpg" alt="">
            <div>
               <h3>Saravanan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"I recently had the pleasure of working with Landmark.com when looking for my home. From day 1, this website was extremely responsive and had great suggestions for homes to view based on what I was looking for. All throughout the negotiations and closing  were there quickly handling any issues that may have risen. If the time ever comes when I will be looking for a new home, there isn't any question on who my Realtor will be!"</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/tes3.jpg" alt="">
            <div>
               <h3>Shiny Abdul</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>The detailed description, information on amenities and high resolution images, helped me to shortlist the right property. Simplified my life and get property at my own convenience!</p>
      </div>
</section>
<?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>