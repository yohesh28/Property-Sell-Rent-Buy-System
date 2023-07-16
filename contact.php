<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/about-image.jpg" height="500" width="400" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>
<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>What is a property sell, rent, and buy system?</span><i class="fas fa-angle-down"></i></h3>
         <p>A property sell, rent, and buy system without an agent is an online platform or marketplace where property owners or landlords can list their properties for sale or rent, and potential buyers or renters can connect directly with the property owner or landlord.</p>
      </div>

      <div class="box active">
         <h3><span>How does the system work?</span><i class="fas fa-angle-down"></i></h3>
         <p>The system typically works by allowing property owners or landlords to create a listing for their property, which includes details such as the property's location, price, size, and features. Potential buyers or renters can then search for properties that meet their criteria, and contact the property owner or landlord directly to schedule a viewing or make an offer.</p>
      </div>

      <div class="box">
         <h3><span>What kind of properties are listed on your website?</span><i class="fas fa-angle-down"></i></h3>
         <p>We list a range of residential real estate properties including apartments, villas and plots through our web and mobile platform. Our listings include everything from new, resale, under construction and upcoming properties.</p>
      </div>

      <div class="box">
         <h3><span>What happens after I make an offer on a property?</span><i class="fas fa-angle-down"></i></h3>
         <p>After you make an offer on a property without an agent, the property owner or landlord will typically respond with a counteroffer or acceptance. You may need to negotiate the terms of the lease or sale agreement, such as the deposit amount, move-in date, or repair requirements. Once you and the other party have agreed to the terms, you can sign the agreement and make any necessary payments or deposits.</p>
      </div>

      <div class="box">
         <h3><span>Can I list my own property on the system?</span><i class="fas fa-angle-down"></i></h3>
         <p>Yes, most property sell, rent, and buy systems allow users to list their own properties for sale, rent, or both. You may need to create an account and pay a fee to list your property, depending on the system.</p>
      </div>

   </div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>