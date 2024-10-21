<?php
require_once 'funcs/cons.php';
require_once 'register_section.php';
?>
<!doctype html>
<html lang="en">
<?php
echo get_head();
?>
<body>
<?php

//Topbar Start
echo before_header();
//Topbar End

//Header Start
echo get_header();
//Header End

echo whatsapp();


//Inner Heading Start-->
echo first_section();
if(isset($_POST['name'])){

  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $address=$_POST['address'];
  echo $address;
  $plz=$_POST['plz'];
  $ort=$_POST['ort'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $subject=$_POST['service'];
  $gebaude=$_POST['gebaude'];
  $zimmer=$_POST['zimmer'];
  $stock=$_POST['stock'];
  $meter=$_POST['meter'];
  $lift=$_POST['lift'];
 

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
  <li style='list-style-type:none;text-align:center'>  <b> Name</b> : ".$lname." </li>
  <li style='list-style-type:none;text-align:center'>  <b> Vorname</b> : ".$name." </li>
  <li style='list-style-type:none;text-align:center'>  <b> Address</b> : ".$address." <br>".$plz."<br>".$ort."</li>
<li style='list-style-type:none;text-align:center'>  <b> E-mail</b> : ".$email." </li>
<li style='list-style-type:none;text-align:center'>  <b> Tel-Nummer</b> : ".$phone." </li><hr>
<li style='list-style-type:none;text-align:center'>  <b> Gebaude</b> : ".$gebaude." </li>
<li style='list-style-type:none;text-align:center'>  <b> Zimmer</b> : ".$zimmer." </li>
<li style='list-style-type:none;text-align:center'>  <b> Qudratmeter</b> : ".$meter." </li>
<li style='list-style-type:none;text-align:center'>  <b> Stock</b> : ".$stock." </li>
<li style='list-style-type:none;text-align:center'>  <b> Haben Sie Lift?</b> : ".$lift." </li>

</p>

</div>";
      
  send_mail($subject, $html, MAIL_TO_ADDRESS);

  echo contact_alert_msg();
}
if(isset($_POST['fname'])){

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $address=$_POST['address'];
  echo $address;
  $plz=$_POST['plz'];
  $ort=$_POST['ort'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $subject=$_POST['service'];

  $zimmer=$_POST['zimmer'];
  $stock=$_POST['stock'];
  $ort1=$_POST['ort1'];
  $ort2=$_POST['ort2'];
  
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
  <li style='list-style-type:none;text-align:center'>  <b> Name</b> : ".$lname." </li>
  <li style='list-style-type:none;text-align:center'>  <b> Vorname</b> : ".$fname." </li>
  <li style='list-style-type:none;text-align:center'>  <b> Address</b> : ".$address." <br>".$plz."<br>".$ort."</li>
<li style='list-style-type:none;text-align:center'>  <b> E-mail</b> : ".$email." </li>
<li style='list-style-type:none;text-align:center'>  <b> Tel-Nummer</b> : ".$phone." </li><hr>

<li style='list-style-type:none;text-align:center'>  <b> Zimmer</b> : ".$zimmer." </li>
<li style='list-style-type:none;text-align:center'>  <b> Ort</b> :Von ".$ort1." Nach ".$ort2."</li>

</p>

</div>";
      
  send_mail($subject, $html, MAIL_TO_ADDRESS);

  echo contact_alert_msg();
}
//Inner Heading End--> 
echo form_section();
?>
<!--Inner Content Start-->


<!--Footer Start-->
<?php
echo footer();
?>
<!--Footer End--> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- Owl Carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- Jquery Fancybox --> 
<script src="js/jquery.fancybox.min.js"></script> 
<!-- wow js --> 
<script src="js/animate.js"></script> 
<script src="js/jquery.nice-select.js"></script> 
<script src="js/jquery.flexslider.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- general script file --> 
<script src="js/wow.js"></script> 
<script src="js/script.js"></script>
</body>
</html>