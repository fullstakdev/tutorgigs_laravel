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
										<h2 class="text-white font-weight-bold my-2 mr-5">Session Survey Feedback</h2>
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
								<!--begin::Row-->
								<div class="row">
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
									<div class="col-xl-12">
										 
                                                                            <div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Feedback Step 1</h3>
												
											</div>
											<!--begin::Form-->
											<form name="form_class" id="form_class" method="post" action="{{route('submit_feedback_1')}}" enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <input type="hidden" name="session_id" value="{{$ses_det->id}}">
												<div class="card-body">
													<div class="form-group row">
														<div class="col-lg-6">
															<label>Did you finish the session completely *</label>
															<select class="required form-control" name="session_finish" id="session_finish" >
                                                                                                                                <option value='0' <?php if($ses_det->tutor_complete_session == 0) echo 'selected';?>>No</option>
                                                                                                                                <option value='1' <?php if($ses_det->tutor_complete_session == 1) echo 'selected';?>>Yes</option>
                                                                                                                          </select> 
															
														</div>
														<div class="col-lg-6">
															<label>Please enter your session ID here *</label>
                                                                                                                        <input type="text" readonly="" name="session_id" value="{{$ses_det->id}}" class="form-control" placeholder="">
															
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-6">
															<label>Please enter date of session*</label>
                                                                                                                        <input type="text" readonly="" name="dat_of_session" value="{{date('F d,Y', strtotime($ses_det->ses_start_time))}}" class="form-control" placeholder="">
														</div>
														<div class="col-lg-6">
															<label>Please enter start time of session*</label>
                                                                                                                        <input type="text" readonly="" name="start_time" value="{{date('H:iA', strtotime($ses_det->ses_start_time))}}" class="form-control" placeholder="">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>What Objective did you cover?*</label>
                                                                                                                        <input type="text" readonly="" name="objective_cover" value="{{$grade->name}}" class="form-control" placeholder="">
														</div>
														<div class="col-lg-6">
															<label>How many students did you have in your tutor session *</label>
                                                                                                                        <input type="text" readonly="" name="no_of_students" value="{{count($stud_str)}}" class="form-control" placeholder="">
														</div>
													</div>
													
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
														
															
														</div>
														<div class="col-lg-6 text-lg-right">
															<button type="submit" class="btn btn-primary">Next</button>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
										
									</div>
								</div>
								<!--end::Row-->
                                                                
                                                                
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection