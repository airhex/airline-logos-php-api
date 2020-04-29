# AirHex airline logos PHP API Wrapper
This is the official PHP wrapper/function for the [AirHex airline logos](https://airhex.com/products/airline-logos/) API. The purpose of these wrapper is to provide a simple interface to the AirHex logos API.

## Example Usage
### Required fields:
'iata', 'width', 'height', 'type', 'md5apikey' are required to complete the request

Fill in your API key in order to get logos without watermarks. [Request API key if you don't have one yet](https://airhex.com/pricing/).
### Request example to get EK (IATA for Emirates Airlines) logo:
```php
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
```
This example will output Emirates logo.

<img src="https://content.airhex.com/content/logos/airlines_EK_701_200_r.png?md5apikey=f43e061b8cdae6fb3c1c4360a59b7b1b" width="351" height="100">



