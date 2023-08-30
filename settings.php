<?php 
$apiUrl = 'http://localhost/limesurvey/index.php/admin/remotecontrol';
$sSessionKey = 'WjDqqAhY41YPxcHPaS5W~pkPERVYIIM3';
$iSurveyID = 713391;  
$aSurveySettings = null;

$params = array(
    'method' => 'get_survey_properties',
    'params' => array(
        'sSessionKey' => $sSessionKey,
        'iSurveyID' => $iSurveyID,
        'aSurveySettings' => $aSurveySettings,
    ),
    'id' => 1, 
);

$request = json_encode($params);


$curl = curl_init($apiUrl);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($request)
));


$response = curl_exec($curl);
curl_close($curl);

$responseArray = json_decode($response, true);

if (isset($responseArray['result'])) {
    $surveyProperties = $responseArray['result'];
    echo "Survey Properties:\n";
    print_r($surveyProperties);
} else {
    echo "Failed to retrieve survey properties.\n";
}

?>