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

class TutorController extends Controller
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
    public function tutorList()
    {
        
        
        $tutors = Tutor::where('all_state','yes')->orderBy('created_date', 'desc')->get();
        
        return view('tutor.tutor_list', compact('tutors'));
    }
    
    public function editTutor(Request $request)
    {
        
        $tutor = Tutor::find($request->id);
        
        
        return view('tutor.edit_tutor', compact('tutor'));
    }
    
    public function postTutor(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname  = $request->input('lastname');
        $email     = $request->input('email');
        $phone     = $request->input('phone');
        $password  = $request->input('password');
        $address   = $request->input('home_address');
        $paypal_email = $request->input('paypal_email');
        $paypal_phone = $request->input('paypal_phone');
        
        if(!empty($request->input('SpecialtySubjects')))
         $SpecialtySubjects = implode (",", $request->input('SpecialtySubjects'));
        
        $is_exist = Tutor::where('email', $email)->count('id');
        if($is_exist)
            return redirect('tutor_list')->with('error','The email you given already existed');
        else
        {
            $tutor = new Tutor;
            $tutor->f_name = $firstname;
            $tutor->lname  = $lastname;
            $tutor->email  = $email;
            $tutor->password = md5($password);
            $tutor->email_confirm = 1;
            $tutor->all_state = 'yes';
            $tutor->status_from_admin = 'all_application_state_approved';
            $tutor->status = 1;
            $tutor->home_address = $address;
            $tutor->phone = $phone;
            $tutor->payment_em = $paypal_email;
            $tutor->payment_phone = $paypal_phone;
            $tutor->SpecialtySubjects = $SpecialtySubjects;
            $tutor->created_date = date("Y-m-d H:i:s");
            
            $insert = $tutor->save();
            if($insert)
                return redirect('tutor_list')->with('success','The teacher addedd successfully');
            else
                return redirect('tutor_list')->with('error','The has not been added');
            
        }
        
    }
    
    
    public function postEditTutor(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname  = $request->input('lastname');
        $email     = $request->input('email');
        $phone     = $request->input('phone');
        $password  = $request->input('password');
        $address   = $request->input('home_address');
        $paypal_email = $request->input('paypal_email');
        $paypal_phone = $request->input('paypal_phone');
        
        if(!empty($request->input('SpecialtySubjects')))
         $SpecialtySubjects = implode (",", $request->input('SpecialtySubjects'));
        
        $is_exist = Tutor::where('email', $email)->where('id', '!=', $request->input('tutor_id'))->count('id');
        if($is_exist)
            return redirect('tutor_list')->with('error','The email you given already existed');
        else
        {
            $tutor = Tutor::find($request->input('tutor_id'));
            $tutor->f_name = $firstname;
            $tutor->lname  = $lastname;
            $tutor->email  = $email;
            $tutor->home_address = $address;
            $tutor->phone = $phone;
            $tutor->payment_em = $paypal_email;
            $tutor->payment_phone = $paypal_phone;
            $tutor->SpecialtySubjects = $SpecialtySubjects;
            $tutor->created_date = date("Y-m-d H:i:s");
            
            $insert = $tutor->save();
            if($insert)
                return redirect('tutor_list')->with('success','The teacher updated successfully');
            else
                return redirect('tutor_list')->with('error','The has not been updated');
            
        }
        
    }
    
    public function deleteTutor(Request $request)
    {
     
        $profile = TutorProfile::where('tutorid', $request->tutor_id)->count('id');
        if(@count($profile))
           TutorProfile::where('tutorid', $request->tutor_id)->delete();
      
        $tutor = Tutor::where('id',$request->tutor_id)->delete();
        
        if($tutor)
            return redirect('tutor_list')->with('success','The teacher deleted successfully');
        else
            return redirect('tutor_list')->with('error','The has not been deleted');
    }
    
    public function tutorSessionList(Request $request)
    {
        
        $start_date = date("Y-m-d H:i:s");
        $sessions = DB::table('int_schools_x_sessions_log');
        $session_type = 'all';
        
        if($request->session_type)
        {
            $session_type = $request->session_type;
            if($session_type == 'past')
                $sessions = $sessions->where('ses_start_time', '<', $start_date);
            elseif($session_type=="upcoming")
                $sessions = $sessions->where('ses_start_time', '>', $start_date);
                
        }
        else
          $sessions = $sessions->where('ses_start_time', '>', $start_date);
        
        $sessions = $sessions->where('curr_active_board', 'MeritHub')->orderBy('ses_start_time', 'desc')->paginate(25);
       
      
        return view('tutor.tutor_session_list', compact('sessions','session_type'));
    }
    
    
    // Tutor deatils / application details page of tutor
    public function tutorDetail(Request $request)
    {
        
        $tdata = $tutor_det = Tutor::find($request->tid);
        $data2 = TutorProfile::where('tutorid', $request->tid)->first();
        
        
        return view('tutor.tutor_detail', compact('tdata','tutor_det', 'data2'));
    }
    
    // Tutor deatils / application details page of tutor
    public function applicantDetail(Request $request)
    {
        
        $tdata = $tutor_det = Tutor::find($request->tid);
        $data2 = TutorProfile::where('tutorid', $request->tid)->first();
        
        
        return view('tutor.applicant_detail', compact('tdata','tutor_det', 'data2'));
    }
    
    public function downloadPDFApplicant(Request $request)
    {
        $tdata = $tutor_det = Tutor::find($request->tid);
        $data2 = TutorProfile::where('tutorid', $request->tid)->first();
        
        $pdf = PDF::loadView('tutor.pdf_applicant_detail', compact('tdata','tutor_det', 'data2'));
        $pdf->setPaper('A4', 'landscape'); 
              
         // return view('invoice', compact('transactions', 'product','from_date', 'to_date')); exit;
            return $pdf->download('applicant_detail.pdf');
    }
    
    public function downloadPDFw9(Request $request)
    {
        $tdata = $tutor_det = $tutor_det = Tutor::find($request->tid);
        $data2 = TutorProfile::where('tutorid', $request->tid)->first();
        
        $get_state_arr = ($tutor_det->all_state == 'no') ? $tutor_det->all_state_url:'home.php'; 
       
        if($get_state_arr == 'legal_stuff.php')
             $pdf = PDF::loadView('tutor.pdf_legal_content_detail', compact('tdata','tutor_det', 'data2'));
         else
         {
          
             $pdf = PDF::loadView('tutor.pdf_w9_detail', compact('tdata','tutor_det', 'data2'));
               
         }
        
        $pdf->setPaper('A4', 'landscape'); 
              
         // return view('invoice', compact('transactions', 'product','from_date', 'to_date')); exit;
            return $pdf->download('statement.pdf');
    }
 
}
