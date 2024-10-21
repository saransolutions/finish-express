<?php
function after_header(){
    return ' <div class="innerHeading">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>
   
    ';
}
function map(){
  return '  <div class=" wow fadeInUp">
  <div class="container">
  
      <div class="row">
      <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2713.733481720065!2d7.27390857528947!3d47.14348731984454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e1f0053721d3b%3A0xd3d9ac950f1cf980!2sFinishExpress!5e0!3m2!1sen!2sch!4v1719180686025!5m2!1sen!2sch" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     
      </div>
    </div>
  </div>
  ';
}
function map1(){
    return ' <!--map Start-->

    <div class="container">
    <br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2713.733481720186!2d7.273908576893601!3d47.143487319842166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e1ed41566c52b%3A0x7709291c90bf8028!2sOrpundstrasse%2031%2C%202504%20Biel!5e0!3m2!1sde!2sch!4v1716385089278!5m2!1sde!2sch" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  
  <!--Map End-->  
   
    ';
}
function contact_form(){
    return '<div class="innercontent wow fadeInUp">
    <div class="container">
      <div class="getTouch">Kontakt Uns</div>
      <div class="row formcol">
        <div class="col-lg-8">
          <form class="form mb-md50" id="contact-form" method="post" action="contact.php" >
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group has-error has-danger">
                    <input id="form_name" class="form-control" type="text" name="name" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_email" class="form-control" type="email" name="email" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_phone" class="form-control" type="text" name="phone" placeholder="Tel-Nummer" >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_subject" class="form-control" type="text" name="subject" placeholder="Betreff *" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea id="form_message" class="form-control" name="message" placeholder="Nachricht *" rows="4" required></textarea>
                  </div>
                </div>
                <div class="col-lg-12 contact-wrap">
                  <div class="contact-btn">
                    <button type="submit" class="sub">Senden <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="map">
            facebook
          </div>
        </div>
      </div>
    </div>
  </div>
    ';
}
?>