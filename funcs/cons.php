<?php

define("MAIN_TITLE", "Saran Solutions - Homepage");
define("MAIL_FROM_ADDRESS", "info@finishexpress.ch");
define("MAIL_TO_ADDRESS","finishexpress.ch@gmail.com" );
function get_head(){
    return '
    <head>

  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Jquery Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/star.css">
    <title>FinishExpress-Reinigung,Umzug,Entsörgung-Bern, Biel, Basel, Zürich, Genf ganze kanton Schweiz</title>
    </head>
	';
}
function before_header(){
    return '<!--Topbar Start-->
    <div class="topbar-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4">
              <div class="topbar_phone"><a href="mailto:info@finishexpress.ch"><i class="fas fa-envelope" aria-hidden="true"></i>info@finishexpress.ch</a></div><br>
              <div class="topbar_phone"><a href="mailto:finishexpress.ch@gmail.com"><i class="fas f" aria-hidden="true"></i> finishexpress.ch@gmail.com </a></div>
           
          </div>
          <div class="col-lg-6 col-md-8">
            <div class="top_right">
              <div class="topbar_phone"><a href="tel:+41 76 488 36 89"><i class="fas fa-phone-alt" aria-hidden="true"></i> +41 76 488 36 89 </a></div><br>
              <div class="topbar_phone"><a href="tel:+41 78 215 80 30"> +41 78 215 80 30</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Topbar End--> 
';
}
function get_header(){
    return '
    <div class="header-wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="#"><img alt="" src="images/logo/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
               <li class="nav-item active"><a class="nav-link" href="index.php"> Home </a></li>
               <li class="nav-item active"><a class="nav-link" href="about.php"> Über uns</a></li>
               <li class="nav-item"><a class="nav-link" href="service.php"> Diensleitung <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="service.php#treppen">Treppenhäusern Reinigung</a></li>
  <li><a href="service.php #haus">Häusern Reinigung</a></li>
  <li><a href="service.php#wohnung">Wohnung Reinigung</a></li>
  <li><a href="service.php#buro">Büro Reinigung</a></li>
  <li><a href="service.php#fenster">Fenster Reinigung</a></li>
  <li><a href="service.php#end">Endreinigung</a></li>
  <li><a href="service.php#umzug">Reinigung bei Umzügen</a></li>
  <li><a href="service.php#aufzug">Entsorgung</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="register.php"> Frei Angebot</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php"> Feedback</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php"> Kontakt</a></li> 
              </ul>
              <a href="https://admin.finishexpress.ch/"><button type="button" class="btn btn-primary">Login</button></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
	';
}
function footer(){
    return ' 
    <footer class="footer bg-style wow fadeInUp">
  <div class="container">
    <div class="footer-upper">
      <div class="row">

        <div class="col-lg-3 col-md-3">
          <div class="footer-widget quick-links">
            <h3 class="title">Quick links</h3>
            <ul>
              <li><a href="service.php"> Treppenhäusern Reinigung</a> </li>
<li><a href="service.php">Häusern Reinigung</a> </li>
<li><a href="service.php">Wohnung Reinigung</a></li>
<li><a href="service.php">Büro Reinigung</a> </li>
<li><a href="service.php">Fenster Reinigung</a> </li>
<li><a href="service.php">Reinigung Bei Umzügen</a> </li>
            </ul>
          </div>
        </div>


        <div class="col-lg-2 col-md-3">
          <div class="footer-widget quick-links">
            <h3 class="title">Quick links</h3>
            <ul>
              <li><a href="index.php"> Home</a> </li>
              <li><a href="about.php"> Über uns</a> </li>
              <li><a href="service.php"> Diensleitung</a> </li>
              <li><a href="register.php"> Frei Angebot</a> </li>
              <li><a href="contact.php"> Kontakt</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="footer-widget contact">
          <h3 class="title">Kontakt Info</h3>
          <ul class="footer-adress">
            <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>Orpund Strasse 31<br>2504 Biel/Bienne</span> </li>
            <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:finishexpress.ch@gmail.com"> finishexpress.ch@gmail.com </a></span> </li>
           
            <li class="footer_email"> <i class="fas fa-phone-alt"></i> <span><a href="tel:+41 76 488 36 69"> +41 76 488 36 89</a></span></li>
            <li class="footer_email"> <i class="fas fa-phone-alt"></i> <span><a href="tel:+41 76 488 36 69"> +41 78 215 80 30</a> </span></li>
          </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="footer-widget contact">
            <h3 class="title">FinishExpress</h3>
            <div class="header_logo"><a href="#"><img alt="" src="images/logo/logo.png"></a></div><br>
            <div class="social-icons footer_icon">
              <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61559924715100"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
 </div>
  </div>
<div class="copyright">Copyright © finishexpress . All rights reserved<br>
Developed by <a href="https://saransolutions.ch/" target=”_blank” >Saran Solutions </a> </div>
</footer>
	';
}


