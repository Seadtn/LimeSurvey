<?php
$apiUrl = "http://localhost/limesurvey/index.php/admin/remotecontrol";
$apiKey = "3XciF3zHaulE8iyWrfPVd35po8X9m2lp";
$surveyId = 713391; 
$statName = "all"; 

$requestData = array(
    'method' => 'get_summary',
    'params' => array(
        'sSessionKey' => $apiKey,
        'iSurveyID' => $surveyId,
        'sStatName' => $statName,
    ),
    'id' => 1,
);

$requestDataString = json_encode($requestData);
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestDataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestDataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
    exit();
}

curl_close($ch);

// Decode JSON response
$responseData = json_decode($response, true);
print_r($responseData);

?>