@extends('template.container')
@section('css')
<style>
    .warning{background-color: #fcf8e3}
</style>
@endsection
@section('content')
					<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                            
                                                            @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Session Details</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Details of session 7790</span>
												
                                                                                                </h3>
                                                                                            
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															
                                                                <?php
                                                                $grade = DB::table('terms')->where('id', $ses_det->grade_id)->first();
                                                                $tutor = \App\Tutor::find($ses_det->tut_teacher_id);
                                                                if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
                                                                {
                                                                    $observer = \App\Tutor::find($ses_det->tut_observer_id);
                                                                }
                                                                
                                                                $lesson = DB::table('master_lessons')->where('id', $ses_det->lesson_id)->first();
                                                                
                                                               
                                                                
                                                                $int_school= DB::table('schools')->where('SchoolId', $ses_det->school_id)->first();    
                                                                
                                                                 
                                                                 if(@$int_school->district_id > 0){

                                                                 $district = DB::table('loc_district')->where('id', $int_school->district_id)->first();     

                                                                 $districtName = $district->district_name;

                                                                 }
                                                                 
                                                                $sesStartTime = $ses_det->ses_start_time;
                                                                $curr_time    = date("Y-m-d H:i:s");

                                                                $in_sec = strtotime($sesStartTime) - strtotime($curr_time);
                                                                 if(!empty($row['Tutoring_client_id'])&&$row['Tutoring_client_id']=='Drhomework123456')
                        {
                        $Sessiontype='Drhomework';
                        }
                        else{
                        $Sessiontype='Intervention';
                        }
                        
                        $resss = DB::table('int_slots_x_student_teacher')
                            ->join('students', 'students.id', '=', 'int_slots_x_student_teacher.student_id')
                            ->select('int_slots_x_student_teacher.*', 'students.last_name', 'students.first_name')
                            ->where('int_slots_x_student_teacher.slot_id', $ses_det->id)                    
                            ->get();
                        

           
            $stud_str=array(); 

            foreach ($resss as $row2) { 
               $stud_str[] = $row2->first_name.'  '.$row2->last_name;
            }  

            $stdList=(count($stud_str)>0)? implode(",", $stud_str):"NA";
                                                                
                                                                ?>
								<table class='table'>
               <tr >
                   <td class='warning' style="width:40%">Session ID</td><td>{{$ses_det->id}}</td>
                </tr>
                <tr >
                   <td class='warning'>Session Time</td><td>{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</td>
                </tr>
                <tr >
                   <td class='warning'>Session Duration</td><td>{{$ses_det->session_duration}} mins</td>
                </tr>
                <tr >
                   <td class='warning'>Virtual Board</td><td> {{$ses_det->curr_active_board}}</td>
                </tr>
                <tr >
                   <td class='warning'>School</td><td><?=@$int_school->SchoolName?></td>
                </tr>
                <tr >
                   <td class='warning'>District</td><td><?=@$districtName?></td>
                </tr >
                 <tr >
                   <td class='warning'>Lesson</td><td>{{$lesson->name}}</td>
                </tr >
                <tr >
                   <td class='warning'>Class list of students</td><td><?=$stdList?></td>
                </tr>
                <tr >
                   <td class='warning'>Create Date</td><td><?=date_format(date_create($ses_det->created_date), 'F d,Y');?></td>
                </tr>
                <tr >
                   <td class='warning'>Session Status</td><td>incomplete</td>
                </tr>
                <?php if($ses_det->tut_observer_id > 0 || $ses_det->tut_teacher_id > 0) { ?>
                 <tr >
                   <td class='warning'>Session Claimed By</td>
                   <td>
                       <?php if($ses_det->add_observer > 0 && $ses_det->observer_confirm == 1 && $ses_det->tut_observer_id > 0) { ?>
                                                            <strong class="text-primary">Observer: </strong><?=$observer->f_name." ".$observer->lname?>
                                                             <br/>
                                                            Email : <?=$observer->email;?>

                                                            <?php } else { ?>
                                                            <strong class="text-primary">Tutor: </strong><?=$tutor->f_name." ".$tutor->lname?>
                                                             <br/>
                                                            Email : <?=$tutor->email;?>
                                                            <?php } ?>
                                                           
                   </td>
                </tr>
                <?php } ?>
                
                <tr >
                   <td class='warning'>Paypal Email</td><td>phpexp08@gmail.com</td>
                </tr>
                <tr >
                   <td class='warning'>Paypal Phone</td><td>345567778</td>
                </tr>
           </table>
                                                           
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
								<!--end::Notice-->
								<!--begin::Card-->
								
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
					<!--end::Content-->
				@endsection	
                                @section('js')
                                	<!--begin::Page Vendors(used by this page)-->
                                    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
                                    <!--end::Page Vendors-->
                                    <!--begin::Page Scripts(used by this page)-->
<!--                                    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>-->
                                    <script src="{{asset('assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
                                    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection