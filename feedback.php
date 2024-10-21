<?php
require_once 'funcs/cons.php';
require_once 'funcs/db/db.php';
require_once 'feedback_section.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
	$image=$_POST['image'];
	$rate=$_POST['rate'];
	$comment=$_POST['comment'];
			$sql = "INSERT INTO ch375071_admin.feedback  (id, name, rate, comment, date) 
			VALUES (null,'".$name."','".$rate."','".$comment."',CURRENT_TIMESTAMP)";
			
			executeSQL($sql);
};

function get_rows(){
    $sql= "SELECT * FROM ch375071_admin.feedback ORDER BY id DESC;" ;
    $rows =getFetchArray($sql);
    $result='';
    foreach ($rows as $row){
        $rating=$row['rate'];
    $value = "";
    if($rating==1){
        $value = "<ul class='client_rating'>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
      </ul></i>";
    }
    elseif($rating==2){
        $value = "<ul class='client_rating'>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
      </ul>";
    }
    elseif($rating==3){
        $value = "<ul class='client_rating'>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
      </ul>";
    }
    elseif($rating==4){
        $value = "
        <ul class='client_rating'>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
        <li><i class='fa fa-star' aria-hidden='true'></i></li>
      </ul>";
    }
    elseif($rating==5){
      $value = "<ul class='client_rating'>
      <li><i class='fa fa-star' aria-hidden='true'></i></li>
      <li><i class='fa fa-star' aria-hidden='true'></i></li>
      <li><i class='fa fa-star' aria-hidden='true'></i></li>
      <li><i class='fa fa-star' aria-hidden='true'></i></li>
      <li><i class='fa fa-star' aria-hidden='true'></i></li>
    </ul>";
  }
        $result .= '<li>
        <div class="services_box wow fadeInUp">
            <div class="row">
                
                <div class="col-md-12">
                    <h3><a href="#">'.$row['name'].'</a></h3>
                    <div class="post-meta"> <span>'.$value.'</span> <span>'.$row['date'].'</span>  </div>
                    <p>'.$row['comment'].' </p>
                </div>
            </div>
        </div>
    </li>';
    }
    return $result;
}
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
//Inner Heading Start
echo after_header();
//Inner Heading End
?>

    <!--Inner Content Start-->
    <div class="innercontent">
        <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Feedback Hinzufügen<br></button><hr>
            <div class="row porperty_listWrp">
                <div class="col-lg-12">
                    <ul class="blog_post">
                        <!-- start -->
                        <?php echo get_rows(); ?>
                        <!-- end -->
                    </ul>
                  

            </div>
        </div>
    </div>
 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
        <form method="post" action="feedback.php" >
         <h5>Feedback Hinzufügen</h5> <br>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder=" Name *" required>
            </div>
          </div>
         
          <div class="col-lg-12">
        <div class="form-group">
        <label >Geben Sie Ihre Bewertung</label>
        </div>
        </div>
        <div class="col-lg-12">
        <div class="form-group">
            <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div>
            </div>
          </div>
          <div class="col-lg-12">
          <div class="form-group">
          <br><textarea id="comment" aria-required="true" rows="8" cols="45" name="comment" class="form-control" name="comment" placeholder="Ihr Kommentar"></textarea>
          </div>
        </div>
        <div class="col-lg-12 contact-wrap">
                  <div class="contact-btn">
                    <button type="submit" class="sub">Senden <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
          
        </div>
  
      </form>
        </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Schliessen</button>
            </div>
    </div>
      
    </div>
  </div>
  
  </div>
  <!-- end-Modal -->   

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