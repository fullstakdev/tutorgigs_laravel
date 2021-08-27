@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
					<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Applicant List({{$total_applicants}})</h5>
										
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
					<div class="d-flex flex-column-fluid mt-7" >
							<!--begin::Container-->
							<div class="container">
                                                           @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success text-center" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                            @endif
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Applicant List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new applicants</span>
												</h3>
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															<table id="tutor_table" class="table  table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-40px"></th>
																		<th class="p-0 min-w-230px">NAME</th>
																		<th class="p-0 min-w-100px text-right">EMAIL</th>
																		<th class="p-0 min-w-100px text-right">PHONE</th>
																		<th class="p-0 min-w-110px text-right">STATUS</th>
																		<th class="p-0 min-w-150px text-right">ACTION</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    @foreach($applicants as $row)
                                                                                                                                  <tr role="row" class="odd">
																		<td class="pl-0 py-4 sorting_1">
																			<label class="checkbox-single">
                                                                                                                                                                <input type="checkbox" value="<?php echo $row->id;?>" class="checkbox">
                                                                                                                                                                <span></span>
                                                                                                                                                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="javascript:void(0)" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg" title="<?php echo $row->f_name." ".$row->lname; ?>"><?php echo substr($row->f_name." ".$row->lname,0,30); ?></a>
																			<div>
																				<span class="">Ceated date:</span>
																				{{date('F d,Y', strtotime($row->created_at))}}																		</div>
																		</td>
																		<td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">{{$row->email}}</span>
																			
																		</td>
																		<td class="text-right">
																			<span class="font-weight-500">{{$row->phone}}</span>
																		</td>
																		<td class="text-right">
																			<?php 
                                                                                                                                                         $curr_url = $row->all_state_url;
                                                                                                                                                         $status = null;

                                                                                                                                                       
                                                                                                                                                          $st_class="text-primary";
                                                                                                                                                        
                                                                                                                                                         if($row->status_from_admin == 'interview_rejected'){
                                                                                                                                                          
                                                                                                                                                            $st_class = "text-danger";
                                                                                                                                                            $status = 'Application Rejected';

                                                                                                                                                         }elseif($curr_url == "training.php"){
                                                                                                                                                           $status = 'Training Pending';
                                                                                                                                                           $st_class = "text-warning";


                                                                                                                                                        } elseif($curr_url=="application.php"){
                                                                                                                                                           $st_class = "text-warning";

                                                                                                                                                          $status = 'Application Pending';
                                                                                                                                                        } elseif($curr_url == 'legal_stuff.php'){
                                                                                                                                                           
                                                                                                                                                             $st_class = "text-danger";
                                                                                                                                                             $status = 'Legal stuff Pending';

                                                                                                                                                             if($row->payment_info == 2)
                                                                                                                                                                $status = 'Legal stuff-Pending for approval';

                                                                                                                                                        }elseif($curr_url=='payment_info.php'){
                                                                                                                                                           
                                                                                                                                                            if($row->payment_info == 0){
                                                                                                                                                                    $st_class = "text-danger";
                                                                                                                                                                    $status = 'Payment info Pending';
                                                                                                                                                            }elseif($row->payment_info == 1){
                                                                                                                                                                    $status = 'Payment info approved';
                                                                                                                                                            }


                                                                                                                                                        }elseif($row->interview == 1){

                                                                                                                                                            $st_class = "text-danger";
                                                                                                                                                            $status = 'Background Checks Pending';

                                                                                                                                                        }elseif($curr_url == "quiz.php"){

                                                                                                                                                            $status = 'Quiz Pending';
                                                                                                                                                        }elseif($curr_url == "interview.php"){
                                                                                                                                                            $status = 'Interview Pending';
                                                                                                                                                           

                                                                                                                                                        }elseif($curr_url == "rejected_application.php"){
                                                                                                                                                                    $status = 'Rejected';
                                                                                                                                                                   
                                                                                                                                                        }elseif($curr_url == "quiz_result.php" && $row->status_from_admin == 'failed'){
                                                                                                                                                            
                                                                                                                                                            $status='Failed Application'; $st_class="text-danger";


                                                                                                                                                        }
                                                                                                                                                     

                                                                                                                                                        ?>
                                                                                                                                                    <?php if(isset($status)){?> <span  class="font-weight-bold <?=$st_class?>"> <?=$status?> </span>  <?php }?>
                                                                                                                                                   @if($row->status_from_admin != 'interview_rejected')
                                                                                                                                                   
                                                                                                                                                  
                                                                                                                                                   @if($curr_url == "interview.php" || $row->legal_stuff == 2)
                                                                                                                                                       <?php $state_btn = ($row->legal_stuff == 2) ? 'Accept_legal_stuff' : 'Accept'; ?>
                                                                                                                                                 
                                                                                                                                                 
                                                                                                                                                   
                                                                                                                                                   <div> 
                                                                                                                                                       <a href="{{url('manage_applicant')}}/{{$row->id}}/{{@$state_btn}}"  class="label label-success label-inline mr-2">Accept</a>
                                                                                                                                                       <a href="{{url('manage_applicant')}}/{{$row->id}}/Reject"  class="label label-danger label-inline mr-2">Reject</a>
                                                                                                                                                      
                                                                                                                                                   </div>
                                                                                                                                                   @endif
                                                                                                                                                   @endif
                                                                                                                                                   <?php  
                                                                                                                                                  
                                                                                                                                                    if($row->all_state_url == "background_checks.php" && $row->status_from_admin != 'interview_rejected'){?>
                                                                                                                                                    <div> 
                                                                                                                                                        <a class="label label-primary label-inline mr-2" href="javascript:void(0)" onclick="openbackground('{{$row->id}}')">Manage approve</a>
                                                                                                                                                    </div>
                                                                                                                                                     <?php } ?>
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
										               							<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    			<a href="{{url('applicant_detail')}}/{{$row->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">View</span>
																		
																	</a>
                                                                                                                                    																</li>
																
                                                                                                                                																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View as applicant</span>
																		</span>
																	</a>
																</li>
                                                                                                                                																<li class="navi-item">
                                                                                                                                    
                                                                                                                                   
																</li>
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        @endforeach
                                                                                                                                        
																</tbody>
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
                                                        
                                                        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Background Check Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" id="session_details_body">
                <form action="{{url('background_check_settings')}}" method="POST" enctype="multipart/form-data">
                    <input type='hidden' name='applicant_id' id='applicant_id' value=''>
                 @csrf
               <div class="md-form mb-5">
                  <label data-error="wrong" data-success="right" for="orangeForm-name">Mark Status</label>
                  <select class='form-control' name='status'>
                      <option value='Accept'>Accept</option>
                      <option value='Reject'>Reject</option>
                  </select>
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
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );



function openbackground(id)
{
    $('#applicant_id').val(id);
    $('#messageModal').modal('show');
}


                                        </script>
                                @endsection