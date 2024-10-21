<?php
function first_section(){
    return ' <div class="innerHeading">
  <div class="container">
    <h1>Register</h1>
  </div>
</div>
   
	';
}
function form_section(){
    return '<div class="innercontent">
    <div class="container">
  
  <div class="login-wrap wow fadeInUp">
        <div class="contact-info login_box">
          <div class="contact-form loginWrp registerWrp">
            <form method="post" action="register.php" >
             
              <h3>Personal Information</h3>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="First Name *" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name *" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder=" Address *" required>
                  </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" name="plz" class="form-control" placeholder="PLZ *" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" name="ort" class="form-control" placeholder="Ort *" required>
                </div>
              </div>
              <div class="col-lg-12">
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-Mail *" required>
              </div>
            </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="" required>
                  </div>
                </div>
                
              </div>
              <h3><br>Benötige Informationen</h3>
              <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
               <select class="nice-select wide select_option" name="service" required >
                  <option value="" >Dienleitung *</option>
                  <option value="Häusern Reinigung">Häusern Reinigung</option>
                  <option value="Wohnung Reinigung">Wohnung Reinigung</option>
                  <option value="Treppen Hausreinigung">Treppen Hausreinigung</option>
                  <option value="Buro Reinigung">Buro Reinigung</option>
                  <option value="Fenster Reinigung">Fenster Reinigung</option>
                  <option value="Reinigung bei Umzug">Reinigung bei Umzug</option>
                  <option value="Umzug">Umzug</option>
                  <option value="Aufzug">Aufzug</option>
                </select>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="form-group">
              <select class="nice-select wide select_option" name="gebaude" required>
              <option value="" >Gebäude *</option>
              <option value="Häusern">Häusern</option>
              <option value="Wohnung">Wohnung</option>
              <option value="Treppen Haus">Treppen Haus</option>
              <option value="Büro">Büro</option>
            </select>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <select class="nice-select wide select_option" name="zimmer" id="Zimmer" required >
            <option value="">Anzahl Zimmer</option>
            <option value="1.5">1.5</option>
            <option value="2">2</option>
            <option value="2.5">2.5</option>
            <option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="4">4</option>
            <option value="4.5">4.5</option>
            <option value="5">5</option>
            <option value="5.5">5.5</option>
          </select>
          </div>
          </div>
          
          <div class="col-lg-6">
          <div class="form-group">
          <select class="nice-select wide select_option" name="stock" id="stock" required>
          <option value="">Stock *</option>
          <option value="EG">EG</option>
          <option value="1. Stock">1. Stock</option>
          <option value="2. Stock">2. Stock</option>
          <option value="3. Stock">3. Stock</option>
          <option value="4. Stock">4. Stock</option>
          <option value="5. Stock">5. Stock</option>
          <option value="6. Stock">6. Stock</option>
          <option value="6+ mehr">Mehr 6</option>
        </select>
        </div>
        </div>
            <div class="col-lg-6">
            <div class="form-group">
              <input type="text" name="meter" class="form-control" placeholder="Quadratmeter *" required>
            </div>
          </div>
          <div class="col-lg-6">
          <div class="form-group">

          <select class="nice-select wide select_option" name="lift"  required>
          <option value="">Haben Sie Lift *</option>
          <option value="Ja">Ja</option>
          <option value="Nein">Nein</option>

        </select>
        </div>
        </div>
                
            </div>
             
            
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Senden <span></span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  
  
  
    </div>
  </div>
   
	';
}
?>

