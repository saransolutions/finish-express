<?php
function after_header(){
    return ' <div class="innerHeading">
    <div class="container">
      <h1>Feedback</h1>
    </div>
  </div>
   
    ';
}

function feedback_display($result) {
  $part2 = '';
foreach ($result as $row)
{
    
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

    $part2 .=  '<ul class="row">
<li class="col-lg-6">
  <div class="testService wow fadeInUp">
    <div class="testi-info">
   <div class="client-image">'.$row['image'].'</div>
   
      <div class="name">'.$row['name'].'  </div>
      <p>'.$row['comment'].'</p>
      <ul class="client_rating">
      <div class="client-image">'.$value.'</div>
      </ul>
    </div>
  </div>
</li>
</ul>';
  }
  
  $part1 = '<div class="innercontent">
  <div class="container">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Feedback Hinzufügen<br></button><hr>
   <div class="testimonialswrp">
      <!-- feedback -->
      '.$part2.'
      <!-- end feedback rows -->
    </div>
  </div>
</div>';

   

$part3 =  '
  
  ';
  return $part1 . $part3;
}

?>