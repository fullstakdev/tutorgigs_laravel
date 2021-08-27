@extends('template.container')
@section('css')
<style>
    .page-item.active .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .pagination { float:right}
    </style>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/MeritHub/MeritHub.Function.php'; ?>
@endsection
@section('content')
<?php $NetworkId = 100;?>
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Manage Session</h5>
										
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
                                                           
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
                                                                                
                                                                                 if(@$int_school->district_id > 0){
                                                                                    $district = DB::table('loc_district')->where('id', $int_school->district_id)->first();     
                                                                                    $districtName = $district->district_name;

                                                                                 }


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
                                                          
								 <div class="card card-custom gutter-b">
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
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                       
													                
															<a class="label label-warning label-inline mr-2 viewSession" href="javascript:void(0)" SessionID="<?=$ses_det->id?>" action="<?=$Sessiontype?>">Session Detail & Downloads </a>
                                                                                                                          
														</div>
														<!--end::Contacts-->
													</div>
													 <?php
                                                                                                         
                                                                                                           
                                                                                                             $hostLink = DB::table('MeritHubClass')->where('sessionID', $ses_det->id)->first();
                                                                                                             $url = @$hostLink->hostLink;
                                                                                                             $urlHit="https://live.merithub.com/info/device-test/$NetworkId/$url";  
                                                                                                         ?>
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                                                                                                                <a href="{{$urlHit}}" class="btn btn-success" target="_blank" style="background-color: green;border-bottom-color: green">Join as Observer</a>
                                                                                                                @if($ses_det->board_type == 'MeritHub') 
                                                                                                                <a href="{{url('admin/instructor_join_roomMerit')}}/{{$ses_det->id}}" target="_blank" class="btn btn-danger">Join as instructor</a>
													        @else
                                                                                                                    <a href="{{url('adminjoin-as-instructor')}}/{{$ses_det->id}}" target="_blank" class="btn btn-danger">Join as instructor</a>
                                                                                                                @endif 
                                                                                                            

                                                                                                            </div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                     @if($ses_det->tut_teacher_id > 0)
                                                                                                                                      {{@$tutor->f_name}}&nbsp;{{@$tutor->lname}}
                                                                                                                                     @else
                                                                                                                                        - 
                                                                                                                                    @endif
                                                                                                                                 </span>
                                                                                                                                                                                                                                                                              
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
																<span class="font-weight-bolder">Board</span>
																<span class="opacity-70">MeritHub</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Students</span>
																<span class="opacity-70">{{@$stdList}}</span>
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
                                                                                                      @if($in_sec<-3600)
                                                                                                          <span class="font-weight-bolder font-size-h5 text-danger">Session expired!</span>
                                                                                                        @else
                                                                                                            @if(!empty($ses_det->tut_teacher_id))
                                                                                                               @if(!empty($ses_det->app_url))
                                                                                                               <span class="font-weight-bolder font-size-h5 text-success">Session Assigned</span>
                                                                                                            @else
                                                                                                               <span class="font-weight-bolder font-size-h5 text-warning">Session Assigned</span>
                                                                                                            @endif
                                                                                                            @else
                                                                                                               <span class="font-weight-bolder font-size-h5 text-danger">Session Not Assigned</span>
                                                                                                            @endif
                                                                                                        @endif
                                                                                                        													
												</div>
											</div>
											
										</div>
										<!--end::Bottom-->
                                                                                
                                                                                
									</div>
								</div>
                                                                
                                                           
                                                                </div>
                                                        
                                                        </div>
					<!--end::Content-->
                                        
                                       
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
</div
				@endsection	
                                @section('js')
                                	
<!--                                    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>-->
                                    <script src="{{asset('assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
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
   

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection