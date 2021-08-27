<?php    
    @extract($_GET);
    @extract($_POST);
    
    require_once 'inc/connection.php';

    $login_role = $_SESSION['login_role'];
    $page_name="Attendance";
    ///////////////////////////////
    $error=''; 
    $id = $_SESSION['login_id'];       
//    $schoolID = $_SESSION['schools_id'];   
//    if (!isset($_SESSION['schools_id']) || empty($_SESSION['schools_id'])) {
//        echo "<script>alert('School ID is missing.".$_SESSION['schools_id']."');</script>";
//    }    

  
    // 1. Get the last session for this school
 $queryLastSession = "SELECT 
        MeritHubNotification.*, MeritHubClass.sessionID
        FROM 
        MeritHubNotification INNER JOIN MeritHubClass ON (MeritHubNotification.class_id = MeritHubClass.MeritHubClass_ID)
        WHERE MeritHubNotification.status = 'cp' AND MeritHubNotification.school_id = '".$schoolID."'
         AND
               DATE_FORMAT(MeritHubNotification.start_time, '%Y-%m-%d')   >= '".$startDate."'
                AND DATE_FORMAT(MeritHubNotification.end_time, '%Y-%m-%d') <= '".$endDate."'
        ORDER BY 
        MeritHubNotification.id DESC ;"; 
    $resultLS = mysql_query($queryLastSession) or die (mysql_error());
   
   
?>

                <br/>
                <div>
                    <small id="txtDistrictName" class="text-muted"><small id="txtDistrictID"></small></small>                    
                    <h4 id="txtSchoolName"><small id="txtSchoolID"></small></h4>
                    <div id="schoolAttendanceRate" class="alert alert-warning"><?php echo mysql_num_rows($resultLS);?> Session Classes Found</div>  
                    <a href="download_attandance.php">Download</a>
                </div>   
                <hr>
                <div>                   
                    <p id="sessionResults" class="text-success">
                        <?php
                        while($data = mysql_fetch_assoc($resultLS)) { 
                            
                             $tot_std = mysql_num_rows(mysql_query("SELECT * FROM int_slots_x_student_teacher WHERE slot_id=".$data['sessionID']));
                             $tot_std = ($tot_std>0)?$tot_std:"0";
                             
                             $ses_det = mysql_fetch_assoc(mysql_query("SELECT * from int_schools_x_sessions_log where id = '".$data['sessionID']."'")) ;
                              
                              $grade = mysql_fetch_assoc(mysql_query($str));
                             
                             $str = "SELECT t. * , p.grade_level_id, p.permission FROM school_permissions p
                              
                              LEFT JOIN terms t ON p.grade_level_id = t.id WHERE t.id =".$ses_det['grade_id'];
                              
                              $grade = mysql_fetch_assoc(mysql_query($str));
                              
                              $attendance = json_decode($data['attendance']);
                              
                              $students_query = mysql_query("SELECT * FROM int_slots_x_student_teacher WHERE slot_id=".$data['sessionID']);
                              
                              $all_stu = array();
                              $total_stu = mysql_num_rows($students_query);
                              while($row = mysql_fetch_assoc($students_query))
                              {
                                  $all_stu[] = $row['student_id'];
                              }
                              
                              
                              
                            $join_stu = array();
                            foreach($attendance as $stu) { 
                               foreach($stu as $stu1) { 
                               
                                   $str = mysql_query("SELECT students.first_name, students.last_name, MeritHubUser.* from  MeritHubUser 
                              
                                         INNER JOIN students  ON MeritHubUser.InterveneUser_ID = students.id WHERE MeritHubUser.MeritHubUser_ID ='".$stu1->userId."' AND InterveneUser_ID > 0");
                                   if(mysql_num_rows($str) > 0) {
                                   $studentInfo = mysql_fetch_assoc($str);
                                   
                                    $join_stu[] = $studentInfo['InterveneUser_ID'];
                            }}}
                            $total_join = @count($join_stu);
                           $attendance_per = number_format(($total_join / $total_stu) * 100);
                        
                             
                     ?>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Session ID</th>
                                <th scope="col" style="width: 200px;">Date</th>
                                <th scope="col">Class</th>
                                <th scope="col"># Students</th>
                                <th scope="col">Attendance</th>
                               
                            </tr>
                        </thead>
                        <tbody>
            
                            <tr class="alert-success">
                                <th scope="row"><?php echo $data['sessionID'];?></th>
                                <td><?php echo date("F d, Y H:i a", strtotime($data['start_time']));?></td>
                                <td><?php echo date("H:i a", strtotime($data['start_time']));?>-<?php echo date("H:i a", strtotime($data['end_time']));?> - <?=(isset($grade))?$grade['name']:NULL?></td>
                                <td><?php echo $tot_std;?></td>
                                <td id="sessionAttendanceRate_7373"><?php echo $attendance_per;?>%</td>
                                
                            </tr>
                         
                            <tr>
                                <td  colspan="1" class="text-danger">
                            &nbsp;
                        </td>
                                <td colspan="3" > 
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h3 class="panel-title">Joined Students</h3>
                                        </div>
                                        <div class="panel-body">
                                    <table class="table table">
                                        <tr>
                                            <th scope="col" style="border-top:none">Name</th>
                                            <th scope="col" style="border-top:none">Class Time</th>
                                            <th scope="col" style="border-top:none">Duration</th>

                                        </tr>
                                        
                                           <?php
                          $present_stu = array();
                            foreach($attendance as $stu) { 
                               foreach($stu as $stu1) { 
                               
                                   $str = mysql_query("SELECT students.first_name, students.last_name, MeritHubUser.* from  MeritHubUser 
                              
                                         INNER JOIN students  ON MeritHubUser.InterveneUser_ID = students.id WHERE MeritHubUser.MeritHubUser_ID ='".$stu1->userId."' AND InterveneUser_ID > 0");
                                   if(mysql_num_rows($str) > 0) {
                                   $studentInfo = mysql_fetch_assoc($str);
                                   
                                    $present_stu[] = $studentInfo['InterveneUser_ID'];
                                ?>
                                        
                                        <tr>
                                            <td> <?php echo $studentInfo['first_name']." ". $studentInfo['last_name'];?> </td>
                                            <td> <?php echo date("H:i", strtotime($stu1->startTime)) .' - '. date("H:i", strtotime($stu1->endTime));?> </td>
                                           <td> <?php echo round($stu1->totalTime/60).' mins';?> </td>

                                        </tr>
                                         <?php } }} 
                                         
                                         $absent_stu = array_diff($all_stu, $present_stu);
                                         
                                         ?>
                                    </table>
                                    </div></div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                          <h3 class="panel-title">Absent Students</h3>
                                        </div>
                                        <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <th scope="col" style="border-top:none">Name</th>
                                           
                                        </tr>
                                   <?php if(@count($absent_stu) > 0) { 
                                       
                                       $absent_query = mysql_query(" select * from students where id  In (".implode(',', $absent_stu).")");
                                       while($row = mysql_fetch_assoc($absent_query)) {?>
                                      
                                       <tr><td><?php echo $row['first_name']." ". $row['last_name'];?></td></tr>
                                   <?php }} ?>
                                       </table>
                                            </div></div>
                                 </td>
                                
                        
                            </tr>
                                  
                
                        </tbody>
                    </table>
            
                    <hr>
                        <?php } ?>
            
            </p>
                </div>   
            </div>            
			