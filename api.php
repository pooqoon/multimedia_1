<?php
$ch = curl_init();
$url = 'http://61.43.246.153/openapi-data/service/busanBIMS2/busInfo'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=서비스키값'; /*Service Key*/
$queryParams .= '&' . urlencode('lineno') . '=' . urlencode('1002'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>