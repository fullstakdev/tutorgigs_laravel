<?php


$str="SELECT s.ses_start_time,t.name  FROM `int_schools_x_sessions_log` as s INNER JOIN terms as t On t.id=s.grade_id where s.id=$id";
$qr=mysql_query($str);

$ClassArr=mysql_fetch_assoc($qr);


$qrClass=mysql_query("SELECT * FROM `MeritHubClass` WHERE  `sessionID`=$id");

$NumRow=mysql_num_rows($qrClass);

if($NumRow > 0){

  $f=mysql_fetch_assoc($qrClass);
}
else{


		$SessionTime=  date("Y-m-d\TH:i:sP", strtotime($ClassArr['ses_start_time'])); 

		$ClassName= $ClassArr['name'].'_'.$id;

		$classData =CreateClass($token,$ClassName,$SessionTime);

		$MeritHubClass_ID=$classData['classId'];

		$commonHostLink=$classData['commonLinks']['commonHostLink'];

		$commonModeratorLink=$classData['commonLinks']['commonModeratorLink'];

		$commonParticipantLink=$classData['commonLinks']['commonParticipantLink'];

		$hostLink=$classData['hostLink'];

		$str ="INSERT INTO MeritHubClass SET `sessionID`= $id,`MeritHubClass_ID`= '".$MeritHubClass_ID."',
		`commonHostLink`  = '".$commonHostLink."',
		`commonModeratorLink` = '".$commonModeratorLink."',
		`commonParticipantLink`= '".$commonParticipantLink."',
		`hostLink`='".$hostLink."'";

		mysql_query($str);



}
?>