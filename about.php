<?php
require_once 'funcs/cons.php';
require_once 'about_section.php';
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
//Header End--> 
//Inner Heading Start-->
echo first_section();
//Inner Heading End--> 
if(isset($_POST['mail'])){

  $subject=$_POST['mail'];
 
 $html = "
  <div style='background-color: lightgrey;
width: 80%;
border: 3px solid darkblue;
padding: 5px;
margin: 20px;
font-size:20px;
line-height: 1.8'>
<h1 style='text-align:center;color:#471b75;font-weight: bold;text-transform: uppercase;'><u>New subscriber </u></h1>
<p text-align:center; color:solid black>
Hallo ,<br>
Einer Ihrer Kunden abonniert Ihren Newsletter:<br>
 <li style='list-style-type:none;text-align:center'>  <b> E-mail</b> : ".$subject." </li>
</p>

</div>";
      
  send_mail($subject, $html, MAIL_TO_ADDRESS);

  echo news_letter_msg();
}
//Inner Content Start-->
echo main_content();
//Inner Content End-->

//How it Work Start-->

echo get_process();
//How it Work Start-->
//-Newsletter Start-->
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