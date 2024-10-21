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
?>
 <ul class="property_listWp">
          <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/haus.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="haus"><a href="service_details.html">Häusern Rinigungs</a></h3>
<>Wir bieten Ihnen einen schnellen und zuverlässigen Hausreinigungs-Service. Egal, wie viele Zimmer es gibt.
           <br>100% Abnahmegarantie.</p>
               </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 

           <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/wohnung.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="wohnung"><a href="service_details.html">Wohnung Reinigung</a></h3>
                  <p>Wenn Sie eine Wohnung aufräumen und reinigen wollen, genügt ein Anruf bei FINISHEXPRESS. Wir sind für Sie da.
            <br>100% Abnahmegarantie.</p>
              

                </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 

           <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/treppen.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="treppen"><a href="#">Treppenhaus Reinigung</a></h3>
                  <p>wir haben eine gute Erfahrung in den Treppenreinigung. Unsere Reinigungsexperten, machen Ihr envoirment sauber und gesund.</p>
            </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 

           <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/buro.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="buro"><a href="#">Büro Reinigung</a></h3>
                  <div class="service-price service_dollar"><span>CHF 35-75</span></div>
                  <p>Buroreinigung CHF 35-75 pro Stunde<br>
            Professionelle Praxis CHF 45-85 pro Stude<br>
            Gastronomiereinigung CHF 45-85 pro Stunde</p> 
                </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 
             <!--col-lg-4 Start-->
             <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/buro.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="end"><a href="#">End Reinigung</a></h3>
                  <p>wir haben Endreinigungsdienste für die <br>Wohnung von CHF 800 bis 1850. <br> Haus von CHF 1200 - 2950.</p>
             </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 

           <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/umzug.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="umzug"><a href="#">Fensterreinigung</a></h3>
                  <div class="service-price service_dollar"><span>CHF 6,50-14,50</span></div>
                  <p>Fensterreinigung Wohnung, Haus und Buro 6,50-14,50 pro Qudaratmeter<br>
            Schaufensterreinigung CHF2,50-6,50 pro Qudaratmeter<br>
            Lamellenreinigung CHF 7-14,50 pro Qudaratmeter.</p>
                </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 

           <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/aufzug.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="umfzug"><a href="#">umzug</a></h3>
                  <p>Wir haben eine gute Erfahrung in Endreinigung und Umzug zu. keine Sorgen über Ihren Umzug, Wir haben einen Umzugsservice mit einem besten Preis.</p>
            
                </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End--> 
          <!--col-lg-4 Start-->
          <li>
            <div class="services_box wow fadeInUp">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                  <div class="servicesImg"><img alt="" src="images/service/aufzug.jpeg"></div>
                </div>
                <div class="col-lg-7 col-md-7">
                  <h3 id="auffzug"><a href="#">Entsorgen</a></h3>
                  <p>Ich will deine Sachen entsorgen. Keine Sorge! Rufen Sie einfach an und wir kümmern uns um Ihre Arbeiten mit besten und günstigen Preis.</p>
            </div>
              </div>
            </div>
          </li>
          <!--col-lg-4 End-->  


          
        </ul>
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