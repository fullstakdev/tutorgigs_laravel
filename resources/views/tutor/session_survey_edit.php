<?php
/**
 * @feedback_form_1
 * @ some question from db 
 * @ some on page .
 @ Student attendance and arrival time capture by tutor
 @ in session.
 @ is_attendance ==0 for old session
students_attendance  ==Array of student
 * **/
///////////////////////////
$error = '';
$author = 1;

//echo 'Student list for attendance'; 

$datetm = date('Y-m-d H:i:s');

include("header.php");
$created = date('Y-m-d H:i:s');
$page_name="Session Survey Form";
//////////////////////////
$user_id = $_SESSION['login_id'];

 if (isset($_POST['add_class'])) {
     $feedback_log_serialize= json_encode($_POST);
     
     $ses_id = $_SESSION['feedback_ses_id'];
     $tutorId = $_SESSION['ses_teacher_id'];
     $curr_time = date("Y-m-d H:i:s");
     
      if (isset($_POST['is_paypal_email'])) {
     
      $profile1 = mysql_fetch_assoc(mysql_query("SELECT id,payment_email,payment_phone FROM `tutor_profiles` WHERE tutorid=".$_SESSION['ses_teacher_id']));

       if($profile1)
          $sql = mysql_query(" UPDATE `tutor_profiles` SET payment_email= '".$_POST['is_paypal_email']."',updated='$curr_time' WHERE tutorid=".$tutorId);
       else
          $sql = " INSERT INTO `tutor_profiles` SET payment_email= '".$_POST['is_paypal_email']."',tutorid='$tutorId' ";
       
        $res = mysql_query($sql);
      

        $profile2 = mysql_fetch_assoc(mysql_query("SELECT id,payment_email,payment_phone FROM `tutor_profiles` WHERE tutorid=".$_SESSION['ses_teacher_id']));

        $sql = mysql_query(" UPDATE `gig_teachers` SET payment_em= '".$profile2['payment_email']."',updated='$curr_time' WHERE id=".$tutorId);
       

    }
    
    $ses_det= mysql_fetch_assoc(mysql_query("SELECT * FROM int_schools_x_sessions_log WHERE id=".$ses_id));
    
   $query = " INSERT INTO int_session_complete SET sessionid='$ses_id',"
          . "is_complete='yes',is_attendance='1', "
          . "ses_start_time='".$ses_det['ses_start_time']."', "
          . "quiz_id='".$ses_det['quiz_id']."', "
          . "no_of_students='".$_POST['student_no']."', "
          . "school_id='".$ses_det['school_id']."', "
          . "teacher_id='".$ses_det['teacher_id']."', "
          . "tut_teacher_id='".$ses_det['tut_teacher_id']."', "
          . "student_behavior_info='".addslashes($_POST['stu_behave'])."', "
          . "about_students='".addslashes($about_students_str)."', "
          . "see_different='".addslashes($_POST['differently'])."', "
          . "stu_engaged='".$_POST['stu_engage']."', "
           . 'feedback_log=\''.addslashes($feedback_log_serialize) .' \', '
        
          . "created='$curr_time' "; 
    
     $main = mysql_query($query) or die('error-'.mysql_error());
     $feed_id = mysql_insert_id();
     $up = " UPDATE int_schools_x_sessions_log SET paypal_email='".$_POST['is_paypal_email']."',feedback_id='$feed_id',tutor_complete_session = '".$_POST['session_finish']."' WHERE id=".$ses_id;
     mysql_query($up);
     
      header("location:feedback_success.php"); exit;

}

// New session come
if(isset($_SESSION['feedback_ses_id'])){ //newSession

$ses_det= mysql_fetch_assoc(mysql_query("SELECT * FROM int_schools_x_sessions_log WHERE id=".$_SESSION['feedback_ses_id']));
//$session_id;$dat_of_session; $start_time;
$session_id=$_SESSION['feedback_ses_id'];
//$no_of_students;
$dat_of_session=date_format(date_create($ses_det['ses_start_time']), 'm/d/Y h:i A');

$start_time=date_format(date_create($ses_det['ses_start_time']), 'h:i A');
 $no_of_students=$tot_std=mysql_num_rows(mysql_query("SELECT * FROM int_slots_x_student_teacher WHERE slot_id=".$session_id));
 //   quiz or Objective id 
 $sql="SELECT objective_name FROM `int_quiz` WHERE id=".$ses_det['quiz_id'];
 $quiz= mysql_fetch_assoc(mysql_query($sql));
 $objective_cover=$quiz['objective_name'];
 
 if($ses_det['tut_teacher_id'])
    $tutor= mysql_fetch_assoc(mysql_query("SELECT * FROM gig_teachers WHERE id=".$ses_det['tut_teacher_id']));
 elseif($ses_det['tut_observer_id'])
    $tutor= mysql_fetch_assoc(mysql_query("SELECT * FROM gig_teachers WHERE id=".$ses_det['tut_observer_id']));
 
  if($ses_det['lesson_id'])
    $lesson= mysql_fetch_assoc(mysql_query("SELECT * FROM master_lessons WHERE id=".$ses_det['lesson_id']));
  
 $str="SELECT t. * , p.grade_level_id, p.permission FROM school_permissions p
                              
                              LEFT JOIN terms t ON p.grade_level_id = t.id WHERE t.id =".$ses_det['grade_id'];
                              
                              $grade = mysql_fetch_assoc(mysql_query($str));
                              
                              
 $profile=mysql_fetch_assoc(mysql_query("SELECT id,payment_email,payment_phone FROM `tutor_profiles` WHERE tutorid=".$_SESSION['ses_teacher_id']));                            
                              
}

