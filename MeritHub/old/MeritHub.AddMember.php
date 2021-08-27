<?php

 $str="SELECT st.id,st.email,st.first_name,st.last_name FROM `int_slots_x_student_teacher` as th INNER JOIN `students` as st  ON st.id=th.student_id
WHERE th.slot_id = $id";


$res_students=mysql_query($str);

while ($line=mysql_fetch_assoc($res_students)) {

    $MemberName= ucwords($line['first_name'].''.$line['last_name']);
    $ClientUserId=$line['id'];
    $email=($line['email']==''?trim($line['first_name']).'@intervene.io':$line['email']);

    $UserArrList = array(
      "name" => $MemberName,
    "title" => "Itervene Student",
    "img" => "https://dev.intervene.io/questions/student-icon.jpg",
    "desc" => "This is Intervene Students Add-In MeritHub Room",
    "lang" => "en",
    "clientUserId" => $ClientUserId, 
   "email" => $email,
    "role" => "M",
    "timeZone" => "America/Chicago",
    "permission" => "CJ");

$strDupUser="SELECT * FROM  `MeritHubUser` WHERE InterveneUser_ID= $ClientUserId";
$qrDupUser=mysql_query($strDupUser);
$ArDupUser=mysql_fetch_assoc($qrDupUser);
if($ArDupUser['InterveneUser_ID'] > 0){

  $_SESSION[$id][]= $ArDupUser['MeritHubUser_ID'];


}

else{

  $UserData=json_encode($UserArrList);
   $ArrUser=createUser($UserData,$token);

if($ArrUser['code'] == 'userAlreadyExists'){

$str="DELETE FROM `MeritHubUser` WHERE  `InterveneUser_ID`=$ClientUserId";
mysql_query($str);
$str="INSERT INTO  `MeritHubUser` SET `MeritHubUser_ID`='".$ArrUser['traceId']."', `InterveneUser_ID`=$ClientUserId";
mysql_query($str);

$_SESSION[$id][]= $ArrUser['traceId'];


}
else{

$str="INSERT INTO `MeritHubUser` SET `MeritHubUser_ID`='".$ArrUser['userId']."', `InterveneUser_ID`=$ClientUserId";
  mysql_query($str);
  $_SESSION[$id][]= $ArrUser['userId'];
}

}

}

?>