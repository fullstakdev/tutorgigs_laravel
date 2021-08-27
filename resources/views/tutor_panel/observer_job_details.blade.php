@extends('template.tutor_container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<style>
    td.details-control {
    background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('https://cdn.rawgit.com/DataTables/DataTables/6c7ada53ebc228ea9bc28b1b216e793b1825d188/examples/resources/details_close.png') no-repeat center center;
}

.warning{background-color: #fcf8e3 !important;}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Observer Jobs Session Details</h2>
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
                                                                           <table id="tutor_table" class="table  table-vertical-center">
    <thead>
        <th  ></th><th >Time</th><th>Id</th>
    </thead>
    <tbody>
                                                                            @foreach($sessions as $ses_det)
                                                                              
                     
                     
										
  <?php
                                                                $grade = DB::table('terms')->where('id', $ses_det->grade_id)->first();
                                                                $tutor = \App\Tutor::find($ses_det->tut_teacher_id);
                                                                if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
                                                                {
                                                                    $observer = \App\Tutor::find($ses_det->tut_observer_id);
                                                                }
                                                            
                                                                $lesson = DB::table('master_lessons')->where('id', $ses_det->lesson_id)->first();
                                                                $int_school = DB::table('schools')->where('SchoolId', $ses_det->school_id)->first(); 
                                                                
                                                                if($int_school->district_id > 0){
                                                                   $district = DB::table('loc_district')->where('id', $int_school->district_id)->first();
                                                                   $districtName = $district->district_name;
                                                                }
                                                            
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
                                                                

                                                                

                                                                

								                    
                   <tr data-child-value="
            <table class='table'>
               <tr class='warning'>
                   <td>Session ID</td><td>{{$ses_det->id}}</td>
                </tr>
                <tr class='warning'>
                   <td>Session Time</td><td>{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</td>
                </tr>
                <tr class='warning'>
                   <td>Session Duration</td><td>{{$ses_det->session_duration}} Mins</td>
                </tr>
                <tr class='warning'>
                   <td>Virtual Board</td><td> {{$ses_det->board_type}}</td>
                </tr>
                <tr class='warning'>
                   <td>School</td><td>{{@$int_school->SchoolName}}</td>
                </tr>
                <tr class='warning'>
                   <td>District</td><td>{{@$districtName}}</td>
                </tr >
                 <tr class='warning'>
                   <td>Lesson</td><td>{{@$lesson->name}} </td>
                </tr >
                <tr class='warning'>
                   <td>Class list of students</td><td> {{@$stdList}}</td>
                </tr>
                  <tr class='warning'>
                   <td>Payment Duration</td><td><?php if(!empty($ses_det->payment_duration)) echo $ses_det->payment_duration.' Mins'; else echo '-';?></td>
                </tr>
                
                <tr class='warning'>
                   <td>Payment Amount</td><td><?php if(!empty($ses_det->payment_amount)) echo '$'.$ses_det->payment_amount.' USD'; else echo '-';?></td> 
                </tr>
                <tr class='warning'>
                   <td>Create Date</td><td>{{date('F d,Y H:iA', strtotime($ses_det->created_date))}}</td>
                </tr>
                <tr class='warning'>
                   <td>Session Status</td><td>incomplete</td>
                </tr>
                
                <tr class='warning' id='custom_url__<?php echo $ses_det->id;?>_2'>
                   <td>Custom Whiteboard URL</td><td><?php if(!empty($ses_det->custom_whiteboard_url)) echo $ses_det->custom_whiteboard_url; else echo '-';?></td>
                </tr>
           </table>"  >
   
            <td class="details-control sorting_1"></td>
            <td>
               {{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}            
            </td>
            <td>{{$ses_det->id}}</td>
            
           
        </tr>
                                                                            
                                                                  @endforeach          
                                                                            
                                                                            
                                                       </tbody> </table>                    
                                                                            
                                                                                
                                                                        
									</div>
								</div>
                                                                                
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						
                                                
                                                <div class="modal fade" id="session_cancel" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cancel Observer Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" id="session_details_body">
                <form action="{{route('cancel_observer_job')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="observer_job_id" id="observer_job_id" value="">
                 @csrf
               <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-name">Cancellation Reason</label>
                  <textarea id="orangeForm-name" name="CancellationReason" class="form-control" placeholder="Please Write Reason" required maxlength="200"></textarea>
                  <input type="hidden" name="SessionID" value="" id="SessionID">
               </div>
              
         
            
       
            </div>
            <div class="modal-footer">
               <button class="btn btn-primary" type="submit" name="submit_reject" id="submit_reject">Submit</button>
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            
            </div>
            </form>
        </div>
    </div>
</div>
                                                
                                                
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
                                        





    function format(value) {
      return '<div>' + value + '</div>';
  }
  
     $(document).ready(function () {
       var table= $('#tutor_table').DataTable({
    // display everything
 "bLengthChange": false,
    "aaSorting": [[ 0, "desc" ]] // Sort by first column descending
}); 

      // Add event listener for opening and closing details
      $('#tutor_table').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');
          var row = table.row(tr);

          if (row.child.isShown()) {
              // This row is already open - close it
              row.child.hide();
              tr.removeClass('shown');
          } else {
              // Open this row
              row.child(format(tr.data('child-value'))).show();
              tr.addClass('shown');
          }
      });
  });


                                        </script>
                                @endsection