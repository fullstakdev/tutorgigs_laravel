<?php
// enroll student in class
$arrStu= $_SESSION[$id];
$arrCount=count($arrStu);


if($arrCount > 0 ){

$str=" SELECT * FROM `MeritHubClass` where sessionID=$id";
$res_class=mysql_query($str);

$r=mysql_fetch_assoc($res_class);

$MeritHubClass_ID=$r['MeritHubClass_ID'];

$ClassLink=$r['commonParticipantLink'];

for ($i=0; $i < $arrCount; $i++) {
  
	$userID= $arrStu[$i];
	$urlArr=enrollUser($token,$userID,$MeritHubClass_ID,$ClassLink);
	$str="INSERT INTO `MeritHubLaunchUrl` SET `session_id`= $id,`MeritHubUser_ID` = '".$urlArr[0]['userId']."',`MeritHub_Url`= '".$urlArr[0]['userLink']."'";
	mysql_query($str);
	$mesg += $i;
}
}
if($mesg >  0){
echo "<script>window.location='https://dev.intervene.io/questions/create_sessiion_merit.php?session_id='".$id."';</script>";
}

?>