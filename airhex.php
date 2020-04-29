<?php

function airhex($iata,$type,$width,$height, $apikey) { // Prevents SQL Injection
   //Generates md5 api key for a request
   $md5 = md5($iata.'_'.$width.'_'.$height.'_'.$type.'_'.$apikey);
   $results = 'https://content.airhex.com/content/logos/airlines_'.$iata.'_'.$width.'_'.$height.'_'.$type.'.png?md5apikey='.$md5;
   return $results;
}

//Set airline IATA code for a query
$iata = 'EK';

//Type of a logo: r - for rectangular, s - for square and t - for tail logo
$type = 'r';

//Set width in pixels
$width = '701';

//Set height in pixels
$height = '200';

//Your API key
$apikey = '12345';

echo  '<img src="'.airhex($iata,$type,$width,$height,$apikey).'"/>';

?>
