<?php
$access_token = 'foWAc3kVjS4g/ukG6bEVCDxQgPFHOzmHBYTAQ00lLtWzKrTs/oGyEF/1OXHXVwacgQSFv+ZebO5O+ZGDkooRG/ysZS2CrINJzubQD++1/6lE1GQD2a7nFU3X/gJ4M+ZwLqKMn1/ml9dT1WLpDko3egdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;