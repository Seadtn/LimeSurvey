<?php
$apiUrl = 'http://localhost/limesurvey/index.php/admin/remotecontrol';

$username = 'admin';
$password = 'admin';



$requestData = array(
    "method" => "get_session_key",
    "params" => array(
        "username" => $username,
        "password" => $password
    ),
    "id" => 1
);

$requestDataString = json_encode($requestData);


$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestDataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
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
    $sessionKey = $responseData['result'];
    print_r($sessionKey);
} else {
    echo "Error retrieving session key.";
}
?>