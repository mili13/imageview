<?php
/**
 * 
 */
include("config.php");

 


// Create the data array which is to be used in the template file.
$data['title'] = "om";
$data['meta_description'] = "imageview";
$data['main'] = <<<EOD


<div class="text">
<h1>Om</h1>
</div>
<div class="bredd">
<p>ImageView är en plugin som visar bilder på två olika sätt.</p>
<p>En slideshow som automatiskt startar när sidan är laddad ger liv till din hemsida. Du kan även genom att
klicka på bilderna byta bild, men tanken är att du bestämmer hur långa intervaller bilderna ska visas
och så sköter pluginen det själv. Detta är en snygg funktion att ha exempelvis som en header, som ger
en hint om vad sajten behandlar, och är ett hjälpmedel för att förmedla den känsla du önskar.</p>

<p>ImageView innahåller även en så kallad lightbox där du kan lägga upp hur många bilder du vill
och klickar du sedan på en bild får du se en förstoring. Detta är en funktion som fördelaktligen 
används om du har en sajt som visar olika produkter eller bilder där du dels vill ha en god översikt
över innehållet, men även vill kunna studera varje bild eller objekt mer i detalj</p>

<p>Du är inte bunden till att använda dig av båda funktionerna om du använder pluginen. Du får med båda
i paketet, men avgör sedan själv vad du vill ska synas på sidan.</p>

</div>
  


EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
