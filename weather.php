<?php
const APIkey = '33dad1724cb549bd92d201617232203';
$city = $_REQUEST['city'];
//$city = 'Moscow';
//http://api.weatherapi.com/v1/current.json?key=33dad1724cb549bd92d201617232203&q=Moscow&aqi=yes

$getQuery = array(
    "key" 	=> APIkey,
    "q"  	=> $city,
    "aqi" => "yes",
);

$ch = curl_init("http://api.weatherapi.com/v1/current.json?" . http_build_query($getQuery));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);

$resultQuery = curl_exec($ch);
curl_close($ch);

$weather = json_decode($resultQuery, $associative = true);
$celsius = $weather['current']['temp_c'];
$city = $weather['location']['name'];
header("Location: site.php?city=$city&celsius=$celsius");
exit();

