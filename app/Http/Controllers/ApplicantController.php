<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Tutor;
use App\Admin;
use App\Session;
use App\Student;
use App\TutorProfile;
use Image;
use PDF;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Tutor::where('all_state', 'No')->where('all_state_url', '!=', 'application.php');
        $total_applicants = $applicants->count();
        $applicants = $applicants->get();
        
        echo view('admin.manage_applicant', compact('applicants', 'total_applicants'));
    }
    
    public function Accept($id, Request $request)
    {
       $getid = $id;
       $next_state_url = "application_status.php";
       $next_state_url = "background_checks.php";
       
        $tutor_stages_arr = array('application' =>1, 
                        'quiz' => 1,
                        'interview' =>1,
                        'background_checks' => 0,
                        'payment_info' => 0,
                         'legal_stuff' => 0,
                        'training' =>0);
        
        $regis_state_str = serialize($tutor_stages_arr);
        
        $tutor = Tutor::find($getid);
        $tutor->signup_state = $tutor_stages_arr;
        $tutor->application = 1;
        $tutor->quiz = 1;
        $tutor->interview = 1;
        $tutor->all_state_url = $next_state_url;
        $tutor->status_from_admin = 'background_checks_pending';
        $tutor->save();
        
        return redirect('manage_applicant')->with('success', 'Interview accepted');
    }
    
    public function Reject($id, Request $request)
    {
       $getid = $id;
       $next_state_url='rejected_application.php';
       
       
        $tutor = Tutor::find($getid);
       
        $tutor->all_state_url = $next_state_url;
        $tutor->status_from_admin = 'interview_rejected';
        $tutor->save();
        
        return redirect('manage_applicant')->with('success', 'Interview rejected');
    }
    
    public function background_check_settings(Request $request)
    {
       $getid = $request->input('applicant_id');
       $next_state_url="application_status.php"; // Complted
       $next_state_url="background_checks.php";
       
        $tutor_stages_arr= array('application' =>1, // Application OK
                        'quiz' => 1,
                        'interview' =>1,
                        'background_checks' =>1,
                        'payment_info' => 0,
                         'legal_stuff' => 0,
                        'training' =>0);// 
         if($request->input('status') == 'Accept')
         {
             $regis_state_str=serialize($tutor_stages_arr);
             $next_state_url="payment_info.php";
        
            $tutor = Tutor::find($getid);
            $tutor->signup_state = $regis_state_str;
            $tutor->background_checks = 1;
            $tutor->quiz = 1;
            $tutor->interview = 1;
            $tutor->all_state_url = $next_state_url;
            $tutor->status_from_admin = 'pending';
            $tutor->save();
            return redirect('manage_applicant')->with('success', 'Accepted for background check');
         }
         elseif($request->input('status') == 'Reject')
         {
             $tutor = Tutor::find($getid);
       
            $tutor->status_from_admin = 'interview_rejected';
            $tutor->save();

            return redirect('manage_applicant')->with('success', 'Rejected application');
         }
        
        
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($id, Request $request)
    {
      
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
       
    }
}
