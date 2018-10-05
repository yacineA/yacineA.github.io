<?php
require_once '/unirest-php/src/Unirest.php';
$headers = array('Accept' => 'application/json');

$response = Unirest\Request::get("https://skyscanner-skyscanner-flight-search-v1.p.mashape.com/apiservices/browsedates/v1.0/FR/EUR/fr-FR/PARI-sky/ESU-sky/2018-10-29/",
  array(
    "X-Mashape-Key" => "f0m1uPTl7XmshgNpLhxCVZWOo9mAp1LUah5jsnREfTrmHMcaK8",
    "X-Mashape-Host" => "skyscanner-skyscanner-flight-search-v1.p.mashape.com"
  )
);

$myJSON = json_encode($response->body);

echo  $myJSON; 

?>