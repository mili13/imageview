<?php
/**
 * 
 */
include("config.php");

// Get small bits and pieces from various views.


// Create the data array which is to be used in the template file.
$data['title'] = "install";
$data['meta_description'] = "imageview";
$data['main'] = <<<EOD


<div class="text">

<h1>Installera</h1>

</div>
<div class="bredd">

<p class="kursiv">Du kan enkelt ladda ner och använda dig av ImageView genom följande steg:</p>
</div>
<div>
<div><h3>1. Ladda ner senaste versionen av jQuary och lägg i samma mapp som ditt projekt. Det kan du göra på följande länk:</h3>
<p><a href="http://jquery.com/download/">Ladda ner jQuery</a></p>
</div>

<div><h3>2. Ladda ner min js-fil och lägg i samma mapp som ditt projekt:</h3>
<p><a href="main.js">ImageView</a>
</div>
<div><h3>3. Lägg följande taggar i ditt projekt:</h3>
<p><pre>< script src="main.js"></script></pre></p>
<p><pre>< script src="jquery.js"></script></pre></p>
</div>
<div><h3>4. Omslutna av en wrapper lägger du sedan in länkarna till dina bilder.</h3>
<p class="kursiv">För din slideshow:</p>
<pre> < div class='slideshow'>
  < img src1='img/1.jpg' crop='0,200,0,300'/> 
  < img src1='img/4.jpg' crop='0,200,0,0'/>
  < img src1='img/5.jpg' crop='0,200,0,220'/>
< /div > < !-- end of slideshow --></pre>

<p class="kursiv">Exepel för bilderna med förstoring:</p>
<pre>< img class='example lightbox' src='img/exempel.jpg' alt='' width='200px' /></pre>

</div>
</div>
<br />


</div>

</div>




EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
