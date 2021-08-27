<?php
require_once 'MeritHub.Keys.php';
function pre($ar){
  echo '<pre>';
  print_r($ar);
  echo '</pre>';
}
function debug(){

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

}
function base64url_encode($str) {
    return rtrim(strtr(base64_encode($str), '+/', '-_'), '=');
}
//  get JWT token
function generate_jwt($ClientId, $ClientSecret) {

 // global $ClientId;
  //global $ClientSecret;
  $secret= $ClientSecret;
  $payload = array('aud'=>'https://s1.serviceaccountsapi.merithub.net/v1/$ClientId/api/token', 'iss'=>'CLIENT_ID', 'expiry'=> 3600);
  $headers = array('alg'=>'HS256','typ'=>'JWT');
  $headers_encoded = base64url_encode(json_encode($headers));

  $payload_encoded = base64url_encode(json_encode($payload));

  $signature = hash_hmac('SHA256', "$headers_encoded.$payload_encoded", $secret, true);
  $signature_encoded = base64url_encode($signature);

  $jwt = "$headers_encoded.$payload_encoded.$signature_encoded";

  return $jwt;
}
 
 // get token 
function getToken($ClientId, $ClientSecret){

  $jwt = generate_jwt($ClientId, $ClientSecret);

   // global $ClientId;
  $curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.serviceaccounts.merithub.net/v1/$ClientId/api/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => "assertion=Bearer $jwt&grant_type=urn%3Aietf%3Aparams%3Aoauth%3Agrant-type%3Ajwt-bearer",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res= json_decode($response);
return $res->access_token;
}

function createUser($UserData,$token,$ClientId){

//global $ClientId;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.serviceaccounts.merithub.net/v1/$ClientId/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $UserData,
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token",
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res= json_decode($response,true);

return $res;
}



function CreateClass($token,$ClassName,$SessionTime){

global $ClientId;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.classes.merithub.net/v1/$ClientId/c14cclpueuvj4f9gfbv0",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
      "title" : "'.$ClassName.'",
      "startTime" : "'.$SessionTime.'",
      "recordingDownload": false,
      "duration" : 50,
      "lang" : "en",
      "tags" : " ",
      "timeZoneId" : "America/Chicago",
      "description" : "This is  a '.$ClassName.' Class",
      "type" : "oneTime", 
      "access" : "private",
      "autoRecord" : false,
      "login" : false,
      "layout" : "CR",
      "status" : "up",
      "recording" : {
          "record" : true,
          "autoRecord": false, 
          "recordingControl": true 
      },
      "participantControl" : {
          "write" : false,
          "audio" : true,
          "video" : true
      }
  
}
',
  CURLOPT_HTTPHEADER => array(
   "Authorization: $token",
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res= json_decode($response,true);
return $res;
}




function delete_User($userID,$token){


global $ClientId;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.serviceaccounts.merithub.net/v1/$ClientId/users/$userID",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}


function enrollUser($token,$userID,$MeritHubClass_ID,$ClassLink, $ClientId){

//global $ClientId;
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.classes.merithub.net/v1/$ClientId/$MeritHubClass_ID/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'
  {
    "users": [
        {
            "userId": "'.$userID.'",
           "userLink" : "'.$ClassLink.'",    
            "userType": "su"
        }
    ]
}

',
  CURLOPT_HTTPHEADER => array(
   "Authorization: $token",
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res= json_decode($response,true);
return $res;
}


function getData($token,$query){

global $ClientId;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://s1.serviceaccounts.merithub.net/v1/$ClientId/users?query=$query",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$res= json_decode($response,true);
return $res;
}