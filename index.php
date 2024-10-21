<?php
require_once 'funcs/cons.php';
require_once 'index_section.php';
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
//Revolution slider start
echo get_slider();
//Revolution slider end 
//About Start 
echo choose_us();
//About End
//Services Start
echo services();
//Services End
//How it Work Start
echo get_process();
//How it Work Start

//Get In Touch start -->
echo contact();
//Get In Touch End

//Appointment Start -->
echo appointment();

//Appointment End


//Footer Start
echo footer();
//Footer End
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