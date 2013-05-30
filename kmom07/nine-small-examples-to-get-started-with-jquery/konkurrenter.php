<?php
/**
 * 
 */
include("config.php");

// Get small bits and pieces from various views.
$miliImage   = file_get_contents(__DIR__."/incl/mili_as_small_image.html");
$miliByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "konkurrenter";
$data['meta_description'] = "imageview";
$data['main'] = <<<EOD

<div class="text">
<h1>Konkurrenter</h1>
</div>
<div class="bredd">
<p>Det finns flera konkurrenter på marknaden och de främst är nog 
<a href="http://lokeshdhakar.com/projects/lightbox2/">Lightbox2</a> och 
<a href="http://fancybox.net/">Fancybox</a>. 
Det har en mer utvecklad funktionalitet än vad min plugin har, och mycket av denna 
funktionalitet skulle jag vilja utveckla min plugin med i framtiden. Både Lightbox2 och Fancybox tillåter optionella bildbeskrivningar vid förstoring av enskilda bilder
och detta tycker jag kan vara att föredra
i vissa fall. Jag skulle även vilja kunna hoppa mellan bilderna när de är förstorade och inte behöva 
klicka ner dem varje gång, precis som du kan med Lightbox2s "imagesset". Fancybox delar även med sig av
mycket tips och trics och utförliga instruktioner.</p>
<p>Fördelen med min plugin är att den är extremt enkel om
man som nybörjare skulle vilja använda dessa funktioner på sin sida. I många fall kan det
krävas mycket förkunkaper, men det enda du behöver göra här är att ladda ner jQuery och min
main.js, och sedan spara ner de bilder du önskar i img-mappen och byta namn på bilderna i 
länkningen.  </p>
</div>
  
{$miliByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
