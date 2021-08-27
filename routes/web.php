<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::match(['GET','POST'],'/hellosign',function(){
 echo "Hello API Event Received";
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);;
Route::get('/', function () {return view('home'); });
Route::get('login', function () { return view('login'); });
Route::get('signup', function () { return view('signup'); });
Route::post('postLogin','App\Http\Controllers\AuthController@postLogin' );
Route::post('submit_signup','App\Http\Controllers\AuthController@submit_signup' );
Route::get('session_details/{sid}','App\Http\Controllers\AdminController@sessionDetail' );
Route::get('create_session',function () { return view('create_session'); });
Route::get('add-assesment-rule',function () { return view('add_assesment_rule'); });
Route::get('assesment-rule-list', function(){ return view('assesment_rule_list'); });
Route::get('ajax_laoding_data','App\Http\Controllers\AdminController@ajax_laoding_data');


  Route::group(['middleware' => ['admin']], function () {
    
    Route::get('dashboard','App\Http\Controllers\AdminController@dashboard' );
    Route::get('tutor_list','App\Http\Controllers\TutorController@tutorList' );
    Route::get('add_tutor', function () { return view('tutor.add_tutor'); });
    Route::post('post_tutor','App\Http\Controllers\TutorController@postTutor' );
    Route::post('post_edit_tutor','App\Http\Controllers\TutorController@postEditTutor' );
    Route::get('edit-tutor/{id}','App\Http\Controllers\TutorController@editTutor' );
    Route::get('edit_tutor/{id}','App\Http\Controllers\TutorController@editTutor' );
    Route::get('edit-admintutor/{id}','App\Http\Controllers\TutorController@editTutor' );
    Route::get('delete_tutor/{tutor_id}','App\Http\Controllers\TutorController@deleteTutor' );
    Route::any('tutor_session_list','App\Http\Controllers\TutorController@tutorSessionList' );
    Route::get('tutor_detail/{tid}','App\Http\Controllers\TutorController@tutorDetail' );
    Route::get('applicant_detail/{tid}','App\Http\Controllers\TutorController@applicantDetail' );
    Route::get('pdf_applicant_download/{tid}','App\Http\Controllers\TutorController@downloadPDFApplicant' );
    Route::get('w9_pdf_download/{tid}','App\Http\Controllers\TutorController@downloadPDFw9' );
    Route::post('post_edit_score','App\Http\Controllers\TutorController@post_edit_score' );
   
    
    Route::any('cancelled_sessions','App\Http\Controllers\AdminController@cancelledSession' )->name('cancelled_sessions');
    Route::post('post_resolved_session','App\Http\Controllers\AdminController@postResolvedSession' )->name('post_resolved_session');
    Route::any('booked_unbooked_sessions','App\Http\Controllers\AdminController@bookedUnbookedSession' )->name('booked_unbooked_sessions');
    Route::get('jobs_board','App\Http\Controllers\AdminController@jobsBoard' )->name('jobs_board');
    Route::get('payment_history','App\Http\Controllers\AdminController@paymentHistory' )->name('payment_history');
    Route::get('payment_history_paid','App\Http\Controllers\AdminController@paymentHistoryPaid' )->name('payment_history_paid');
    Route::get('view_session_details/{sid}','App\Http\Controllers\AdminController@sessionFullDetails' );
    Route::get('observer_Sessions','App\Http\Controllers\AdminController@observerSessions' )->name('observer_Sessions');
    Route::get('suspended_sessions','App\Http\Controllers\AdminController@suspendedSessions' )->name('suspended_sessions');
    Route::get('training_management','App\Http\Controllers\AdminController@trainingManagement' )->name('training_management');
    Route::get('delete_training_management/{id}','App\Http\Controllers\AdminController@delete_training_management' );
    Route::post('upload_training_file','App\Http\Controllers\AdminController@upload_training_file' );
    Route::get('tutor_message','App\Http\Controllers\AdminController@tutorMessage' )->name('tutor_message');
    Route::get('broadcast_message','App\Http\Controllers\AdminController@broadcastMessage' )->name('broadcast_message');
    Route::get('session_log_history','App\Http\Controllers\AdminController@session_log_history' )->name('session_log_history');
    Route::get('download_survey_report', function () { return view('admin.download_survey_report'); })->name('download_survey_report');
    Route::get('certification_list','App\Http\Controllers\TutorController@certification_list' )->name('certification_list');
    Route::get('manage_certificate/{tutor_id}','App\Http\Controllers\TutorController@manage_certificate' );
    Route::post('upload_teacher_certificate','App\Http\Controllers\TutorController@upload_teacher_certificate' );
    

 
    
    
    Route::resource('manage_applicant','App\Http\Controllers\ApplicantController' );
    Route::get('manage_applicant/{id}/Accept','App\Http\Controllers\ApplicantController@Accept' );
    Route::get('manage_applicant/{id}/Reject','App\Http\Controllers\ApplicantController@Reject' );
    Route::post('background_check_settings','App\Http\Controllers\ApplicantController@background_check_settings' );
    
    Route::get('view_applicant','App\Http\Controllers\AdminController@view_applicant' )->name('view_applicant');
    Route::get('applicant_details','App\Http\Controllers\AdminController@applicant_details' )->name('applicant_details');
    Route::get('backgroud_checking','App\Http\Controllers\AdminController@backgroud_checking' )->name('backgroud_checking');
    Route::get('session_view','App\Http\Controllers\AdminController@session_view' )->name('session_view');
    Route::get('admin_profile','App\Http\Controllers\AdminController@admin_profile' )->name('admin_profile');
    Route::get('calendar','App\Http\Controllers\AdminController@calendar' )->name('calendar');
    Route::get('cal_ses_details','App\Http\Controllers\AdminController@cal_ses_details' )->name('cal_ses_details');
    Route::get('manage_admins','App\Http\Controllers\AdminController@manage_admins' )->name('manage_admins');
    Route::get('edit_admin/{id}','App\Http\Controllers\AdminController@editAdmin' );
    Route::post('post_admin','App\Http\Controllers\AdminController@postAdmin' );
    Route::post('post_edit_admin','App\Http\Controllers\AdminController@postEditAdmin' );
    Route::get('delete_admin/{id}','App\Http\Controllers\AdminController@deleteAdmin' );
    Route::get('new_admin', function () { return view('admin.new_admin'); })->name('new_admin');
    Route::get('edit_admin','App\Http\Controllers\AdminController@edit_admin' )->name('edit_admin');
    Route::get('manage_observer_job','App\Http\Controllers\AdminController@manage_observer_job' )->name('manage_observer_job');
    Route::get('admin/manage_sessions/{ses_id}','App\Http\Controllers\AdminController@manage_sessions' );
    Route::get('admin/instructor_join_roomMerit/{sid}','App\Http\Controllers\AdminController@instructorJoinMerit' );
    
         

    
});

 Route::group(['middleware' => ['tutor']], function () {
    Route::group(['prefix'=>'tutor/session/'], function(){
        Route::get('claim-multiple-sessions','App\Http\Controllers\Tutor\DashboardController@claimMultiple')->name('tutor.claim.multiple.session');
        Route::get('recuring/{main_session_repeat}','App\Http\Controllers\Tutor\DashboardController@repeatSessionDetail')->name('tutor.session.repeat.detail');
        Route::post('recuring/{main_session_repeat}','App\Http\Controllers\Tutor\DashboardController@claimRepeatSessionDetail')->name('tutor.claim_session.repeat.detail');
    });
   
     
     Route::get('tutor/dashboard','App\Http\Controllers\Tutor\DashboardController@dashboard' );
     Route::get('tutor/job_board','App\Http\Controllers\Tutor\DashboardController@jobBoard' )->name('job_board');
     Route::get('tutor/observer_job_board','App\Http\Controllers\Tutor\DashboardController@observerJobBoard' )->name('observer_job_board');
     Route::any('tutor/tutor_sessions','App\Http\Controllers\Tutor\DashboardController@tutorSessions' )->name('tutor_sessions');
     Route::get('tutor/observer_sessions','App\Http\Controllers\Tutor\DashboardController@observerSessions' )->name('observer_sessions');
     Route::get('tutor/manage_observer_jobs/{id?}','App\Http\Controllers\Tutor\DashboardController@manageObserverJobs' )->name('manage_observer_jobs');
     Route::get('tutor/complete_sessions','App\Http\Controllers\Tutor\DashboardController@completeSessions' )->name('complete_sessions');
     Route::get('tutor/payment_list','App\Http\Controllers\Tutor\DashboardController@paymentList' )->name('payment_list');
     Route::get('tutor/messages','App\Http\Controllers\Tutor\DashboardController@messages' )->name('messages');
     Route::get('tutor/profile','App\Http\Controllers\Tutor\DashboardController@profile' )->name('profile');
     Route::get('tutor/notification','App\Http\Controllers\Tutor\DashboardController@notification' )->name('notification');
     Route::get('tutor/get_qualification','App\Http\Controllers\Tutor\DashboardController@getQualification' )->name('get_qualification');
     Route::get('tutor/upload_certification','App\Http\Controllers\Tutor\DashboardController@upload_certification' )->name('upload_certification');
     Route::get('tutor/job_calendar','App\Http\Controllers\Tutor\DashboardController@jobCalendar' )->name('job_calendar');
     
     
     Route::get('tutor/post_feedback/{sid}','App\Http\Controllers\Tutor\DashboardController@postFeedback' )->name('post_feedback');
     Route::get('tutor/post_feedback_2','App\Http\Controllers\Tutor\DashboardController@postFeedback_2' )->name('post_feedback_2');
     Route::get('tutor/post_feedback_3','App\Http\Controllers\Tutor\DashboardController@postFeedback_3' )->name('post_feedback_3');
     Route::get('tutor/post_feedback_4','App\Http\Controllers\Tutor\DashboardController@postFeedback_4' )->name('post_feedback_4');
     Route::post('tutor/submit_feedback_1','App\Http\Controllers\Tutor\DashboardController@submit_feedback_1' )->name('submit_feedback_1');
     Route::post('tutor/submit_feedback_2','App\Http\Controllers\Tutor\DashboardController@submit_feedback_2' )->name('submit_feedback_2');
     Route::post('tutor/submit_feedback_3','App\Http\Controllers\Tutor\DashboardController@submit_feedback_3' )->name('submit_feedback_3');
     Route::post('tutor/submit_feedback_4','App\Http\Controllers\Tutor\DashboardController@submit_feedback_4' )->name('submit_feedback_4');
     Route::get('complete_feedback', function () { return view('tutor_panel.complete_feedback'); });
     
     
     Route::post('tutor/cancel_session','App\Http\Controllers\Tutor\DashboardController@cancelSession' )->name('cancel_session');
     Route::post('tutor/cancel_observer_job','App\Http\Controllers\Tutor\DashboardController@cancel_observer_job' )->name('cancel_observer_job');
     Route::get('tutor/observer_session_details/{job_id?}','App\Http\Controllers\Tutor\DashboardController@observer_session_details' )->name('observer_session_details');
     Route::get('tutor/tutor_join_roomMerit/{sid}','App\Http\Controllers\Tutor\DashboardController@tutorJoinMerit' );
     Route::get('tutor/instructor_join_roomMerit/{sid}','App\Http\Controllers\Tutor\DashboardController@instructorJoinMerit' );
     Route::get('tutor/claim_observer_job/{id}','App\Http\Controllers\Tutor\DashboardController@claimObserverJob' );
     Route::post('tutor/send_message','App\Http\Controllers\Tutor\DashboardController@send_message' )->name('send_message');
     Route::post('tutor/update_profile','App\Http\Controllers\Tutor\DashboardController@update_profile' )->name('update_profile');
     Route::get('tutor/submit_claim/{sid?}','App\Http\Controllers\Tutor\DashboardController@submitClaim' )->name('submit_claim');
     Route::post('tutor/upload_teacher_certificate','App\Http\Controllers\Tutor\DashboardController@upload_teacher_certificate' )->name('upload_teacher_certificate');
     Route::get('tutor/delete_document/{type?}','App\Http\Controllers\Tutor\DashboardController@deleteDocument' );
     Route::get('tutor/start_test/{test_id?}','App\Http\Controllers\Tutor\DashboardController@startTest' );
     Route::post('tutor/submit_test_question','App\Http\Controllers\Tutor\DashboardController@submit_test_question' );
     Route::get('tutor/tutor_quiz_result','App\Http\Controllers\Tutor\DashboardController@tutor_quiz_result' );
 });

Route::post('test',function(){
  file_put_contents(public_path('jsson.json'), json_encode(request()->json()->all()));
  return response()->json([]);
})->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);


