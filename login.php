<?php
require_once 'funcs/cons.php';
require_once 'login_section.php';
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
echo main_section();
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