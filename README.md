# AirHex airline logos PHP API Wrapper
This is the official PHP wrapper for the AirHex logos API. The purpose of these files is to provide a simple interface to the AirHex logos API. You are not required to use these files (in order to use the API), but it's recommended.

## Example Usage
### Request example to get EK (IATA for Emirates Airlines) logo:
```php
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://airhex.com/api/v2/airlines?apikey=YOUR_API_KEY&iata=AIRLINE_IATA",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 00f22643-c97f-8ac9-4f12-715e6309143f"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

print_r($response);

?>
```
