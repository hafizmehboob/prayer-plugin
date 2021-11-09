<?php

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://countriesnow.space/api/v0.1/countries/cities',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
CURLOPT_POSTFIELDS =>'{
"country": "pakistan"
}',
));

$response = curl_exec($curl);
curl_close($curl);
$response = json_decode($response);
$getCititesList = $response->data;
    foreach ($getCititesList as $cities){
        ?>
        <option value='<?php echo $cities; ?>'><?php echo $cities; ?></option>                                                 
        <?php
    }
    ?>
 