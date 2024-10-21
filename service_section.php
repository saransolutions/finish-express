<?php
function first_section(){
              return '  
              <div class="innerHeading">
               <div class="container">
                 <h1>Diensleitung</h1>
               </div>
               </div>
              ';
          }
function side_section_1(){
            return '  <div class="single-widgets widget_category fadeInUp wow">
            <h4>Kategorien</h4>
            <ul>
              <li><a href="#haus">Häusern Reinigung </a></li>
              <li><a href="#wohnug">Wohnung Reinigung</a></li>
              <li><a href="#treppen">Treppen Hausreinigung</a> </li>
              <li><a href="#fenster">Fenster Reinigung </a></li>
              <li><a href="#buro">Büro Reinigung </a></li>
              <li><a href="#end">Ende Reinigung </a></li>
              <li><a href="#umzug">Umzug </a></li>
              <li><a href="#aufzug">Aufzügen </a></li>
            </ul>
          </div> 
            

            ';
        }
function side_section_2(){
            return '  
            <form method="post" action="service.php">
            <div class="sidebar_form card card-body  wow fadeInUp">
              <h4>Haben Sie Fragen?</h4>
      
              <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Name *" required>
              </div>
              <div class="input-group">
              <input type="text" name="lname" class="form-control" placeholder="Vorame *"required>
            </div>
              <div class="input-group">
                <input type="text" name="email" class="form-control" placeholder="Email *" required>
              </div>
              <div class="input-group">
                <input type="text" name="phone" class="form-control" placeholder="Tel-Nummer">
              </div>
              <div class="input-group">
              <input type="text" name="subject" class="form-control" placeholder="Betreff *" required>
            </div>
             <div class="input-group">
               <textarea class="form-control" name="message" placeholder="Nachricht *" required></textarea>
              </div>
  
  
              <div class="input-group">
                <input type="submit" class="submit" value="Senden">
              </div>
            </div>
          </form>

            ';
        }
function side_section_3(){
            return ' <div class="single-widgets widget_category mt30 fadeInUp wow">
            <h4>neues Projekt</h4>
            <ul class="property_sec">
              <li>
                <div class="rec_proprty">
                  <div class="servicesImg"><img src="images/property_small01.jpg"></div>
                  <div class="property_info">
                    <h4><a href="#">Orpund Strasse</a></h4>
                    <p>Treppen haus reinigung</p>
                    <div class="priceWrp">CHF 100.00</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="rec_proprty">
                  <div class="servicesImg"><img src="images/property_small02.jpg"></div>
                  <div class="property_info">
                    <h4><a href="#">Orpund Strasse</a></h4>
                    <p>Fenster Reinigung</p>
                    <div class="priceWrp">CHF 100.00</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          

            ';
        }
 function sort_list(){
            return '  
            
            <ul class="nav sortWrp  wow fadeInUp" role="tablist">
              <li class="list-inline-item mr-auto"> <span class="title-text">Unser Diensleitung</span>
                
              </li>
              <li class="nav-item"> <a class="nav-link active" href="service.php"> <span class="fa fa-th-large"></span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="service_list.php"> <span class="fa fa-th-list"></span> </a> </li>
            </ul>
            ';
        }
function main_content(){
            return ' <!--Row Start-->
            <ul class="row">
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/haus.jpeg"></div>
             
              <h3 id="haus"><a href="#">Häusern Reinigung </a></h3>
            <p>Wir bieten Ihnen einen schnellen und zuverlässigen Hausreinigungs-Service. Egal, wie viele Zimmer es gibt.
           <br>100% Abnahmegarantie.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/wohnung.jpeg"></div>
           
              <h3 id="wohnung"><a href="#">Wohnung Reinigung</a></h3>
            <p>Wenn Sie eine Wohnung aufräumen und reinigen wollen, genügt ein Anruf bei FINISHEXPRESS. Wir sind für Sie da.
            <br>100% Abnahmegarantie.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/treppen.jpeg"></div>
            
              <h3 id="treppen"><a href="#">Treppenhaus Reinigung</a></h3>
            <p>wir haben eine gute Erfahrung in den Treppenreinigung. Unsere Reinigungsexperten, machen Ihr envoirment sauber und gesund.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/buro.jpeg"></div>
              <div class="service-price"><span>CHF 35-75</span></div>
              <h3 id="buro"><a href="#">Buro Reinigung </a></h3>
            <p>Buroreinigung CHF 35-75 pro Stunde<br>
            Professionelle Praxis CHF 45-85 pro Stude<br>
            Gastronomiereinigung CHF 45-85 pro Stunde</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/buro.jpeg"></div>
             
              <h3 id="end"><a href="#">End Reinigung </a></h3>
            <p>FinishExpress bietet eine Endreinigung an. <br>Unser Reinigungsexperte reinigt Ihre Wohnung 100% sauber und wir geben 100% Garantie. </p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/fenster.jpeg"></div>
              <div class="service-price"><span>CHF 6,50-14,50</span></div>
              <h3 id="fenster"><a href="#">Fenster Reinigung</a></h3>
            <p>Fensterreinigung Wohnung, Haus und Buro 6,50-14,50 pro Qudaratmeter<br>
            Schaufensterreinigung CHF2,50-6,50 pro Qudaratmeter<br>
            Lamellenreinigung CHF 7-14,50 pro Qudaratmeter.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/umzug.jpeg"></div>
          
              <h3 id="umzug"><a href="#">Umzug</a></h3>
            <p>Wir haben eine gute Erfahrung in Endreinigung und Umzug zu. keine Sorgen über Ihren Umzug, Wir haben einen Umzugsservice mit einem besten Preis.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            <!--col-lg-4 Start-->
            <li class="col-lg-6 col-md-6">
            <div class="services_box wow fadeInUp">
              <div class="servicesImg"><img alt="" src="images/service/aufzug.jpeg"></div>
              
              <h3 id="aufzug"><a href="#">Entsorgung</a></h3>
            <p>Ich will deine Sachen zerstören. Keine Sorge! Rufen Sie einfach an und wir kümmern uns um Ihre Arbeiten mit besten und günstigen Preis.</p>
            </div>
            </li>
            <!--col-lg-4 End--> 
            </ul>
            <!--Row End-->
            
           
            ';
        }

 
?> 
