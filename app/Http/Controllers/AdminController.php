<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Tutor;
use App\Admin;
use App\Session;
use App\Student;
use App\TutorProfile;
use Image;
use PDF;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        
        $total_tutors = Tutor::where('all_state','yes')->count('id');
        $total_applicants = Tutor::where('all_state','No')->where('all_state_url', '!=','application.php')->count('id');
        $total_sessions = Session::where('board_type', 'MeritHub')->count('id');
        $total_students = Student::where('status', 1)->count('id'); 
        
        $tutors = Tutor::where('all_state','yes')->take(6)->orderBy('created_date', 'desc')->get();
        $sessions = Session::where('board_type', 'MeritHub')->take(10)->orderBy('created_date', 'desc')->get();
        $applicants = Tutor::where('all_state','No')->where('all_state_url', '!=','application.php')->take(10)->orderBy('created_date', 'desc')->get();
        $students = Student::where('status', 1)->take(10)->orderBy('created', 'desc')->get(); 

        
        return view('dashboard', compact('total_tutors', 'total_applicants', 'total_sessions','total_students','tutors', 'sessions','applicants','students'));
    }
   
    
    public function sessionDetail(Request $request)
    {
        
     
        $ses_det = DB::table('int_schools_x_sessions_log')->where('id', $request->sid)->first();
        //$ses_det = $ses_det->where('curr_active_board', 'MeritHub');
       
      
        echo view('session_detail', compact('ses_det'));
    }
    public function sessionFullDetails(Request $request)
    {
        
     
        $ses_det = DB::table('int_schools_x_sessions_log')->where('id', 6658);
        $ses_det = $ses_det->where('curr_active_board', 'MeritHub')->first();
       
      
        echo view('admin.session_detail_full', compact('ses_det'));
    }
    
    public function cancelledSession(Request $request)
    {
        $type = '';
        if($request->filled('type') )
        {
           $results = DB::table('sessioncancelnotification')->leftJoin('int_schools_x_sessions_log', 'sessioncancelnotification.SessionID', 'int_schools_x_sessions_log.id')->select('sessioncancelnotification.*','int_schools_x_sessions_log.grade_id','int_schools_x_sessions_log.tut_teacher_id','int_schools_x_sessions_log.ses_start_time')->where('ReadStatus', $request->input('type'));
           $type = @$request->input('type');
           
        }
           else
            $results = DB::table('sessioncancelnotification')->leftJoin('int_schools_x_sessions_log', 'sessioncancelnotification.SessionID', 'int_schools_x_sessions_log.id')->select('sessioncancelnotification.*','int_schools_x_sessions_log.grade_id','int_schools_x_sessions_log.tut_teacher_id','int_schools_x_sessions_log.ses_start_time');
        
        $tot_record = $results->count('sessioncancelnotification.ID');
        $results = $results->get();
        
        
     
        echo view('admin.cancelled_sessions', compact('results', 'tot_record', 'type'));
    }
    
    public function postResolvedSession(Request $request)
    {
        if(empty($request->input('arruser')))
            return redirect()->route('cancelled_sessions')->with('error', 'You should select a session');
        else {
   
            DB::update("update sessioncancelnotification set ReadStatus = 1 where ID  IN(".$request->input('arruser').")");
             return redirect()->route('cancelled_sessions')->with('success', 'Session cancelled successfully');
           
        }
        
    }

    public function bookedUnbookedSession(Request $request)
    {
        $start_date = date('Y-m-d h:i:s');
        
         $session_type = '';
         
         $sessions = Session::where('board_type', 'MeritHub');
         
         if($request->session_type)
         {
                $session_type = $request->session_type;

                if($session_type == 'booked')
                {
                   $sessions = $sessions->where(function($query) {
                                            $query->where('tut_teacher_id', '>', 0)
                                            ->orWhere('tut_observer_id', '>', 0);
                                  });
                }
                elseif($session_type == 'unbooked')
                   $sessions = $sessions->where('tut_teacher_id', 0);
                elseif($session_type == 'cancel')
                   $sessions = $sessions->where('tut_teacher_id', 0)->where('ses_start_time', '<', $start_date);
                else
                    $tutor_sessions = $sessions->where('ses_start_time', '>', $start_date);
        }
        else
           $sessions = Session::where('ses_start_time', '>', $start_date);
        
        $total_sessions = $sessions->count('id');
        $sessions = $sessions->orderBy('ses_start_time', 'ASC')->paginate(25);
     
        echo view('admin.booked_unbooked_sessions',compact('sessions', 'total_sessions','session_type'));
    }
    
    public function jobsBoard(Request $request)
    {
        $start_date = date('Y-m-d h:i:s');
        $sessions = Session::where('board_type', 'MeritHub')->where('tut_teacher_id', 0)->where('ses_start_time', '>', $start_date)->orderBy('ses_start_time', 'ASC');
     
        $total_sessions = $sessions->count('id');
        $sessions = $sessions->orderBy('ses_start_time', 'ASC')->paginate(25);
        
        echo view('admin.jobs_board', compact('sessions','total_sessions'));
    }
    public function paymentHistory(Request $request)
    {
      echo view('admin.payment_history');
    }
    public function paymentHistoryPaid(Request $request)
    {
      echo view('admin.payment_history_paid');
    }
    public function observerSessions(Request $request)
    {
        $start_date = date('Y-m-d h:i:s');
       $sessions = Session::where('board_type', 'MeritHub')->where('observer_confirm', 1)->where('add_observer', 1)->orderBy('ses_start_time', 'ASC');
     
        //$sessions = Session::where('observer_confirm', 1)->where('add_observer', 1)->orderBy('ses_start_time', 'ASC');
         
        $total_sessions = $sessions->count('id');
        $sessions = $sessions->orderBy('ses_start_time', 'ASC')->paginate(25);
        
        echo view('admin.observer_Sessions', compact('sessions','total_sessions'));
      
    }
    
    public function suspendedSessions(Request $request)
    {
        $results = DB::table('int_session_suspend_cancelled_log')->leftJoin('int_schools_x_sessions_log', 'int_session_suspend_cancelled_log.tutoring_id', 'int_schools_x_sessions_log.id')->select('int_session_suspend_cancelled_log.*','int_schools_x_sessions_log.grade_id','int_schools_x_sessions_log.tut_teacher_id','int_schools_x_sessions_log.ses_start_time');
        
        $tot_record = $results->count('int_session_suspend_cancelled_log.id');
        $results = $results->get();
        
      echo view('admin.suspended_sessions', compact('tot_record', 'results'));
    }
    
     public function manage_sessions(Request $request)
    {
        
        $ses_det = Session::find($request->ses_id);
     
        echo view('admin.manage_session', compact('ses_det'));
    }
    
    public function trainingManagement(Request $request)
    {
     
        $get_test_result = DB::table('training_management')->get();
        echo view('admin.training_management', compact('get_test_result'));
    }
    
    public function upload_training_file(Request $request)
    {
          if($request->hasFile('file'))
          { 
           
            $fileName = $fileName = time().rand(1001,1111).$request->file('file')->getClientOriginalName();   
            $path =  $_SERVER['DOCUMENT_ROOT'].'/training_docs/';
            
            $request->file('file')->move($path, $fileName);
            
            DB::table('training_management')->insert([
                         'name' => $request->input('file_name'),
                         'file' => $fileName,
                        
                         'created_at' => date("Y-m-d H:i:s")
                     ]);
            
            return redirect()->route('training_management')->with('success', "The training item uploaded successfully");
          }
          else
              return redirect()->route('training_management')->with('error', "The training item did not upload");
    }
    
    public function delete_training_management(Request $request)
    {
        if($request->id)
        {
            $get_training_result = DB::table('training_management')->where('id', $request->id)->first();
             $path =  $_SERVER['DOCUMENT_ROOT'].'/training_docs/';
            @unlink($path.$get_training_result->file);
            
            DB::delete('delete from training_management where id = ?',[$get_training_result->id]);
            
            return redirect()->route('training_management')->with('success', 'The training item deleted successfully');
        }
        else
            return redirect()->route('training_management')->with('error', 'The training item did not delete');
    }
    
    
    public function tutorMessage(Request $request)
    {
      echo view('admin.tutor_message');
    }
    
    public function broadcastMessage(Request $request)
    {
      echo view('admin.broadcast_message');
    }
    public function session_log_history(Request $request)
    {
      echo view('admin.session_log_history');
    }
    
    public function certification_list(Request $request)
    {
      echo view('admin.certification_list');
    }
    
    public function manage_certificate(Request $request)
    {
      echo view('admin.manage_certificate');
    }
    
    public function manageApplicant(Request $request)
    {
      echo view('admin.manage_applicant');
    }
    
    public function view_applicant(Request $request)
    {
      echo view('admin.view_applicant');
    }
    
    public function backgroud_checking(Request $request)
    {
      echo view('admin.backgroud_checking');
    }
    
    public function session_view(Request $request)
    {
      echo view('admin.session_view');
    }
    public function admin_profile(Request $request)
    {
      echo view('admin.admin_profile');
    }
    
    public function calendar(Request $request)
    {
      echo view('admin.calendar');
    }
    
    public function cal_ses_details(Request $request)
    {
      echo view('admin.cal_ses_details');
    }
    
    public function manage_admins(Request $request)
    {
        $role = Auth::guard('admin')->user()->role;
        if($role == 0)
        {
            $resultAdmins = DB::table('gig_admins')->where('role',0)->where('id', '!=', 1)->get();
            $resultAdminRoles = DB::table('gig_admin_roles')->where('isActive', '!=', 0)->where('value', 0)->get();
        }
       else 
       {
           $resultAdmins =DB::table('gig_admins')->get();
           $resultAdminRoles = DB::table('gig_admin_roles')->where('isActive', '!=', 0)->get();
       }
       
       $listAdminRoles = array();
       foreach($resultAdminRoles as $role)
       {
           $listAdminRoles[$role->value] = $role->name;
       }
       
       echo view('admin.manage_admins', compact('resultAdmins', 'listAdminRoles'));
    }
    
    public function deleteAdmin(Request $request)
    {
        if($request->id)
        {
            DB::delete('delete from gig_admins where id = ?',[$request->id]);
            return redirect()->route('manage_admins')->with('success', 'The admin deleted successfully');
        }
        else
           return redirect()->route('manage_admins')->with('error', 'The admin deleted failed'); 
    }
    
    public function postAdmin(Request $request)
    {
        $isExist = DB::table('gig_admins')->where('email')->count('id');
        if($isExist)
        {
            return redirect()->route('manage_admins')->with('error', 'The email address alraedy existed'); 
        }
        else
        {
         $insert = DB::table('gig_admins')->insert([
                            'user_name' => $request->input('username'),
                            'email' => $request->input('email'),
                            'password' => md5($request->input('password')),
                            'first_name' => $request->input('first_name'),
                            'last_name' => $request->input('last_name'),
                            'role' => $request->input('role'),
                            'phone_number' => $request->input('phone'),
                            'status' => $request->input('status'), 
                            'q_remaining' => 0,
                            'date_registered' => date("Y-m-d H:i:s")
                       ]);
         
         if($insert)
             return redirect()->route('manage_admins')->with('success', 'The admin added successfully');
         else
            return redirect()->route('manage_admins')->with('error', 'The admin did not add'); 
        }
                    
    }
    
    public function postEditAdmin(Request $request)
    {
        $isExist = DB::table('gig_admins')->where('email')->where('id', '!=', $request->input('admin_id'))->count('id');
        if($isExist)
        {
            return redirect()->route('manage_admins')->with('error', 'The email address alraedy existed'); 
        }
        else
        {
           
         $insert = DB::table('gig_admins')->where('id', $request->input('admin_id'))->update([
                            'user_name' => $request->input('username'),
                            'email' => $request->input('email'),
                            'first_name' => $request->input('first_name'),
                            'last_name' => $request->input('last_name'),
                            'role' => $request->input('role'),
                            'phone_number' => $request->input('phone'),
                            'status' => $request->input('status')
                       ]);
         
         if($insert)
             return redirect()->route('manage_admins')->with('success', 'The admin updated successfully');
         else
            return redirect()->route('manage_admins')->with('error', 'The admin did not update'); 
        }
                    
    }
    
    public function editAdmin(Request $request)
    {
        if($request->id)
        {
            $admin = DB::table('gig_admins')->where('id', $request->id)->first();
            echo view('admin.edit_admin', compact('admin'));
        }
       
    }
    
    public function edit_admin(Request $request)
    {
      echo view('admin.edit_admin');
    }
    
    public function manage_observer_job(Request $request)
    {
      echo view('admin.manage_observer_job');
    }
    
    public function instructorJoinMerit(Request $request)
    {
       
        require_once $_SERVER['DOCUMENT_ROOT'].'/MeritHub/MeritHub.Function.php';
  
        if(isset($request->sid) && $request->sid > 0)
        {
            $token = getToken($ClientId, $ClientSecret);
            $session  = Session::find($request->sid);

            
            $MemberName= "Moderator".$request->sid;
            $ClientUserId= 'TuMod'.$request->sid;
            $UserArrList = array(
                 "name" => $MemberName,
               "title" => "Moderator Tutor",
               "img" => "https://intervene.io/questions/student-icon.jpg",
               "desc" => "This is Moderator Tutor Add-In MeritHub Room",
               "lang" => "en",
               "clientUserId" => $ClientUserId, 
               "email" => '',
               "role" => "C",
               "timeZone" => "America/Chicago",
               "permission" => "CC");

            

            $UserData = json_encode($UserArrList);
            $ArrUser  = createUser($UserData, $token, $ClientId);

            $strDupUser = DB::table('MeritHubUser')->where('InterveneMod_ID', $request->sid);
            $DupCount  = $strDupUser->count();
            if($DupCount > 0)
            {
                $ArDupUser = $strDupUser->first();
                $tutorMeritID = $ArDupUser->MeritHubUser_ID;
            }
            else
            {
                DB::table('MeritHubUser')->insert([
                    'MeritHubUser_ID' => $ArrUser['userId'],
                    'InterveneMod_ID' => $request->sid
                ]);

                $tutorMeritID = $ArrUser['userId'];
            }
        }
     
        if(!empty($tutorMeritID))
        {
            $r = DB::table('MeritHubClass')->where('sessionID', $request->sid)->first();
            
            $MeritHubClass_ID = $r->MeritHubClass_ID;
            $ClassLink        = $r->commonModeratorLink;
            $userID           = $tutorMeritID; 
            $urlArr           = enrollUser($token,$userID,$MeritHubClass_ID,$ClassLink, $ClientId);
            $url              = $urlArr[0]['userLink'];
            $rURL             = "https://live.merithub.com/info/device-test/$ClientId/$url";
            
           header("location: $rURL");
           exit;
        }
       
    }
    
     public function ajax_laoding_data(Request $request)
    {
        $action = $request->input('action');
        switch($action) {
              case 'get_multiple_schools':
                $district_id = $request->district;
                $school_id   = $request->school_id;
        
                $query = DB::table('schools')->where('district_id', $district_id)->orderBy('SchoolName', 'ASC')->get();
  


                $select = '<option value="">Select a school</option>';
                foreach($query as $schools) {
                    $selec = '';
                        $select .= '<option value="'.$schools->SchoolId.'" >'.$schools->SchoolName.'</option>';
                }
              
                echo $select; exit();
                break;
                
                case 'get_school_grades':
             
                $school_id   = $request->school_id;
        
                if($school_id == 130)
                {
                        $query = DB::table('classes')->select('grade_level_common')->where('school_id', $school_id)->get()->distinct('grade_level_common');



                        $select = '';
                        foreach($query as $schools) {
                            $selec = '';
                                $select .= '<option value="'.$schools->grade_level_common.'" >'.$schools->grade_level_common.'</option>';
                        }
                }
                else{
                    $sql_grades = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $school_id)->get();
               
                    $select = '';
                foreach($sql_grades as $schools) 
                {
                   
                    $select .= '<option value="'.$schools->id.'" >'.$schools->name.'</option>';
                }
                   
            }
                echo $select; exit();
                break;
                
                case 'get_multiple_students':
             
                $school_id   = $request->school_id;
                $grade_id   = $request->grade_id;
        
                
                 $sql_students = DB::table('students_x_class')->join('students', 'students_x_class.student_id','students.id')
              ->select('students.first_name', 'students.last_name','students.id', 'students_x_class.student_id')
                              ->where('students_x_class.grade_level_id', $grade_id)->where('students.school_id',$school_id)
                              ->orderBy('students.first_name', 'asc')->get();
               
                    $select = '';
                    //echo "<pre>";
                    //print_r($sql_students->toArray());
                $string_json = "{
               id: '',
               text: 'Student Group 1',
               children: [
               
               ";
                foreach($sql_students as $row) 
                {
                    /*$st_name = $row->first_name." ".$row->last_name;  
                    $select .= '<option value="'.$row->id.'" >'.$st_name.'</option>';*/
                    $name  = $row->first_name." ".$row->last_name;
                    $string_json .= '{id: "'.$row->id.'",text:"'.$name.'"}';
                }
                $string_json .= "]}";
           
                echo $string_json; exit();
                break;
        }
    }
 
}