function whatsapp(){
    return ' <div class="wabtn" id="wabutton">
    <style> [wa-tooltip] { position: relative; cursor: default;  &:hover { &::before { content: attr(wa-tooltip); font-size: 16px; text-align: center; position: absolute; display: block; right: calc(0% - 100px); left: null; min-width: 200px; max-width: 200px; bottom: calc(100% + 10px); transform: translate(-50%); animation: fade-in 500ms ease; background: #00E785; border-radius: 4px; padding: 10px; color: #ffffff; z-index: 1; } } }  @keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.1); } 100% { transform: scale(1); } }  [wa-tooltip] {  }  @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }</style>
    <a wa-tooltip="Wir sind da! Kontaktieren Sie uns:)" target="_blank" href="https://wa.me/41782158030?text=Hello!%20I%20am%20interested%20in%20your%20services%20and%20would%20like%20to%20know%20more%20about%20it.%20Could%20you%20send%20me%20more%20information?%20Thank%20you!" style=" cursor: pointer;height: 62px;width: auto;padding: 10px 10px 10px 10px;position: fixed !important;color: #fff;bottom: 20px;right: 20px;;display: flex;font-size: 18px;font-weight: 600;align-items: center;z-index: 999999999 !important;background-color: #00E785;box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.4);border-radius: 100px;animation: pulse 2.5s ease infinite;">
      <svg width="32" height="32" " viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1024_354)"><path d="M23.8759 4.06939C21.4959 1.68839 18.3316 0.253548 14.9723 0.0320463C11.613 -0.189455 8.28774 0.817483 5.61565 2.86535C2.94357 4.91323 1.10682 7.86244 0.447451 11.1638C-0.21192 14.4652 0.351026 17.8937 2.03146 20.8109L0.0625 28.0004L7.42006 26.0712C9.45505 27.1794 11.7353 27.7601 14.0524 27.7602H14.0583C16.8029 27.7599 19.4859 26.946 21.768 25.4212C24.0502 23.8965 25.829 21.7294 26.8798 19.1939C27.9305 16.6583 28.206 13.8682 27.6713 11.1761C27.1367 8.48406 25.8159 6.01095 23.8759 4.06939ZM14.0583 25.4169H14.0538C11.988 25.417 9.96008 24.8617 8.1825 23.8091L7.7611 23.5593L3.3945 24.704L4.56014 20.448L4.28546 20.0117C2.92594 17.8454 2.32491 15.2886 2.57684 12.7434C2.82877 10.1982 3.91938 7.80894 5.67722 5.95113C7.43506 4.09332 9.76045 2.87235 12.2878 2.48017C14.8152 2.08799 17.4013 2.54684 19.6395 3.78457C21.8776 5.02231 23.641 6.96875 24.6524 9.3179C25.6638 11.6671 25.8659 14.2857 25.2268 16.7622C24.5877 19.2387 23.1438 21.4326 21.122 22.999C19.1001 24.5655 16.6151 25.4156 14.0575 25.4157L14.0583 25.4169Z" fill="#E0E0E0"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6291 7.98363C10.3723 7.41271 10.1019 7.40123 9.85771 7.39143C9.65779 7.38275 9.42903 7.38331 9.20083 7.38331C9.0271 7.3879 8.8562 7.42837 8.69887 7.5022C8.54154 7.57602 8.40119 7.68159 8.28663 7.81227C7.899 8.17929 7.59209 8.62305 7.38547 9.11526C7.17884 9.60747 7.07704 10.1373 7.08655 10.6711C7.08655 12.3578 8.31519 13.9877 8.48655 14.2164C8.65791 14.4452 10.8581 18.0169 14.3425 19.3908C17.2382 20.5327 17.8276 20.3056 18.4562 20.2485C19.0848 20.1913 20.4843 19.4194 20.7701 18.6189C21.056 17.8183 21.0557 17.1323 20.9701 16.989C20.8844 16.8456 20.6559 16.7605 20.3129 16.5889C19.9699 16.4172 18.2849 15.5879 17.9704 15.4736C17.656 15.3594 17.4275 15.3023 17.199 15.6455C16.9705 15.9888 16.3139 16.7602 16.1137 16.9895C15.9135 17.2189 15.7136 17.2471 15.3709 17.0758C14.3603 16.6729 13.4275 16.0972 12.6143 15.3745C11.8648 14.6818 11.2221 13.8819 10.7072 13.0007C10.5073 12.6579 10.6857 12.472 10.8579 12.3007C11.0119 12.1472 11.2006 11.9005 11.3722 11.7003C11.5129 11.5271 11.6282 11.3346 11.7147 11.1289C11.7603 11.0343 11.7817 10.9299 11.7768 10.825C11.7719 10.7201 11.7409 10.6182 11.6867 10.5283C11.6001 10.3566 10.9337 8.66151 10.6291 7.98363Z" fill="white"></path><path d="M23.7628 4.02445C21.4107 1.66917 18.2825 0.249336 14.9611 0.0294866C11.6397 -0.190363 8.35161 0.804769 5.70953 2.82947C3.06745 4.85417 1.25154 7.77034 0.600156 11.0346C-0.051233 14.299 0.506321 17.6888 2.16894 20.5724L0.222656 27.6808L7.49566 25.7737C9.50727 26.8692 11.7613 27.4432 14.0519 27.4434H14.0577C16.7711 27.4436 19.4235 26.6392 21.6798 25.1321C23.936 23.6249 25.6947 21.4825 26.7335 18.9759C27.7722 16.4693 28.0444 13.711 27.5157 11.0497C26.9869 8.38835 25.6809 5.94358 23.7628 4.02445ZM14.0577 25.1269H14.0547C12.0125 25.1271 10.0078 24.5782 8.25054 23.5377L7.8339 23.2907L3.51686 24.4222L4.66906 20.2143L4.39774 19.7831C3.05387 17.6415 2.4598 15.1141 2.70892 12.598C2.95804 10.082 4.03622 7.72013 5.77398 5.88366C7.51173 4.04719 9.81051 2.84028 12.3089 2.45266C14.8074 2.06505 17.3638 2.5187 19.5763 3.74232C21.7888 4.96593 23.5319 6.89011 24.5317 9.21238C25.5314 11.5346 25.7311 14.1233 25.0993 16.5714C24.4675 19.0195 23.0401 21.1883 21.0414 22.7367C19.0427 24.2851 16.5861 25.1254 14.0577 25.1255V25.1269Z" fill="white"></path></g><defs><clipPath id="clip0_1024_354"><rect width="27.8748" height="28" fill="white" transform="translate(0.0625)"></rect></clipPath></defs></svg>
      <span class="button-text"></span>
    </a>
    </div>
   
	';
}
function get_process(){
  return '
  <div class="work-wrap wow fadeInUp">
  <div class="container">
    <div class="title title_center">
      <h1 style="color:green"> Stressfrei umziehen</h1>
    </div>
    <ul class="fix text-center row">
                                                                <!--Start Single working  Box-->
                                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">
                                    <div class="icon-holder"><img src="images/step01.png"></div>
                                    <div class="text-holder">
                                        <h4>Ruf uns an<br> Termin vereinbaren</h4>
                                     </div>
                                </li>
                                <!--End Single working  Box-->
                                                                <!--Start Single working  Box-->
                                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">

                                  <div class="icon-holder"><img src="images/step02.png"></div>
                                    <div class="text-holder">
                                <h4>Treffen mit<br> Reinigungsexperte </h4>
                                     </div>
                                </li>
                                <!--End Single working  Box-->
                                                                <!--Start Single working  Box-->
                                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">
                                   

<div class="icon-holder"><img src="images/step03.png"></div>
                                    <div class="text-holder">
                                      <h4>Angebot erhalten<br></h4>
                                      </div>


                                </li>
                                <!--End Single working  Box-->
                                                                <!--Start Single working  Box-->
                                <li class="single-working-steps-box wow fadeInUp animated col-lg-3 col-md-6">
<div class="icon-holder"><img src="images/step04.png"></div>
                                    <div class="text-holder">
                                       <h4>Holen Sie sich den besten
                                       <br> Reinigungsservice</h4>
                                       </div>
                                  

                                </li>
                                <!--End Single working Box-->
                                                            </ul>
  </div>
</div>       
      ';
  }
function news_letter(){
  return ' <div class="newsletter-wrap wow fadeInUp">
  <div class="container">
  
      <div class="row">
        <div class="col-lg-5">
          <div class="title">
            <h1><span>Stay in Loop</span> Join our Newsletter</h1>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="news-info">
            <form method="post" action="about.php">
              <div class="input-group">
                <input type="text" class="form-control" name="mail" placeholder="Your Email Address">
                <div class="form_icon"><i class="fas fa-envelope"></i></div>
              </div>
              <input type="submit" class="sigup" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>'
 
;
}
function send_mail($subject, $body, $to)
{
    $headers = 'From: '.MAIL_FROM_ADDRESS. "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  mail($to, $subject, $body, $headers);
}
function contact_alert_msg(){
  return '
  <section class="ls section_padding_50">
  <div class="container">
  <div class="row">
      <div class="col-sm-12">

          <div class="alert alert-success" role="alert">
              <button type="button" class="close" data-dismiss="alert">
                  <span aria-hidden="true">×</span>
                  <span class="sr-only">Close</span>
              </button>
              <strong>Danke für Ihr Vertrauen! </strong> <br>Wir werden Sie so bald wie möglich kontaktieren.
          </div>
          </div>
          </div>
          </section>';
      }
function news_letter_msg(){
        return '
        <section class="ls section_padding_50">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
      
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Danke, dass Sie sich für unseren Newsletter angemeldet haben. </strong> <br>Bis jetzt werden Sie unsere Angebote erhalten.
                </div>
                </div>
                </div>
                </section>';
            }


        
?>
 