?>
<style>
 
 label.feedback{ color: #000;
font-size: 20px;
line-height: 135%;
width: 100%;}
 .required.textbox.disable{background-color:gainsboro;}
 .jumbotron{padding: 14px !important;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/css/bootstrap-datetimepicker.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.4/js/bootstrap-datetimepicker.min.js"></script>
<div id="main" class="clear fullwidth">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-4">
                <?php include("sidebar.php"); ?>
            </div>		<!-- /#sidebar -->
            <div id="content" class="col-md-8">
                <div id="single_question" class="content_wrap">
                    <div class="ct_heading clear">
                        <h3><i class="fa fa-plus-circle"></i><?=$page_name?></h3>
                    </div>		<!-- /.ct_heading -->
                    <div class="ct_display clear">
                        <form name="form_class" id="form_class" method="post" action="" enctype="multipart/form-data">
                            
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Name of the tutor ?</label>
    <input type="text" class="form-control" readonly="" name="tutor" id="exampleInputEmail1" value="<?=$tutor['f_name'].' '.$tutor['lname'];?>">
  </div> </div> </div>
                            
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputPassword1">Name of the lesson name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lesson" value="<?=(isset($lesson['name']))?$lesson['name']:NULL?>" readonly="">
  </div>
                            </div></div>
                            
                              <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputPassword1">What Objective did you cover ? *</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="grade" value="<?=$grade['name'];?>" readonly="">
  </div>
                            </div></div>
  
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
      <label for="exampleInputPassword1">Did you finish the session completely? *</label>
        <div class="radio">
          <label>
            <input type="radio" name="session_finish" id="optionsRadios1" value="1" <?php if($ses_det['tutor_complete_session'] == 1) echo 'checked';?>>
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="session_finish" id="optionsRadios2" value="0" <?php if($ses_det['tutor_complete_session'] == 0) echo 'checked';?>>
            No
          </label>
        </div>

  </div>
</div>                            </div>
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Please enter date of session *</label>
    <input type="text" class="form-control" name="session_start_time"  id="datePicker" value="<?=(isset($dat_of_session))?$dat_of_session:NULL?>">
  </div>
                            </div></div>
                            
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Please enter the session ID here *</label>
    <input type="text" class="form-control" readonly=""  name="session_id" id="exampleInputEmail1" value="<?=(isset($session_id))?$session_id:NULL?>">
  </div>
                            </div></div>
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
    <label for="exampleInputEmail1">How many students did you have in your tutor session? *</label>
    <input type="text" class="form-control" name="student_no" id="exampleInputEmail1" value="<?=(isset($no_of_students))?$no_of_students:0?>">
  </div>
    </div></div>
                            <div class="jumbotron">
  <div class="container"> 
  <div class="form-group">
      <label for="exampleInputPassword1">Did the students engage their audio and video at the same time? *</label>
        <div class="radio">
          <label>
            <input type="radio" name="stu_engage" id="optionsRadios1" value="Yes" onclick="javascript: if(this.checked) { $('#other_1').hide();}">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="stu_engage" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_1').hide();}">
            No (Why)
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="stu_engage" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_1').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="stu_engage_other" id="other_1" placeholder="Your Answer" style="display:none">
        </div>

  </div>  </div></div>  
                            
                            <div class="jumbotron">
  <div class="container"> 
  
                            <div class="form-group">
      <label for="exampleInputPassword1">Percentage of engagement *</label>
        <div class="radio">
          <label>
            <input type="radio" name="eng_percentage" id="optionsRadios1" value="20" checked>
           20%
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="eng_percentage" id="optionsRadios2" value="50">
            50%
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="70">
            70%
          </label>
         
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="100">
            100%
          </label>
         
        </div>

  </div> </div></div>
                            
                            <div class="jumbotron">
  <div class="container"> 
                            
                            <div class="form-group">
      <label for="exampleInputPassword1">Percentage for students that understand the lesson *</label>
        <div class="radio">
          <label>
            <input type="radio" name="stu_percentage" id="optionsRadios1" value="20" checked>
           20%
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="stu_percentage" id="optionsRadios2" value="50">
            50%
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="stu_percentage" id="optionsRadios2" value="70">
            70%
          </label>
         
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="stu_percentage" id="optionsRadios2" value="100">
            100%
          </label>
         
        </div>

  </div> 
                            </div></div>
    
   <div class="jumbotron">
  <div class="container">                         
                            <div class="form-group">
    <label for="exampleInputEmail1">Please enter the student name and report any behavior issues </label>
    <input type="text" class="form-control" name="stu_behave" id="exampleInputEmail1" placeholder="Your Answer">
  </div>
  </div>
       </div>
                            <div class="jumbotron">
  <div class="container">
   <div class="form-group">
      <label for="exampleInputPassword1">Did you record your tutoring session *</label>
        
        <div class="radio">
          <label>
            <input type="radio" name="ses_record" id="optionsRadios1" value="Yes" checked onclick="javascript: if(this.checked) { $('#other_2').hide();} ">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="ses_record" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_2').hide();} ">
            No
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="ses_record" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_2').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="ses_record_other" id="other_2" placeholder="Your Answer" style="display:none">
        </div>

  </div>  </div>
 </div>                   
        
                            <div class="jumbotron">
  <div class="container">
                            <div class="form-group">
      <label for="exampleInputPassword1">Was the lesson provided by tutor gigs clear? *</label>
        
        <div class="radio">
          <label>
            <input type="radio" name="lesson_clear" id="optionsRadios1" value="Yes" checked onclick="javascript: if(this.checked) { $('#other_3').hide();} ">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="lesson_clear" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_3').hide();} ">
            No
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="lesson_clear" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_3').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="lesson_clear_other" id="other_3" placeholder="Your Answer" style="display:none">
        </div>

  </div>  
   </div></div>                         
 
                            <div class="jumbotron">
  <div class="container">
   <div class="form-group">
      <label for="exampleInputPassword1">Did you have adequate time for the lesson? *</label>
        
        <div class="radio">
          <label>
            <input type="radio" name="adequate" id="optionsRadios1" value="Yes" checked onclick="javascript: if(this.checked) { $('#other_4').hide();} ">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="adequate" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_4').hide();} ">
            No
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="adequate" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_4').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="adequate_other" id="other_4" placeholder="Your Answer" style="display:none">
        </div>

  </div>    
    </div>
                      </div>
                            
                            <div class="jumbotron">
  <div class="container">
  <div class="form-group">
      <label for="exampleInputPassword1">Did you experience any technical issues ? *</label>
        
        <div class="radio">
          <label>
            <input type="radio" name="experience" id="optionsRadios1" value="Yes" checked onclick="javascript: if(this.checked) { $('#other_5').hide();} ">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="experience" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_5').hide();} ">
            No
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="experience" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_5').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="experience_other" id="other_5" placeholder="Your Answer" style="display:none">
        </div>

  </div>  
  </div>
 </div>                   
                            
<div class="jumbotron">
  <div class="container">
   <div class="form-group">
      <label for="exampleInputPassword1">Was the system difficult to use? *</label>
        
        <div class="radio">
          <label>
            <input type="radio" name="system_difficult" id="optionsRadios1" value="Yes" checked onclick="javascript: if(this.checked) { $('#other_6').hide();} ">
           Yes
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="system_difficult" id="optionsRadios2" value="No" onclick="javascript: if(this.checked) { $('#other_6').hide();} ">
            No
          </label>
        </div>
      <div class="radio">
          <label>
            <input type="radio" name="system_difficult" id="optionsRadios2" value="Other" onclick="javascript: if(this.checked) { $('#other_6').show();} ">
            Other
          </label>
          <input type="text" class="form-control" name="system_difficult_other" id="other_6" placeholder="Your Answer" style="display:none">
        </div>

  </div>
  </div>
</div>  

 <div class="jumbotron">
  <div class="container">
   <div class="form-group">
    <label for="exampleInputEmail1">What would like to see differently ? *</label>
    <input type="text" class="form-control" name="differently" id="exampleInputEmail1" placeholder="Your Answer">
  </div>
  </div>
</div>                 
<div class="jumbotron">
  <div class="container">
   <div class="form-group">
    <label for="exampleInputEmail1">Paypal account *</label>
    <input type="text" class="form-control" name="is_paypal_email" id="exampleInputEmail1"  value="<?=$profile['payment_email'];?>">
  </div>
  </div>
</div>                     
                            
                            
  <button type="submit" name="add_class" id="lesson_submit" class="btn btn-default">Submit</button>
</form>
                        <div class="clearnone">&nbsp;</div>
                    </div>		<!-- /.ct_display -->
                </div>
            </div>		<!-- /#content -->
            <div class="clearnone">&nbsp;</div>
        </div>
    </div>
</div>		<!-- /#header -->

<script type="text/javascript">
    $(document).ready(function () {
    $("#datePicker").datetimepicker({
        format: 'MM/DD/YYYY HH:mm A',
        defaultDate: new Date(),
    });
});
<?php if ($error != '') echo "alert('{$error}')"; ?>


  ///   For selecting Area at 
    $(function () {
        $('input[name="sudent_details"]').on('click', function () {
            if ($(this).val() == 'manual') {
                $('#textarea').show();
            } else {
                $('#textarea').hide();
            }
            if ($(this).val() == 'csv') {
                $('#csv-upload').show();
            } else {
                $('#csv-upload').hide();
            }
        });
    });

</script>

<?php include("footer.php"); ?>
