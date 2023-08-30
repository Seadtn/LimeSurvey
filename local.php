<?php

$apiUrl = 'http://localhost/limesurvey/index.php/admin/remotecontrol';
$sSessionKey='WjDqqAhY41YPxcHPaS5W~pkPERVYIIM3';
$iSurveyID =772234;
$sUsername = "admin";
$requestData = array(
    "method" => "list_surveys",
    "params" => array(
        "sSessionKey" => $sSessionKey,
        "sUsername" => $sUsername
    ),
    "id" => 1
);

$requestDataString = json_encode($requestData);


$ch = curl_init($apiUrl);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $requestDataString);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json"
));


$response = curl_exec($ch);


if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
    exit();
}

curl_close($ch);

$responseData = json_decode($response, true);


if (isset($responseData['result'])) {
    $surveys = $responseData['result'];
    echo "Surveys: ";
    //print_r($surveys[0]['surveyls_title']);
    print_r($surveys);
} else {
    echo "Error retrieving survey list.";
}
?>