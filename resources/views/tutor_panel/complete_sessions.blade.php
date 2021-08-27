@extends('template.tutor_container')
@section('css')
<style>
    .separator.separator-solid {

    border-bottom: 2px solid #ddd;
}
</style>
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
										<h2 class="text-white font-weight-bold my-2 mr-5">My Complete Sessions ({{$total_complete_sessions}})</h2>
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
                                                                                    
									<div class="card-body">
                                                                          
                                                                             @foreach($complete_sessions as $ses_det)
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$grade->name}}  - &nbsp;<small>{{@$lesson->name}}</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                    <a href="<?=$lesson_download?>" class="label label-warning label-inline mr-2">Download-<?=@$lesson->name?></a>
													                
															<a href="javascript:void(0)" class="label label-danger label-inline mr-2 viewSession"  SessionID="<?=$ses_det->id?>" action="<?=$Sessiontype?>">Session detail &amp; download</a>
                                                                                                                        @if($ses_det->feedback_id > 0)
                                                                                                                           <a href="{{url('post_edit_feedback')}}/{{$ses_det->id}}" class="label label-primary label-inline mr-2">Edit Feedback</a>
                                                                                                                        @else   
                                                                                                                           <a href="{{url('post_feedback')}}/{{$ses_det->id}}" class="label label-primary label-inline mr-2">Post Session Survey</a>
                                                                                                                        @endif  
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                    <strong>
                                                                                                                                         @if($ses_det->tut_teacher_id > 0)
                                                                                                                                      {{@$tutor->f_name}}&nbsp;{{@$tutor->lname}}
                                                                                                                                     @else
                                                                                                                                        - 
                                                                                                                                    @endif
                                                                                                                                    </strong>                                                                                                                                                                                                                                                       </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
                                                                                                                                <span class="opacity-70">
                                                                                                                                    @if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
                                                                                                                                      <strong>{{@$observer->f_name}}&nbsp;{{@$observer->lname}}</strong>
                                                                                                                                      {{@$observer->email}}
                                                                                                                                      @else
                                                                                                                                        - 
                                                                                                                                    @endif
                                                                                                                                </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">{{@$int_school->SchoolName}}</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> {{@$stdList}} </span>
															</div>
														</div>
													
												</div>
												<!--end::Content-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Top-->
										<!--begin::Separator-->
										<div class="separator separator-solid my-7"></div>
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
													<span class="font-weight-bolder font-size-h5">{{$ses_det->id}}</span>
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
													<span class="font-weight-bolder font-size-h5">{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</span>
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
													<span class="font-weight-bolder font-size-h5">{{date('F d,Y H:iA', strtotime($ses_det->created_date))}}</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Status</span>
                                                                                                        @if(!empty($ses_det->app_url))
                                                                                                        <span class="font-weight-bolder text-success font-size-h5" style="color:green !important;">Assigned</span>
                                                                                                        @else
                                                                                                        <span class="font-weight-bolder text-warning font-size-h5">Assigned</span>
                                                                                                        @endif
                                                                                                        													
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
                                                             
                                                               {!! $complete_sessions->appends(Request::all())->links() !!}           
									</div>
								</div>
                                                                                
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
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
                                @endsection