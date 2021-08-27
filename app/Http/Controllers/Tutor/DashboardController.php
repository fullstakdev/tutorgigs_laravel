<?php

namespace App\Http\Controllers\Tutor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Tutor;
use App\Admin;
use App\Session;
use App\Student;
use App\TutorProfile;
use App\ObserverSession;
use Image;
use PDF;
use App\Models\{
    Session as MSession,
    MainSessionRepeat,
};


class DashboardController extends Controller
{
    private $errors = [];
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
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
     
        $claimed_sessions = Session::where('tut_teacher_id', $tutor_id)->orderBy('created_date', 'desc');
        $total_claimed_session = $claimed_sessions->count('id');
        $claimed_sessions = $claimed_sessions->take(5)->get();
        
        $observer_sessions = ObserverSession::where('tutor_id', $tutor_id)->orderBy('created_date', 'desc');
        $total_observer_session = $observer_sessions->count('id');
        
        $tutor_sessions = Session::where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time);
        $total_tutor_sessions = $tutor_sessions->count('id');
        $tutor_sessions = $tutor_sessions->take(5)->orderBy('created_date', 'desc')->get();
        
        $total_cancelled_sessions =  DB::table('sessioncancelnotification')->join('int_schools_x_sessions_log','int_schools_x_sessions_log.id','sessioncancelnotification.SessionID')->where('sessioncancelnotification.TutorID', $tutor_id)->count('sessioncancelnotification.ID');

        
        return view('tutor_panel.dashboard', compact('claimed_sessions', 'total_claimed_session','observer_sessions', 'total_observer_session','total_tutor_sessions', 'total_cancelled_sessions','tutor_sessions'));
    }
   
    
    public function sessionDetail(Request $request)
    {
        
     
        $ses_det = DB::table('int_schools_x_sessions_log')->where('id', $request->sid);
        $ses_det = $ses_det->where('curr_active_board', 'MeritHub')->first();
       
      
        echo view('session_detail', compact('ses_det'));
    }
    
     public function jobBoard(Request $request)
    {
        
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
       
        if(empty($request->id))
        {
            $tutor_sessions = Session::where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time)->where('board_type', 'MeritHub');
            $total_tutor_sessions = $tutor_sessions->count('id');
            $tutor_sessions = $tutor_sessions->orderBy('created_date', 'desc')->paginate(25);
        }
        else
        {
            $tutor_sessions = Session::where('id', $request->id)->where('board_type', 'MeritHub');
            $total_tutor_sessions = $tutor_sessions->count('id');
            $tutor_sessions = $tutor_sessions->orderBy('created_date', 'desc')->paginate(1);
        }
        
        $tutor_profile = DB::table('tutor_profiles')->where('tutorid', $tutor_id)->first();

        echo view('tutor_panel.job_board', compact('tutor_sessions', 'total_tutor_sessions', 'tutor_profile'));
    }
    
    public function claimObserverJob(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $profile = Tutor::find($tutor_id);
        
        if($profile->is_observer == 1)
        {
            $observer_job = ObserverSession::find($request->id);
            $ids = $observer_job->session_ids;
            $observer_sessions = Session::whereIn('id', explode(",", $ids))->where('tut_teacher_id', '>', 0)->where('tut_teacher_id', $tutor_id);
            $is_claim = $observer_sessions->count('id');
            if($is_claim < 1)
            {
                $sessions = Session::whereIn('id', explode(",", $ids))->get();
                foreach($sessions as $row)
                {
                    $sid = $row->id;
                    $ses_det = Session::find($sid);
                    $clss_id = $ses_det->braincert_class; 
                    $drhomework_ses_id = $ses_det->drhomework_ref_id;
                    $client_id = $ses_det->Tutoring_client_id;
                    
                    $log_message = "Obserevr <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> claimed the session <strong>'.$sid.'</strong> by '.date("Y-m-d H:ia");
                    DB::table('session_activity_logs')->insert([
                            'session_id' => $sid,
                            'user_type' => 'Observer',
                            'log_message' => $log_message,
                            'created_at' => date("Y-m-d H:i:s")
                        ]);
                    
                    
                    
                    if($ses_det->tut_observer_id == 0)
                    {
                        $board = 'stoped';
                        $ses_det->braincert_board_url = $board;
                        $ses_det->tut_observer_id = $tutor_id;
                        $ses_det->app_url = $profile->url_aww_app;
                        $ses_det->tut_accept_time = date("Y-m-d H:i:s");
                        $ses_det->modified_date = date("Y-m-d H:i:s");
                        $ses_det->save();
                        
                        DB::update('update int_slots_x_student_teacher set tut_observer_id = '.$tutor_id.', tut_admin_id = 1 where slot_id = '.$ses_det->id);
                        
                    }
                }
                
                $observer_job->tutor_id = $tutor_id;
                $observer_job->save();
                return redirect()->route('observer_job_board')->with('success', 'You claimed the observer job successfully');
                
            }
           else {
               $observer_sessions = $observer_sessions->get();
               $sess_arr = array();
               foreach($observer_sessions as $data)
               {
                   $sess_arr[] = $data->id;
               }
               return redirect()->route('observer_job_board')->with('error', 'You are not allowed to claim this job as you are already assigned to the session '.implode(", ", $sess_arr));
           }
        }
        else
        {
            return redirect()->route('observer_job_board')->with('error', 'You have no privilege to claim observer job');
        }
    }
    
    public function observerJobBoard(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $observer_jobs = ObserverSession::where('ses_start_date','>' , date("Y-m-d"))->whereNull('tutor_id')->orderBy('created_at', 'desc');
        $total_observer_jobs = $observer_jobs->count('id');
        
        $observer_jobs = $observer_jobs->paginate(25);
     
        echo view('tutor_panel.observer_job_board', compact('observer_jobs', 'total_observer_jobs'));
    }
    
   public function tutorSessions(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
        $session_type = '';
        if(empty($request->id))
        {
            if($request->session_type)
            {
                $session_type = $request->session_type;

                if($session_type == 'upcoming')
                   $tutor_sessions = Session::where('tut_teacher_id', $tutor_id)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time);
                elseif($session_type == 'past')
                   $tutor_sessions = Session::where('tut_teacher_id', $tutor_id)->whereNull('add_observer')->where('ses_start_time', '<' , $curr_time);
                else
                    $tutor_sessions = Session::where('tut_teacher_id', $tutor_id)->whereNull('add_observer');
            }
            else
                $tutor_sessions = Session::where('tut_teacher_id', $tutor_id)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time);
        }
        else
          $tutor_sessions = Session::where('tut_teacher_id', $tutor_id)->where('id',$request->id);  
        
        $total_tutor_sessions = $tutor_sessions->where('board_type', 'MeritHub');
        $total_tutor_sessions = $tutor_sessions->count('id');
        $tutor_sessions = $tutor_sessions->orderBy('created_date', 'desc')->paginate(25);
        
       
     
        echo view('tutor_panel.tutor_sessions', compact('tutor_sessions', 'total_tutor_sessions', 'session_type'));
    }
    public function observerSessions(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $observer_jobs = ObserverSession::where('tutor_id', $tutor_id)->orderBy('created_at', 'desc');
        $total_observer_jobs = $observer_jobs->count('id');
        
        $observer_jobs = $observer_jobs->paginate(25);
    
        echo view('tutor_panel.observer_sessions', compact('observer_jobs', 'total_observer_jobs'));
    }
    
    public function manageObserverJobs(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $observer_jobs = ObserverSession::where('tutor_id', $tutor_id)->where('id', $request->id)->first();
        
        $curr_time= date("Y-m-d H:i:s");
        $ids = $observer_jobs->session_ids;
        $sessions = Session::whereIn('id', explode(",", $ids))->where('tut_observer_id', $tutor_id)->get();
     
        echo view('tutor_panel.manage_observer_jobs', compact('observer_jobs', 'sessions'));
    }
    public function completeSessions(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
        
        $complete_sessions = Session::where('feedback_id', 0)->where('ses_start_time', '<' , $curr_time)->where(function($query) {
                      $query->where('tut_teacher_id', Auth::guard('tutor')->user()->id)
                      ->orWhere('tut_observer_id', Auth::guard('tutor')->user()->id);
            });
        
        $complete_sessions = $complete_sessions->where('board_type', 'MeritHub');
        $total_complete_sessions = $complete_sessions->count('id');
        $complete_sessions = $complete_sessions->orderBy('created_date', 'desc')->paginate(25);
     
        echo view('tutor_panel.complete_sessions', compact('complete_sessions', 'total_complete_sessions'));
    }
    public function paymentList(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
        
        $payment_object = Session::where('feedback_id', '>' , 0)->where('ses_start_time', '<' , $curr_time)->where(function($query) {
                      $query->where('tut_teacher_id', Auth::guard('tutor')->user()->id)
                      ->orWhere('tut_observer_id', Auth::guard('tutor')->user()->id);
            });
        $payment_object = $payment_object->where('board_type', 'MeritHub');
        $payment_list = $payment_object->orderBy('created_date', 'desc')->paginate(25);
        
        $total_paid_sessions = Session::where('feedback_id', '>' , 0)->where('board_type', 'MeritHub')->where('ses_start_time', '<' , $curr_time)->where('payment_status', 1)->where(function($query) {
                      $query->where('tut_teacher_id', Auth::guard('tutor')->user()->id)
                      ->orWhere('tut_observer_id', Auth::guard('tutor')->user()->id);
            })->count('id');
        $total_unpaid_sessions = Session::where('feedback_id', '>' , 0)->where('board_type', 'MeritHub')->where('ses_start_time', '<' , $curr_time)->where('payment_status', 0)->where(function($query) {
                      $query->where('tut_teacher_id', Auth::guard('tutor')->user()->id)
                      ->orWhere('tut_observer_id', Auth::guard('tutor')->user()->id);
            })->count('id');
     
        echo view('tutor_panel.payment_list', compact('total_paid_sessions', 'total_unpaid_sessions','payment_list' ));
    }
    public function messages(Request $request)
    {
        $tutor_id = Auth::guard('tutor')->user()->id;
        $messages = DB::table('inbox')->where('sender_id', $tutor_id )->orWhere('receiver_id', $tutor_id)->get();
    
        echo view('tutor_panel.messages', compact('messages'));
    }
    
    public function profile(Request $request)
    {
        
     
        echo view('tutor_panel.profile');
    }
    public function notification(Request $request)
    {
        
     
        echo view('tutor_panel.notification');
    }
    
    public function getQualification(Request $request)
    {
        $testList = DB::connection('mysql_2')->table('tests')->where('Name', '!=', 'Training Test')->where('IsActive', 1)->get();
     
        echo view('tutor_panel.get_qualification', compact('testList'));
    }
    
    public function upload_certification(Request $request)
    {
        
     
        echo view('tutor_panel.upload_certification');
    }
    
    public function jobCalendar(Request $request)
    {
        
     
        echo view('tutor_panel.job_calendar');
    }
    public function postFeedback(Request $request)
    {
        $ses_det = Session::find($request->sid);
        $request->session()->put('feedback_session_id',$request->sid);
        
        echo view('tutor_panel.post_feedback', compact('ses_det'));
    }
    
    public function submit_feedback_1(Request $request)
    {
      
        $request->session()->put('form_1',$request->all());
        return redirect()->route('post_feedback_2');
    }
    
    public function postFeedback_2(Request $request)
    {
       
        $data = DB::table('int_ses_feedback_questions')->where('form_step', 'form_2')->first();
        
        $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
        $num = $res->count();
        $res = $res->first();
     
        echo view('tutor_panel.post_feedback_2', compact('data', 'res','num'));
    }
    
    public function submit_feedback_2(Request $request)
    {
      
        $request->session()->put('form_2',$request->all());
        $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
        $num = $res->count();
        if($num)
            $is_edit = 1;
        
        if(@$is_edit==199){
                foreach ($request->input('qn_id') as $key=> $qid){
                   
                    $answer_q = $request->input('ans_opn_'.$qid);

                  DB::update('update int_ses_feedback_questions_answer set answer = "'.$answer_q.'" where sessionid = '.$request->session()->get('feedback_session_id').'&tutor_id='.Auth::guard('tutor')->user()->id);
               }
        }
        return redirect()->route('post_feedback_3');
    }
    
    
    public function postFeedback_3(Request $request)
    {
        $res_form2 = DB::table('int_ses_feedback_questions')->where('form_step', 'form_3')->orderBy('weight', 'asc')->get();
        
        $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
        $num = $res->count();
        $res = $res->first();
     
        echo view('tutor_panel.post_feedback_3', compact('res_form2','res', 'num'));
    }
    
    public function submit_feedback_3(Request $request)
    {
      
        $request->session()->put('form_3',$request->all());
        $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
        $num = $res->count();
        if($num)
            $is_edit = 1;
        
        if(@$is_edit==199){
                foreach ($request->input('qn_id') as $key=> $qid){
                   
                    $answer_q = $request->input('ans_opn_'.$qid);

                  DB::update('update int_ses_feedback_questions_answer set answer = "'.$answer_q.'" where sessionid = '.$request->session()->get('feedback_session_id').'&tutor_id='.Auth::guard('tutor')->user()->id);
               }
        }
        return redirect()->route('post_feedback_4');
    }
    public function postFeedback_4(Request $request)
    {
         $res_form4 = DB::table('int_ses_feedback_questions')->where('form_step', 'form_5')->get();
        
         $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
         $num = $res->count();
         $res = $res->first();
         
        echo view('tutor_panel.post_feedback_4', compact('res','res_form4', 'num'));
    }
    
    public function submit_feedback_4(Request $request)
    {
      
        $request->session()->put('form_4',$request->all());
        $tutor_id = Auth::guard('tutor')->user()->id;
        $curr_time = date("Y-m-d H:i:s");
        
        $res = DB::table('int_session_complete')->where('sessionid', $request->session()->get('feedback_session_id'));
        $num = $res->count();
        
        $is_edit = 0;
        if($num)
            $is_edit = 1;
        
        if ( $request->filled('is_paypal') && $request->input('is_paypal') == 'No' ) 
        {
      
            $profile1 = DB::table('tutor_profiles')->where('tutorid', $tutor_id)->count();
            if($profile1)
              DB::update("update tutor_profiles set payment_email = '".$request->input('is_paypal_email')."', updated = '".$curr_time."' where tutorid = ".$tutor_id);
            else
            {
                 DB::table('tutor_profiles')->insert([
                     'payment_email' => $request->input('is_paypal_email'),
                     'tutorid' =>$tutor_id
                     ]);
            }  

           $profile2 = DB::table('tutor_profiles')->where('tutorid', $tutor_id)->first();
           $tutor = Tutor::find($tutor_id);
           $tutor->payment_em = $profile2->payment_email;
           $tutor->updated    = $curr_time;
           $tutor->save();
          

       }
       
       $ses_id = $request->session()->get('feedback_session_id');
       $ses_det = Session::find($ses_id);
       
       $about_students_str = "";
       $stu_arr = @$request->session()->get('form_3')['student_issues'];
       $student_arr = array();
       
       if(@count($stu_arr) > 0)
       {
            foreach ($stu_arr as $sid=> $value) {
                 $x = array("Name"=>"StuName".$sid,"About"=>$value);
                 $student_arr[$sid] = $x;
             }
       }
       $about_students_str = serialize($student_arr); 
       $st_bh_info = @$request->input('student_behavior_info');
       $feedback_log_serialize = serialize( $request->session()->all());
       
       $engaged_not_info = (@$request->session()->get('form_2')['stu_engaged'] == "no") ? @$request->session()->get('form_2')['stu_engaged']['engaged_not_info'] : NULL;
       $students_attendance_str = '';
       
      if(@$request->session()->get('form_3')['no_of_students'] > 0)
          $no_of_students = @$request->session()->get('form_3')['no_of_students'];
      else
       $no_of_students = 0;
      
       if($is_edit==1){ 
           
           DB::update("update int_session_complete set students_attendance = '".$students_attendance_str."'"
                   . ", student_behavior_info = '".$st_bh_info."', about_students='".$about_students_str."'"
                   . ", see_different = '".$request->input('see_different')."', stu_engaged = '".@$request->session()->get('form_3')['stu_engaged']."' "
                   . ", feedback_log = '".$feedback_log_serialize."', engaged_not_info = '".$engaged_not_info."', updated = '".$curr_time."'  where sessionid = '".$ses_id."' and tut_teacher_id = '".$tutor_id."'");
       }
       else
       {
          $feed_id =   DB::table('int_session_complete')->insertGetId([
                'is_complete' => 'yes',
                'is_attendance' => 1,
                'sessionid' => $ses_id,
                'students_attendance' => $students_attendance_str,
                'ses_start_time' => $ses_det->ses_start_time,
                'quiz_id' => $ses_det->quiz_id,
                'no_of_students' => $no_of_students,
                'school_id' => $ses_det->school_id,
                'teacher_id' => $ses_det->teacher_id,
                'tut_teacher_id' => $ses_det->tut_teacher_id,
                'student_behavior_info' => $st_bh_info,
                'about_students' => $about_students_str,
                'see_different' => $request->input('see_different'),
                'stu_engaged' => @$request->session()->get('form_3')['stu_engaged'],
                'feedback_log' => $feedback_log_serialize,
                'engaged_not_info' => $engaged_not_info,
                'created' => $curr_time

          ]);
       }
       
       if($is_edit==0){
           echo "update int_schools_x_sessions_log set paypal_email = '".$request->input('is_paypal_email')."', feedback_id ='".$feed_id."'  where id = ".$ses_id;
           DB::update("update int_schools_x_sessions_log set paypal_email = '".$request->input('is_paypal_email')."', feedback_id ='".$feed_id."'  where id = ".$ses_id);
       }
       
       $log_message = "Tutor <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> completed survey of  the session <strong>'.$ses_id.'</strong> by '.date("Y-m-d H:ia");
            DB::table('session_activity_logs')->insert([
                    'session_id' => $ses_id,
                    'user_type' => 'Tutor',
                    'log_message' => $log_message,
                    'created_at' => date("Y-m-d H:i:s")
                ]);
            
         $result_qq = DB::table('int_ses_feedback_questions')->get();
         foreach($result_qq as $row)
         {
             $qanswer = @$request->session()->get($row->form_step)['ans_opn_'.$row->id];
             $opn_other = ($qanswer == "Other") ? 'yes' : 'no';
             if($qanswer == "Other")
                $qanswer = @$request->session()->get($row->form_step)['ans_other_text_'.$row->id];
             
              if($is_edit==1){
                  DB::update("update int_ses_feedback_questions_answer set sessionid = '".$ses_id."', ques_id ='".$row->id."', answer = '".$qanswer."'"
                          . ", opn_other = '".$opn_other."', updated = '".date("Y-m-d H:i:s")."' where sessionid = '".$ses_id."' and tutor_id = '".$tutor_id."' and ques_id='".$row->id."'");
              }
              else
              {
                   DB::table('int_ses_feedback_questions_answer')->insert([
                    'sessionid' => $ses_id,
                    'ques_id' => $row->id,
                    'answer' => $qanswer,
                    'opn_other' => $opn_other,
                    'created' => date("Y-m-d H:i:s")
                ]);
              }
         }
         
         $request->session()->forget('form_1');
         $request->session()->forget('form_2');
         $request->session()->forget('form_3');
         $request->session()->forget('form_4');

        return redirect('complete_feedback')->with('success','Your feedback completed successfully');
    }
    
    public function cancel_observer_job(Request $request)
    {
        if($request->input('observer_job_id'))
        {
            $observer_jobs = ObserverSession::find($request->input('observer_job_id'));
        
            $ids = $observer_jobs->session_ids;
            $sessions = Session::whereIn('id', explode(",", $ids))->get();
            
            foreach($sessions as $ses_det)
            {
                $ses = Session::find($ses_det->id);
                $ses->braincert_board_url = NULL;
                $ses->tut_observer_id = NULL;
                $ses->save();
                
                DB::update('update int_slots_x_student_teacher set tut_observer_id = NULL, tut_admin_id = 0 where slot_id = '.$ses_det->id);
                DB::update('update observer_sessions_list set tutor_id = NULL, cancel_reason = "'.$request->input('CancellationReason').'" where id = '.$request->input('observer_job_id'));
            }
            
           return redirect()->route('observer_sessions')->with('success', 'The observer job cancelled successfully');
        }
        else
          return  redirect()->route('observer_sessions')->with('danger', 'The observer did not cancel');
     
        
        
    }
    
    public function observer_session_details(Request $request)
    {
        if($request->job_id)
        {
            $observer_jobs = ObserverSession::find($request->job_id);
        
            $ids = $observer_jobs->session_ids;
            $sessions = Session::whereIn('id', explode(",", $ids))->get();
            
           
            
            echo view('tutor_panel.observer_job_details', compact('sessions'));
        }
        
        
    }
    
    public function tutorJoinMerit(Request $request)
    {
       
        require_once $_SERVER['DOCUMENT_ROOT'].'/MeritHub/MeritHub.Function.php';
  
        if(isset($request->sid) && $request->sid > 0)
        {
            $token = getToken($ClientId, $ClientSecret);
            $Tutor_id = Auth::guard('tutor')->user()->id;
            $session  = Session::find($request->sid);

            DB::delete('delete from launch_ses_log where tutoring_id = ?',[$request->sid]);

            DB::table('launch_ses_log')->insert([
                    'tutoring_id' => $request->sid,
                    'tutor_id' => $Tutor_id,
                    'tutoring_end_at' => $session->ses_end_time,
                    'tutoring_start_date' => $session->ses_start_time,
                    'launch_at' => date("Y-m-d H:i:s")
                ]);

            $TutorDetail = Tutor::find($session->tut_teacher_id);
            $log_message = "Tutor <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> joined the session <strong>'.$request->sid.'</strong> by '.date("Y-m-d H:ia");
            DB::table('session_activity_logs')->insert([
                    'session_id' => $request->sid,
                    'user_type' => 'Tutor',
                    'log_message' => $log_message,
                    'created_at' => date("Y-m-d H:i:s")
                ]);


            $email = $TutorDetail->email;
            $MemberName = $TutorDetail->f_name.''.$TutorDetail->lname;
            $ClientUserId = $TutorDetail->id;
            $UserArrList = array(
               "name" => $MemberName,
               "title" => "Intervene Tutor",
               "img" => "https://dev.intervene.io/questions/student-icon.jpg",
               "desc" => "This is Intervene Tutor Add-In MeritHub Room",
               "lang" => "en",
               "clientUserId" => (string)$ClientUserId, 
               "email" => $email,
               "role" => "C",
               "timeZone" => "America/Chicago",
               "permission" => "CC");

            $UserData = json_encode($UserArrList);
            $ArrUser  = createUser($UserData, $token, $ClientId);

            $ArDupUser = DB::table('MeritHubUser');
            $DupCount  = $ArDupUser->count();
            if($DupCount > 0)
            {
                $ArDupUser = $ArDupUser->first();
                $tutorMeritID = $ArDupUser->MeritHubUser_ID;
            }
            else
            {
                DB::table('MeritHubUser')->insert([
                    'MeritHubUser_ID' => $ArrUser['userId'],
                    'InterveneTutor_ID' => $ClientUserId
                ]);

                $tutorMeritID = $ArrUser['userId'];
            }
        }
     
        if(!empty($tutorMeritID))
        {
            $r = DB::table('MeritHubClass')->where('sessionID', $request->sid)->first();
            
            $MeritHubClass_ID = $r->MeritHubClass_ID;
            $ClassLink        = $r->commonHostLink;
            $userID           = $tutorMeritID; 
            $urlArr           = enrollUser($token,$userID,$MeritHubClass_ID,$ClassLink, $ClientId);
            $url              = $urlArr[0]['userLink'];
            $rURL             = "https://live.merithub.com/info/device-test/$ClientId/$url";
            
           header("location: $rURL");
           exit;
        }
       
    }
    
    
    public function instructorJoinMerit(Request $request)
    {
       
        require_once $_SERVER['DOCUMENT_ROOT'].'/MeritHub/MeritHub.Function.php';
  
        if(isset($request->sid) && $request->sid > 0)
        {
            $token = getToken($ClientId, $ClientSecret);
            $Tutor_id = Auth::guard('tutor')->user()->id;
            $session  = Session::find($request->sid);

            DB::delete('delete from launch_ses_log where tutoring_id = ?',[$request->sid]);

            DB::table('launch_ses_log')->insert([
                    'tutoring_id' => $request->sid,
                    'tutor_id' => $Tutor_id,
                    'tutoring_end_at' => $session->ses_end_time,
                    'tutoring_start_date' => $session->ses_start_time,
                    'launch_at' => date("Y-m-d H:i:s")
                ]);

            $TutorDetail = Tutor::find($session->tut_observer_id);
            $log_message = "Observer <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> joined the session <strong>'.$request->sid.'</strong> by '.date("Y-m-d H:ia");
            DB::table('session_activity_logs')->insert([
                    'session_id' => $request->sid,
                    'user_type' => 'Observer',
                    'log_message' => $log_message,
                    'created_at' => date("Y-m-d H:i:s")
                ]);


            $email = $TutorDetail->email;
            $MemberName = $TutorDetail->f_name.''.$TutorDetail->lname;
            $ClientUserId = $TutorDetail->id;
            $UserArrList = array(
               "name" => $MemberName,
               "title" => "Intervene Tutor",
               "img" => "https://dev.intervene.io/questions/student-icon.jpg",
               "desc" => "This is Intervene Tutor Add-In MeritHub Room",
               "lang" => "en",
               "clientUserId" => (string)$ClientUserId, 
               "email" => $email,
               "role" => "C",
               "timeZone" => "America/Chicago",
               "permission" => "CC");

            $UserData = json_encode($UserArrList);
            $ArrUser  = createUser($UserData, $token, $ClientId);

            $ArDupUser = DB::table('MeritHubUser');
            $DupCount  = $ArDupUser->count();
            if($DupCount > 0)
            {
                $ArDupUser = $ArDupUser->first();
                $tutorMeritID = $ArDupUser->MeritHubUser_ID;
            }
            else
            {
                DB::table('MeritHubUser')->insert([
                    'MeritHubUser_ID' => $ArrUser['userId'],
                    'InterveneTutor_ID' => $ClientUserId
                ]);

                $tutorMeritID = $ArrUser['userId'];
            }
        }
     
        if(!empty($tutorMeritID))
        {
            $r = DB::table('MeritHubClass')->where('sessionID', $request->sid)->first();
            
            $MeritHubClass_ID = $r->MeritHubClass_ID;
            $ClassLink        = $r->commonHostLink;
            $userID           = $tutorMeritID; 
            $urlArr           = enrollUser($token,$userID,$MeritHubClass_ID,$ClassLink, $ClientId);
            $url              = $urlArr[0]['userLink'];
            $rURL             = "https://live.merithub.com/info/device-test/$ClientId/$url";
            
           header("location: $rURL");
           exit;
        }
       
    }
    
    public function send_message(Request $request)
    {
      
        if(!empty($request->input('msg')))
        {
            DB::table('inbox')->insert([
                    'sender_id' => Auth::guard('tutor')->user()->id,
                    'receiver_id' => 0,
                    'message' => $request->input('msg'),
                    'sender_type' => 'tutor',
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            
            return redirect()->route('messages')->with('success', 'You sent message successfully');
        }
    }
    
    public function update_profile(Request $request)
    {
       if($request->filled('email'))
       { 
          $tutor = Tutor::find(Auth::guard('tutor')->user()->id); 
          if ($request->input('password') != "" && $request->input('confirm_password') != "") 
          {
              if ($request->input('password') == $request->input('confirm_password')) 
              {
                    $tutor->f_name = $request->input('first_name');
                    $tutor->lname = $request->input('last_name');
                    $tutor->email = $request->input('email');
                    $tutor->password = md5($request->input('password'));
                    $tutor->phone = $request->input('phone');
                    $tutor->save();
              }
              else
                return redirect()->route('profile')->with('error', 'Password did not match');  
          }
          else
          {
                $tutor->f_name = $request->input('first_name');
                $tutor->lname = $request->input('last_name');
                $tutor->email = $request->input('email');
                $tutor->phone = $request->input('phone');
                $tutor->save();
          }
          
          if($request->hasFile('profile_avatar'))
          { 
           
            $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/avatar' .'/' . Auth::guard('tutor')->user()->id ; 
            $dir_contents = scandir($dir);
            foreach ($dir_contents as $file)
            {
               $profile_image =   $dir.'/'.$file;
               @unlink($profile_image);
            }

            $fileName = Auth::guard('tutor')->user()->id.'.'.$request->file('profile_avatar')->extension();  
            $path = asset('uploads/avatar').'/'.Auth::guard('tutor')->user()->id;
            $request->file('profile_avatar')->move($dir, $fileName);
            
          
          }
            return redirect()->route('profile')->with('success', 'Profile updated successfully');  
       }
       
    }
    
    
    public function submitClaim(Request $request)
    {
        if($request->sid)
        {
             $ses_det  = Session::find($request->sid);
             $tutor = Tutor::find(Auth::guard('tutor')->user()->id);
             $log_message = "Observer <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> claimed the session <strong>'.$request->sid.'</strong> by '.date("Y-m-d H:ia");
             DB::table('session_activity_logs')->insert([
                    'session_id' => $request->sid,
                    'user_type' => 'Tutor',
                    'log_message' => $log_message,
                    'created_at' => date("Y-m-d H:i:s")
                ]);
             
              $clss_id = $ses_det->braincert_class; 
              $drhomework_ses_id = $ses_det->drhomework_ref_id;
              $client_id = $ses_det->Tutoring_client_id;
              $session_time = $ses_det->ses_start_time;
              $time = strtotime($session_time);
              $startTime = date("Y-m-d H:i:s", strtotime('-55 minutes', $time));
              $endTime = date("Y-m-d H:i:s", strtotime('+55 minutes', $time));
              $tot_ses_in_55min = Session::where('ses_start_time','>', $startTime)->where('ses_start_time', '<', $startTime)->where('tut_teacher_id',Auth::guard('tutor')->user()->id)->count('id');
              if($tot_ses_in_55min>0)
                  return redirect()->route('job_board')->with('error', 'Session over lapped,Can not Claimed.');  
              
              if($ses_det->tut_teacher_id == 0){
                  if($ses_det['tut_observer_id'] == Auth::guard('tutor')->user()->id)
                      return redirect()->route('job_board')->with('error', 'You already assigned to this job as observer'); 
                  else
                  {
                      $ses_det->braincert_board_url = 'stoped';
                      $ses_det->tut_teacher_id = Auth::guard('tutor')->user()->id;
                      $ses_det->app_url = Auth::guard('tutor')->user()->url_aww_app;
                      $ses_det->tut_accept_time = date("Y-m-d H:i:s");
                      $ses_det->modified_date = date("Y-m-d H:i:s");
                      $ses_det->save();
                      
                      DB::update('update int_slots_x_student_teacher set tut_teacher_id = "'.Auth::guard('tutor')->user()->id.'", tut_admin_id = 1 where slot_id = '.$ses_det->id);
                      return redirect()->route('job_board')->with('success', 'You Accepted this session successfully'); 
                  }
              }
              else
                 return redirect()->route('job_board')->with('error', 'The job already assgined to another tutor.!');   
                  

        }
    }
    
    public function upload_teacher_certificate(Request $request)
    {
        $profile = DB::table('tutor_profiles')->where('tutorid', Auth::guard('tutor')->user()->id);
        $num = $profile->count();
        $profile = $profile->first();
        
        if($request->hasFile('teacher_certificate'))
        { 
          
            $dir = $_SERVER['DOCUMENT_ROOT'].'/teacher_certificate' ; 
            if($num == 1)
            {
                @unlink($dir.'/'.$profile->teacher_certificate);

            }

            $fileName = time().rand(1001,1111).$request->file('teacher_certificate')->getClientOriginalName();  
            $request->file('teacher_certificate')->move($dir, $fileName);
            
            DB::update('update tutor_profiles set teacher_certificate = "'.$fileName.'" where tutorid = '.Auth::guard('tutor')->user()->id);
          
        }
        
        if($request->hasFile('esl_certificate'))
        { 
           
            $dir = $_SERVER['DOCUMENT_ROOT'].'/teacher_certificate' ; 
            if($num == 1)
            {
                @unlink($dir.'/'.$profile->esl_certificate);

            }

            $fileName = time().rand(1001,1111).$request->file('esl_certificate')->getClientOriginalName();  
            $request->file('esl_certificate')->move($dir, $fileName);
            DB::update('update tutor_profiles set billingual_certificate = "'.$fileName.'" where tutorid = '.Auth::guard('tutor')->user()->id);
          
        }
        
        if($request->hasFile('billingual_certificate'))
        { 
           
            $dir = $_SERVER['DOCUMENT_ROOT'].'/teacher_certificate' ; 
            if($num == 1)
            {
                @unlink($dir.'/'.$profile->billingual_certificate);

            }

            $fileName = time().rand(1001,1111).$request->file('billingual_certificate')->getClientOriginalName();  
            $request->file('billingual_certificate')->move($dir, $fileName);
            DB::update('update tutor_profiles set esl_certificate = "'.$fileName.'" where tutorid = '.Auth::guard('tutor')->user()->id);
          
        }
        
        return redirect()->route('upload_certification')->with('success', 'Cerificate uploaded successfully'); 
        
    }
    
    public function deleteDocument(Request $request)
    {
        $profile = DB::table('tutor_profiles')->where('tutorid', Auth::guard('tutor')->user()->id)->whereNotNull($request->type);
        $num = $profile->count();
        $profile = $profile->first();
        if($num == 1)
        {
            $dir = $_SERVER['DOCUMENT_ROOT'].'/teacher_certificate' ; 
            if($request->type == 'teacher_certificate')
            {
              @unlink($dir.'/'.$profile->teacher_certificate);
              DB::update('update tutor_profiles set teacher_certificate = NULL where tutorid = '.Auth::guard('tutor')->user()->id);
            }
            elseif($request->type == 'billingual_certificate')
            {
              DB::update('update tutor_profiles set billingual_certificate = NULL where tutorid = '.Auth::guard('tutor')->user()->id);
            }
            elseif($request->type == 'esl_certificate')
            {
              @unlink($dir.'/'.$profile->esl_certificate);
              DB::update('update tutor_profiles set esl_certificate = NULL where tutorid = '.Auth::guard('tutor')->user()->id);
            }
            
            return redirect()->route('upload_certification')->with('success', 'Cerificate deleted successfully'); 
        }
        else
            return redirect()->route('upload_certification')->with('error', 'Cerificate deleted failed'); 
        
    }
    
    public function startTest(Request $request)
    {
        
         
         
          echo view('tutor_panel.start_exam_test');
    }
    
    public function submit_test_question(Request $request)
    {
    
       if($request->input('next') == 'Next')
       {
            $given_qn = $request->input('question_id');
            $created = date('Y-m-d H:i:s');

            $qreal = DB::connection('mysql_2')->table('questions')->where('ID', $given_qn)->first();
            $actual_ans_id = $qreal->AnswerID;
            $optiona_arr   = explode(',', $qreal->OptionIDs);
            $choose_opn_number = $request->input('answer');
            $attempt_opn_id = $optiona_arr[$choose_opn_number];

            if($request->input('answer') == "0" || $request->input('answer') > 0) 
            { 
                $flip_array = array_flip($request->session()->get('assessment')['qn_list']);
                $given_qn   = $request->input('question_id');
                $answer     = $request->input('answer');
                $gievn_questions = DB::connection('mysql_2')->table('questions')->where('ID', $given_qn)->first(); 

                $gievn_questions_ans = unserialize(@$gievn_questions->answers);

                $cur_test_id = $request->session()->get('assessment')['assessment']['ses_test_id'];
                $qn_num_result = DB::connection('mysql_2')->table('tutor_result_logs')->where('qn_id', $given_qn)->where('test_id',$cur_test_id)->first(); 
                $num = $qn_num_result->num; 
                $correct = @$gievn_questions_ans[$answer]['corect']; 
                $distractor = @$gievn_questions_ans[$answer]['explain']; 
                $distractor = $distractor ? $distractor : 0;
                $pos = $flip_array[$given_qn] + 1;

                DB::connection('mysql_2')->delete("delete from tutor_result_logs where qn_id = '".$given_qn."' AND tutor_id = '".Auth::guard('tutor')->user()->id."' AND test_id = '".$cur_test_id."'");
                if(empty($num))
                   $num = 0; 


                 DB::connection('mysql_2')->table('tutor_result_logs')->insert([
                         'tutor_id' => Auth::guard('tutor')->user()->id,
                         'test_id' => $cur_test_id,
                         'qn_id' => $given_qn,
                         'num' => $num,
                         'answer_id' => $actual_ans_id,
                         'attempt_id' => $attempt_opn_id,
                         'answer' => $answer,
                         'corrected' => ($correct ? $correct : 0),
                         'test_type' => '0',
                         'created' => date("Y-m-d H:i:s")
                     ]);

                 return redirect('tutor/start_test?pos='.$request->input('ques_no'))->with('error', 'Please select an answer');
            }  
            else
            {
               return redirect('tutor/start_test')->with('error', 'Please select an answer');
            }

         }
         else
         {
             $pass_status = null;
             $cur_test_id = $request->session()->get('assessment')['assessment']['ses_test_id'];
             
             $get_result = DB::connection('mysql_2')->table('tutor_result_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('test_id',$cur_test_id); 
             $total_attempted = $get_result->count();
             $get_result = $get_result->get();
             $correct=0;
             foreach($get_result as $row)
             {
                  if($row->answer_id == $row->attempt_id){
                    $correct = $correct+1;
                  } 
             }
             
             $get_scored = ($correct*100)/$total_attempted;
             $get_scored = round($get_scored,2);
             
             $request->session()->put('ses_curr_scored', $get_scored);
             
             $get_test_result = DB::connection('mysql_2')->table('tests')->where('ID', $cur_test_id)->first();
             $per_passing = $get_test_result->PassingMark;
             
         

            if($get_scored>=$per_passing){
               $pass_status='pass';
            }else{
               $pass_status='fail';
            }
            
            DB::connection('mysql_2')->update("update tutor_tests_logs set  status = 'completed',per_scored='$get_scored', per_passing='$per_passing',pass_status='$pass_status' where tutor_id = '".Auth::guard('tutor')->user()->id."' AND quiz_test_id = '".$cur_test_id."'");
            
            $tutor_det = Tutor::find(Auth::guard('tutor')->user()->id);
            if($pass_status == 'pass'){
                $pass_count = $tutor_det->total_pass_quiz+1;
            }else{
                $pass_count = $tutor_det->total_pass_quiz; 
              }
              
            $test_result_data = DB::connection('mysql_2')->table('tests')->where('ID', $cur_test_id)->first();
            $quiz_type = $test_result_data->Name;

            $created = date("Y-m-d H:i:s");
             DB::connection('mysql_2')->table('tutor_tests_logs')->insert([
                    'tutor_id' => Auth::guard('tutor')->user()->id,
                    'test_type' => $quiz_type,
                    'school_id' => 0,
                    'quiz_test_id' => $cur_test_id,
                    'completion_date' => date("Y-m-d H:i:s"),
                    'status' => 'completed',
                    'assigned_date' => date("Y-m-d H:i:s")
                ]);
             
            $tutor_det->quiz_1_status = 'completed';
            $tutor_det->total_pass_quiz = $pass_count;
            $tutor_det->quiz_1_id = $cur_test_id;
            $tutor_det->save();
            
            $request->session()->put('test_exam_result_id', $cur_test_id);
            $request->session()->forget('assessment');
            
            return redirect('tutor/tutor_quiz_result');
            
         }
    }
    public function tutor_quiz_result(Request $request)
    {
         $passing_percent = 70;
         $tutorid = Auth::guard('tutor')->user()->id;
             
         $cur_test_id = $request->session()->get('test_exam_result_id');
         $get_result = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('quiz_test_id',$cur_test_id); 
         $rowcount = $get_result->count();
             
         $get_result = $get_result->get();
         
         $test_arr = array();
         foreach($get_result as $row)
         {
                  if($row->status == 'completed'){ 
                     $test_arr[$row->quiz_test_id] = $row;
                  }
         }
             
         $completed_attempt = count($test_arr); 
         $state_arr['total_attempted'] = $completed_attempt;
         
         
         if($state_arr['total_attempted'] == 1)
         {
          
            $row = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id',$tutorid)->first();
         
            if($row->test_type == "math")
            {
               $state_arr['type_math'] = 'inactive';
               $state_arr['type_english'] = 'active';
            }

            if($row->test_type == "english"){
              $state_arr['type_math'] = 'active';
              $state_arr['type_english'] = 'inactive';
            }


         }
         if($state_arr['total_attempted'] == 2){  

           $state_arr['type_math'] = 'inactive';
           $state_arr['type_english'] = 'inactive';
           $state_arr['both_quiz_done'] = 'yes';
         }
         
        
         $sql_completed = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('quiz_test_id',$cur_test_id)->where('status', 'completed'); 
         $total_test = $sql_completed->count();
         $row = $sql_completed->first();
         $test_id = $row->quiz_test_id;
         
         $get_result = DB::connection('mysql_2')->table('tutor_result_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('test_id',$cur_test_id); 
         $total_attempted = $get_result->count();
         $get_result = $get_result->get();
         $correct=0;
         foreach($get_result as $row)
         {
                  if($row->answer_id == $row->attempt_id){
                    $correct = $correct+1;
                  } 
         }
         
         $get_test_result = DB::connection('mysql_2')->table('tests')->where('ID', $cur_test_id)->first();
         $passing_percent = $get_test_result->PassingMark;
         
         $get_scored = ($correct*100) / $total_attempted;
         $get_scored = round($get_scored,2);
         if($get_scored >= $passing_percent)
         {
             $passing_status = 'Pass';
         }
         elseif($completed_attempt == 1 && $get_scored < $passing_percent){ 
             
             $tutor = Tutor::find(Auth::guard('tutor')->user()->id);
             $tutor->all_state_url = 'rejected_application.php';
             $tutor->status_from_admin = 'failed';
             $tutor->save();
             
             $passing_status = 'Failed';
         }
         
         
         echo view('tutor_panel.exam_test_result' , compact('get_scored', 'passing_status'));
    }

    /**
        **@param Illuminate\Http\Request $request
        *View For Multiple Session 
    */
    public function claimMultiple(Request $request){
        $curr_time = date("Y-m-d H:i:s");
        $tutor_id = Auth::guard('tutor')->user()->id;
       
        /*$repeatSession = MainSessionRepeat::with(
        [
            "sessions" => function($query){
            return $query->where('ses_start_time','>',date("Y-m-d H:i:s"))
            ->where("tut_teacher_id",'=',0)
            ->select('id','ses_start_time','tut_teacher_id','ses_end_time','curr_active_board','is_drhomework','lesson_id','student_ids','main_session_repeat_id');
           },
           "district" => function($q){
            return $q->select("district_name","id");
           },
           "school" => function($q){
            return $q->select("SchoolName","SchoolId");
           },
           "grade" => function($q){
            return $q->select("name","id");
           },
       ])*/
        $repeatSession = MainSessionRepeat::query()
                        ->withCount(['sessions' => function($q) use($curr_time) {
                            return $q->where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time)->where('board_type', 'MeritHub');
                        }])
                        ->where("end_date",">=",date("Y-m-d"));

        if(isset($request->from_date)){
            $repeatSession = $repeatSession->where('end_date','>=',$request->from_date);
        }
        if(isset($request->to_date)){

            $repeatSession = $repeatSession->where('end_date','<=',$request->to_date); 
        }
        if(isset($request->time_from)){

            $repeatSession = $repeatSession->where('start_time','>=',$request->time_from);  
        }
        if(isset($request->time_to)){
            $repeatSession = $repeatSession->where('start_time','<=',$request->time_to); //dd("ok");
        }

       $data['repeatSession'] = $repeatSession->get();
       $tutor_sessions = Session::where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time)->where('board_type', 'MeritHub');

      $data['total_tutor_sessions'] = $tutor_sessions->count('id');

      $data['tutor_sessions'] = $tutor_sessions->orderBy('created_date', 'desc')->paginate(25);
       
      $data['tutor_profile'] = DB::table('tutor_profiles')->where('tutorid', $tutor_id)->first();
       return view('tutor_panel.session.claim_multiple_session',$data);
    }


    public function repeatSessionDetail(MainSessionRepeat $MainSessionRepeat){
        $data['title'] = 'Session Detail';
        $data['MainSessionRepeat'] = $MainSessionRepeat;
       return view('tutor_panel.session.repeat_session_detail',$data);
    }

    public function claimRepeatSessionDetail(Request $request, MainSessionRepeat $MainSessionRepeat){
        $sids = [];
        if(isset($request->selected_all)){
            $sids = $MainSessionRepeat->sessions->where('ses_start_time', '>' , date("Y-m-d H:i:s"))->where('tut_teacher_id', 0)->pluck('id');
        }else if(isset($request->form_ids) && !empty($request->form_ids)){
            $sids = explode(',',$request->form_ids);
        }
        if(empty($sids)){
            return redirect()->back()->withError("No Session selected to claim...");
        }
        foreach($sids as $sid){
            $s = $this->ClaimSession($sid);
        }
        if(!empty($this->errors)){
            return redirect()->back()->with(['success'=> 'Session claimed successfully...', 's_error'=> $this->errors]);
        }
        return redirect()->back()->with(['success'=> 'Session claimed successfully...']);
    }


    private function ClaimSession($sid)
    {
        if($sid)
        {
             $ses_det  = Session::find($sid);
             $tutor = Tutor::find(Auth::guard('tutor')->user()->id);
             $log_message = "Observer <strong>".Auth::guard('tutor')->user()->f_name.' '.Auth::guard('tutor')->user()->lname.'</strong> claimed the session <strong>'.$sid.'</strong> by '.date("Y-m-d H:ia");
             DB::table('session_activity_logs')->insert([
                    'session_id' => $sid,
                    'user_type' => 'Tutor',
                    'log_message' => $log_message,
                    'created_at' => date("Y-m-d H:i:s")
                ]);
             
              $clss_id = $ses_det->braincert_class; 
              $drhomework_ses_id = $ses_det->drhomework_ref_id;
              $client_id = $ses_det->Tutoring_client_id;
              $session_time = $ses_det->ses_start_time;
              $time = strtotime($session_time);
              $startTime = date("Y-m-d H:i:s", strtotime('-55 minutes', $time));
              $endTime = date("Y-m-d H:i:s", strtotime('+55 minutes', $time));
              $tot_ses_in_55min = Session::where('ses_start_time','>', $startTime)->where('ses_start_time', '<', $startTime)->where('tut_teacher_id',Auth::guard('tutor')->user()->id)->count('id');
              if($tot_ses_in_55min>0){
                $this->errors[] = $sid.' Session over lapped,Can not Claimed.';
              }
              if($ses_det->tut_teacher_id == 0){
                  if($ses_det['tut_observer_id'] == Auth::guard('tutor')->user()->id)
                      $this->errors[] = $sid.' You already assigned to this job as observer';
                  else
                  {
                      $ses_det->braincert_board_url = 'stoped';
                      $ses_det->tut_teacher_id = Auth::guard('tutor')->user()->id;
                      $ses_det->app_url = Auth::guard('tutor')->user()->url_aww_app;
                      $ses_det->tut_accept_time = date("Y-m-d H:i:s");
                      $ses_det->modified_date = date("Y-m-d H:i:s");
                      $ses_det->save();
                      
                      DB::update('update int_slots_x_student_teacher set tut_teacher_id = "'.Auth::guard('tutor')->user()->id.'", tut_admin_id = 1 where slot_id = '.$ses_det->id);
                      return true;
                  }
              }
              else{
                $this->errors[] = $sid.' The job already assgined to another tutor.!'; 
                return true; 
              }
                  

        }
    }
 
}
