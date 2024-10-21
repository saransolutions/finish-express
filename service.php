<?php
require_once 'funcs/cons.php';
require_once 'service_section.php';
?>

<!doctype html>
<html lang="en">
<?php
echo get_head();
?>
<body>
<!--Topbar Start-->
<?php
echo before_header();

//Topbar End--> 

//Header Start-->
echo get_header();

//Header End--> 
echo whatsapp();

//Inner Heading Start-->
echo first_section();
if(isset($_POST['name'])){

  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

 $html = "
  <div style='background-color: lightgrey;
width: 80%;
border: 3px solid darkblue;
padding: 5px;
margin: 20px;
font-size:20px;
line-height: 1.8'>
<h1 style='text-align:center;color:#471b75;font-weight: bold;text-transform: uppercase;'><u>".$subject."</u></h1>
<p text-align:center; color:solid black>
Hallo ,<br>
You have request from your customer for your service. Details given below:<br>
  <li style='list-style-type:none;text-align:center'>  <b> Name</b> :".$name." ".$lname." </li>
 <li style='list-style-type:none;text-align:center'>  <b> E-mail</b> : ".$email." </li>
<li style='list-style-type:none;text-align:center'>  <b> Tel-Nummer</b> : ".$phone." </li><hr>
<li style='list-style-type:none;text-align:center'>  <b> Message</b> : ".$message." </li>
<</p>

</div>";
      
  send_mail($subject, $html, MAIL_TO_ADDRESS);

  echo contact_alert_msg();
}
//Inner Heading End--> 
?>
<!--Inner Content Start-->
<div class="innercontent">
  <div class="container">
    <div class="row listing_wrap">
      <div class="col-lg-4">
      <?php
         echo side_section_1();
         echo side_section_2();
         echo side_section_3();
       ?>
        
        
      </div>
      <div class="col-lg-8">
<?php

echo sort_list();
echo main_content();
?>
</div>
    </div>
  </div>
</div>

<!--Inner Content End--> 

<!--Newsletter Start-->
 <?php
echo news_letter();
 
//Newsletter End-->

//Footer Start-->
echo footer();
//Footer End--> 
?>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- wow js --> 
<script src="js/animate.js"></script> 
<script src="js/jquery.nice-select.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- general script file --> 
<script src="js/wow.js"></script> 
<script src="js/script.js"></script>
</body>
</html>