<?php $title='imageview'; include(__DIR__ . '/../mall/header.php'); 

include("config.php"); 

$data['title'] = "index";
$data['meta_description'] = "imageview";
$data['main'] = <<<EOD

<div class="text">
<h1>Välkomen till ImageView</h1>



<div class='slideshow'>
  <img src1='img/1.jpg' crop='0,200,0,300'/> 
  <img src1='img/4.jpg' crop='0,200,0,0'/>
  <img src1='img/5.jpg' crop='0,200,0,220'/>

</div> <!-- end of slideshow -->
</div

<div>

<img class='lightbox' src='img/1.jpg' alt=''height="150px" width='200px' />
<img class='lightbox' src='img/4.jpg' alt='' height="150px" width='200px' />
<img class='lightbox' src='img/5.jpg' alt='' height="150px" width='200px' />

</div>




</div>







EOD;
// Hand over to the template engine.
include(__DIR__."/theme/template.php");
$path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>
