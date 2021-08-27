@extends('template.tutor_container')
@section('css')
@endsection
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Heading-->
				<div class="d-flex flex-column">
					<!--begin::Title-->
					<h2 class="text-white font-weight-bold my-2 mr-5">Job Board List ({{$total_tutor_sessions}})</h2>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<div class="d-flex align-items-center font-weight-bold my-2">
						<!--begin::Item-->
						<a href="#" class="opacity-75 hover-opacity-100">
							<i class="flaticon2-shelter text-white icon-1x"></i>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Home</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
						<!--end::Item-->
					</div>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Heading-->
			</div>
			<!--end::Info-->
			
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			
			
			<div class="row">
				
				<div class="col-lg-12 col-xxl-12">
					<!--begin::Advance Table Widget 1-->
					<div class="card card-custom gutter-b">
						<div class="card-header mt-5">
						<a href="{{route('tutor.claim.multiple.session')}}" class="btn btn-info btn-sm" style="height:35px;">Claim Multiple Sessions</a>
						</div>
						
						<div class="card-body">
							@if ($message = Session::get('success'))
							<div class="alert alert-success text-center" role="alert">{{$message }}</div>
							@endif
							@if ($message = Session::get('error'))
							<div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
							@endif
							@foreach($tutor_sessions as $ses_det)
							<?php
							$grade = DB::table('terms')->where('id', $ses_det->grade_id)->first();
							$tutor = \App\Tutor::find($ses_det->tut_teacher_id);
							if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
							{
							$observer = \App\Tutor::find($ses_det->tut_observer_id);
							}
							
							$lesson = DB::table('master_lessons')->where('id', $ses_det->lesson_id)->first();
							$int_school = DB::table('schools')->where('SchoolId', $ses_det->school_id)->first();
							
							if(@isset($lesson->file_name))
							$lesson_download = "https://intervene.io/questions/uploads/lesson/".$lesson->file_name;
							else
							$lesson_download = '';
							
							
							$sesStartTime = $ses_det->ses_start_time;
							$curr_time    = date("Y-m-d H:i:s");
							$in_sec = strtotime($sesStartTime) - strtotime($curr_time);
							if(!empty($ses_det->Tutoring_client_id) && $ses_det->Tutoring_client_id == 'Drhomework123456')
							$Sessiontype='Drhomework';
							else
							$Sessiontype='Intervention';
							
							$resss = DB::table('int_slots_x_student_teacher')
							->join('students', 'students.id', '=', 'int_slots_x_student_teacher.student_id')
							->select('int_slots_x_student_teacher.*', 'students.last_name', 'students.first_name')
							->where('int_slots_x_student_teacher.slot_id', $ses_det->id)
							->get();
							
							$stud_str = array();
							foreach ($resss as $row2) {
							$stud_str[] = $row2->first_name.'  '.$row2->last_name;
							}
							$stdList=(count($stud_str)>0)? implode(", ", $stud_str):"NA";
							
							?>
							<div class="card card-custom bg-light-success gutter-b">
								<div class="card-body">
									<!--begin::Top-->
									<div class="d-flex">
										
										<!--begin: Info-->
										<div class="flex-grow-1">
											<!--begin::Title-->
											<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
												<!--begin::User-->
												<div class="mr-3">
													<!--begin::Name-->
													<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$grade->name}}  - &nbsp;<small>{{@$lesson->name}}</small>
														@if($ses_det->tut_teacher_id == 0 && $in_sec > 0 && $in_sec < 172800)
														&nbsp;&nbsp;&nbsp;<img alt="Hot Job" style=" height:30px;" title="Hot Job" src="{{asset('tutor_assets/hot-job.png')}}">
														@endif
													</a>
													
													<!--end::Name-->
													<!--begin::Contacts-->
													<div class="d-flex flex-wrap my-2">
														<a href="javascript:void(0)" class="label label-primary label-inline mr-2 viewSession" SessionID="<?=$ses_det->id?>" action="<?=$Sessiontype?>">Session Details</a>
														
														<a href="javascript:void(0)" class="label label-danger label-inline mr-2 viewSession"  SessionID="<?=$ses_det->id?>" action="<?=$Sessiontype?>">Session detail &amp; download</a>
													</div>
													<!--end::Contacts-->
												</div>
												<!--begin::User-->
												<!--begin::Actions-->
												<div class="my-lg-0 my-1">
													<div class="btn-group" role="group" aria-label="Basic example">
														@if($in_sec > 0)
														<?php
														if($tutor_profile->block == 1)
														$tutor_block = 1;
														else
														$tutor_block ='';
														
														$allow_claim = 0;
														$cer_approve = '';
														$grade_pass_status = '';
														$pass_status = '';
														$claim_message = "<ul style=text-align:left>";
															$claim_type = '';
															$grade_test_id = '';
															$grade_test = '';
															
															if($ses_det->tut_teacher_id == 0){
															
															$tests_sql = DB::connection('mysql_2')->table('tests')->where('IsActive', '=', 1)->get();
															foreach($tests_sql as $test_data)
															{
															$subjects = $test_data->SubjectID;
															if(!empty($subjects))
															{
															$subjectArr = explode(":", $subjects);
															if(in_array($ses_det->grade_id, $subjectArr))
															{
															$grade_test_id = $test_data->ID;
															$grade_test = $test_data->Name;
															break;
															}
															}
															}
															
															
															
															if(!empty($grade_test_id) )
															{
															$grade_test_sql = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('quiz_test_id', $grade_test_id)->where('status', 'completed');
															$is_grade_test_result = $grade_test_sql->count();
															$grade_test_result_data = $grade_test_sql->get();
															if($grade_test_result_data->block == 1)
															$tutor_block = 1;
															else
															$tutor_block = '';
															if($is_grade_test_result > 0)
															{
															if($grade_test_result_data->pass_status == 'pass')
															$grade_pass_status = 'pass';
															else if($grade_test_result_data->pass_status == 'fail')
															$grade_pass_status = 'fail';
															else
															$claim_message .= "<li>Pass ".$grade_test." test</li>";
															}
															else {
															$claim_message .= "<li>Pass ".$grade_test." test</li>";
															}
															$claim_type = 'test';
															}
															
															
															if(empty($ses_det->bilingual_test) && empty($ses_det->certificate) )
															{
															if(!empty($grade_test_id) )
															{
															if($is_grade_test_result > 0 && $grade_test_result_data->pass_status == 'pass')
															$allow_claim = 1;
															else
															$allow_claim = '';
															}
															else
															$allow_claim = 1;
															}
															else if(!empty($ses_det->bilingual_test) && empty($ses_det->certificate) )
															{
															
															$get_result = DB::connection('mysql_2')->table('tutor_tests_logs')->where('tutor_id', Auth::guard('tutor')->user()->id)->where('quiz_test_id', 73)->where('status', 'completed');
															
															$teacher_test_result = $get_result->count();
															$teacher_test_result_data = $get_result->first();
															if(@$teacher_test_result_data->block == 1)
															$bilingual_block = 1;
															else
															$bilingual_block = '';
															if($teacher_test_result > 0)
															{
															if($teacher_test_result_data->pass_status == 'pass')
															{
															if(!empty($grade_test_id) )
															{
															if($is_grade_test_result > 0 && $grade_test_result_data->pass_status == 'pass')
															$allow_claim = 1;
															else
															$allow_claim = 0;
															}
															else
															$allow_claim = 1;
															$pass_status = 'pass';
															}
															else
															{
															$allow_claim = 0;
															$pass_status = 'fail';
															}
															}
															else
															$claim_message .= "<li>Pass bilingual(spanish) test</li>";
															$claim_type = 'test';
															}
															else if(!empty($ses_det->certificate) && empty($ses_det->bilingual_test))
															{
															if($ses_det->certificate == 2)
															{
															$certificte = $tutor_profile->teacher_certificate;
															$approve_certificte = $tutor_profile->teacher_approve;
															if($tutor_profile->certificate_block == 1)
															$cer_block = 1;
															else
															$cer_block = '';
															if(empty($certificte))
															$claim_message .= "<li>Upload Teacher certification</li>";
															}
															else if($ses_det->certificate == 3)
															{
															$certificte = $tutor_profile->esl_certificate;
															$approve_certificte = $tutor_profile->esl_approve;
															if($tutor_profile->esl_block == 1)
															$cer_block = 1;
															else
															$cer_block = '';
															if(empty($certificte))
															$claim_message .= "<li>Upload ESL certification</li>";
															}
															else if($ses_det->certificate == 4)
															{
															$certificte = $tutor_profile->billingual_certificate;
															$approve_certificte = $tutor_profile->bilingual_approve;
															if($tutor_profile->bilingual_block == 1)
															$cer_block = 1;
															else
															$cer_block = '';
															if(empty($certificte))
															$claim_message .= "<li>Upload Bilingual certification</li>";
															}
															if(!empty($certificte))
															{
															if($approve_certificte == 1 )
															{
															if(!empty($grade_test_id) )
															{
															if($is_grade_test_result > 0 && $grade_test_result_data->pass_status == 'pass')
															$allow_claim = 1;
															else
															$allow_claim = 0;
															}
															else
															$allow_claim = 1;
															}
															else
															{
															$allow_claim = '';
															$cer_approve = 1;
															}
															}
															$claim_type = 'certificate';
															}
														$claim_message .= "</ul>";
														
														
														?>
														
														<?php
														if(@$is_grade_test_result && @$grade_pass_status == 'pass')
														{
														if(empty($tutor_block) && empty($cer_block) && empty($bilingual_block))
														{
														
														if($allow_claim > 0) {
														
														
														?>
														<a href="{{route('submit_claim')}}/{{$ses_det->id}}" class="btn btn-danger " >Claim Tutor Job</a>
														<?php } else {
														
														if($claim_type == 'test') {
														$test_name = 'Bilingual (Spanish)';?>
														
														
														<button type="button"  class="btn btn-danger " onclick="showclaimmodal('<?php echo $test_name;?>','73','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } else if($claim_type == 'certificate') { ?>
														
														<?php   if($row['certificate'] == 2) $test_name = 'Certified Teacher'; else if($row['certificate'] == 3) $test_name = 'Certified Teacher in ESL'; else if($row['certificate'] == 4) $test_name = 'Certified Teacher in ESL with Bilingual Tutor ( Spanish )'; ?>
														
														<?php if($cer_approve != 1) {?>
														<button type="button"  class="btn btn-danger " onclick="showclaimmodalforcertificate('<?php echo $test_name;?>','<?php echo $tutor_profile->tutorid;?>','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } else { ?>
														
														<button type="button" class="btn btn-danger " onclick="showbanmmodalforcertificate('<?php echo $test_name;?>','<?php echo $tutor_profile->tutorid;?>','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } ?>
														<?php } } } else { ?>
														
														<button type="button"  class="btn btn-danger " onclick="showblockmodal()">Claim Tutor Job</button>
														<?php } } else { ?>
														<?php if($allow_claim > 0 ) {
														
														
														?>
														<a href="{{route('submit_claim')}}/{{$ses_det->id}}" class="btn btn-danger ">Claim Tutor Job</a>
														<?php } else {
														
														if($claim_type == 'test' ) {
														$test_name = 'Bilingual (Spanish)';?>
														
														
														<button type="button"  class="btn btn-danger " onclick="showclaimmodal('<?php echo $test_name;?>','73','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } else if($claim_type == 'certificate') { ?>
														
														<?php   if($row['certificate'] == 2) $test_name = 'Certified Teacher'; else if($row['certificate'] == 3) $test_name = 'Certified Teacher in ESL'; else if($row['certificate'] == 4) $test_name = 'Certified Teacher in ESL with Bilingual Tutor ( Spanish )'; ?>
														
														<?php if($cer_approve != 1) {?>
														<button type="button"  class="btn btn-danger " onclick="showclaimmodalforcertificate('<?php echo $test_name;?>','<?php echo $tutor_profile->tutorid;?>','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } else { ?>
														
														<button type="button"  class="btn btn-danger " onclick="showbanmmodalforcertificate('<?php echo $test_name;?>','<?php echo $tutor_profile->tutorid;?>','<?php echo $pass_status;?>','<?php echo $claim_message;?>','<?php echo $ses_det->id;?>','<?php echo $grade_pass_status;?>')">Claim Tutor Job</button>
														<?php } ?>
														<?php } } } ?>
														
														
														
														
														
														<?php } ?>
														@else
														<h3 class="text-warning">Expired</h3>
														@endif
													</div>
													
												</div>
												
												<!--end::Actions-->
											</div>
											<!--end::Title-->
											<!--begin::Content-->
											
										</div>
										<!--end::Info-->
									</div>
									<!--end::Top-->
									<!--begin::Separator-->
									<div class="separator separator-solid my-5"></div>
									<!--end::Separator-->
									<!--begin::Bottom-->
									<div class="d-flex align-items-center flex-wrap">
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span class="font-weight-bolder font-size-sm">Session ID</span>
												<span class="font-weight-bolder font-size-h6">{{$ses_det->id}}</span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span class="font-weight-bolder font-size-sm">Start Time</span>
												<span class="font-weight-bolder font-size-h6">{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column text-dark-75">
												<span class="font-weight-bolder font-size-sm">Create Date</span>
												<span class="font-weight-bolder font-size-h6">{{date('F d,Y H:iA', strtotime($ses_det->created_date))}}</span>
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
											<span class="mr-4">
												<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
											</span>
											<div class="d-flex flex-column flex-lg-fill">
												<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
												<span class="font-weight-bolder font-size-h6 text-danger">{{$ses_det->session_duration}} Mins</span>
												
											</div>
										</div>
										<!--end: Item-->
										<!--begin: Item-->
										
										<!--end: Item-->
										<!--begin: Item-->
										
										<!--end: Item-->
									</div>
									<!--end::Bottom-->
									
									
								</div>
							</div>
							
							@endforeach
							
							
							
							{!! $tutor_sessions->appends(Request::all())->links() !!}
						</div>
					</div>
					
					<!--end::Advance Table Widget 1-->
				</div>
			</div>
			
			
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	
	
	
	
	<div class="modal fade" id="session_claim" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tutor Claim Session</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body text-center" id="modal_body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="modal fade" id="session_details_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Session Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body" id="session_details_body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Content-->
@endsection
@section('js')

<script>
$('.viewSession').click(function() {
var SessionID=$(this).attr('SessionID');
var action = $(this).attr('action');
$.ajax({

type:'GET',

url:"<?php echo url('session_details');?>/"+SessionID,
success:function(data){


$('#session_details_body').html(data);
$('#session_details_modal').modal('show');
}
});
});



$('.SendMessage').click(function()

{



var sesid= $(this).attr('value');

var info='If you cancel this job with less than 48 hours notice you will need to email support@tutorgigs.io with documentation as to the reason for the cancelation and risk being suspended and losing payment for 1 session.';

var r = confirm(info);

if (r == true)

{

$('#messageModal').modal('show');

$('.SeessionIDD').text(sesid);

$('#SessionID').val(sesid);



}else

{



return false;



}



});

</script>

<script>
function showclaimmodal(test_name, test_id, pass_status, claim_message,ses_id, garde_pass_status)
{
if(pass_status == 'fail' || garde_pass_status == 'fail')
{
html = '<p> You can\'t claim this session since you have failed the test.</p>';

}
else
{
html = '<p style="text-align:left"> You need to satisfy the below requirement to claim this session</p>';
html += '<p>'+claim_message+'</p>';
html += '<p><a href="manage_claim_tests/'+ses_id+'"  class="btn btn-primary btn-lg">Go Exam & Certification Page</a></p>';
}
$('#modal_body').html(html);
$('#session_claim').modal('show');
}
</script>
<script>
function showclaimmodalforcertificate(test_name, tutor_id, pass_status, claim_message,ses_id)
{
if(pass_status == 'fail')
{
html = '<p> You can\'t claim this session since you have failed the test.</p>';
}
else
{
html = '<p style="text-align:left"> You need to satisfy the below requirement to claim this session</p>';
html += '<p>'+claim_message+'</p>';
html += '<p><a href="manage_claim_tests/'+ses_id+'"  class="btn btn-primary btn-lg">Go Exam & Certification Page</a></p>';
}
$('#modal_body').html(html);
$('#session_claim').modal('show');
}
function showbanmmodalforcertificate(test_name, tutor_id, pass_status, claim_message,ses_id)
{
html = '<p> Your certification need to be approved by administrator</p>';


$('#modal_body').html(html);
$('#session_claim').modal('show');
}
function showblockmodal()
{
html = '<p> You are not allow to claim the job as you are blocked by administrator</p>';

$('#modal_body').html(html);
$('#session_claim').modal('show');
}
</script>
@endsection