<?php
$coin_type = BTC //You can enter any short label like BTC, LTC etc. 
  curl_setopt_array($curl, array 
  (
    CURLOPT_URL => 'https://data-api.binance.vision/api/v3/avgPrice?symbol='.$coin_type,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  )
);

  $response = curl_exec($curl);

  curl_close($curl);
  $result = json_decode($response,true);
  //$token_value = $result["price"]; //Price of one unit of the coin/token
?>
