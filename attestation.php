<?php 
$iSurveyID=$_GET["id"];
$db=mysqli_connect("localhost","root","","limesurvey");
$req=mysqli_query($db,"select * from lime_sursurvey_".$iSurveyID."");
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
    $sSessionKey = $responseData['result'];
} else {
    echo "Error retrieving session key.";
}
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
    //print_r($surveys[0]['surveyls_title']);
} else {
    echo "Error retrieving survey list.";
}

foreach ($surveys as $key => $value) {
      if($surveys[$key]['sid']==$iSurveyID){
            $title=$surveys[$key]['surveyls_title'];
      } 
  }
$array = explode(" ", $title);
$dates=explode("-",$array[1]);
$date1=$dates[0];
$date2=$dates[1];
?>
<style>
*{
      font-family: 'Montserrat',sans-serif;
}
@page { size: auto;  margin: 0mm; }
      @media print {
  div{
      -webkit-print-color-adjust: exact ; 
      background-image: url(assets/images/certif.jpg) ;
            height: 100vh ;
       background-repeat: no-repeat ;
       background-size: cover;
       background-position: center ;
    }
}
div{
      -webkit-print-color-adjust: exact ; 
      background-image: url(assets/images/certif.jpg) ;
      height: 100vh ;
       background-repeat: no-repeat ;
       background-size: cover;
       background-position: center ;
    }     
</style>
<body onload="window.print();document.title='<?php echo $array[0].'_'.$date1.'_'.$date2;?>'" style="width: 100%; margin:0;padding: 0; height: 100vh;color:#014592">
<?PHP
           
      while ($data =mysqli_fetch_array($req)) {
            echo "<div>  <span style='font-size:10px;opacity: 0;'><h4><b>I</b></h4></span>
            <span style='font-size:10px;'><h4 style='margin-left: 400px;margin-top: 40px;' ><b>International Sports Marketing and professionalismCompany</b>
            <br>FİNALİST SPOR TURİZM VE DANIŞMANLIK </h4></span>
            <span style='font-size:50px'><p style='margin-top: 60px;margin-left: 400px'>CERTIFICATE <br> OF PARTICIPATION</p></span>
      
            <span style='font-size:20px;margin-left: 405px;margin-top: -500px;'>is hereby granted to </span>
            <span><h4 style='margin-top: 20px; margin-left: 400px; font-size: 44px;text-transform: uppercase;'>".$data[8]."</h4></span>
            <span style='font-size:18px;margin-left: 400px;'>For his participation in the Football camp in Turkey and the Istanbul</span>
            <span style='font-size:18px;margin-left: 400px;'>Football Championship Which was held between $date1 to $date2 </span>
            <span style='font-size:20px'><h4 style='margin-left: 400px;'> Excellence degree <br> With our sincere wishes for continued progress and success</h4></span>
            </div>";
            }
           ?>
</body>