@extends('template.container')
@section('css')
@endsection
@section('content')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
									<!--end::Page Title-->
									<!--begin::Actions-->
									
									<!--end::Actions-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
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
									<div class="col-lg-6 col-xxl-4">
										<!--begin::Mixed Widget 1-->
										<div class="card card-custom bg-gray-100 card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 bg-danger py-5">
												<h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
												<!--end::Chart-->
												<!--begin::Stats-->
												<div class="card-spacer mt-n25">
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-warning font-weight-bold font-size-h6">Total Sessions</a>
                                                                                                                        <br /><span>{{$total_sessions}}</span>
														</div>
														<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Total Student</a>
                                                                                                                        <br /><span>{{$total_students}}</span>
														</div>
													</div>
													<!--end::Row-->
													<!--begin::Row-->
													<div class="row m-0">
														<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Item Applicants</a>
                                                                                                                        <br /><span>{{$total_applicants}}</span>
														</div>
														<div class="col bg-light-success px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Total Tutors</a>
                                                                                                                        <br /><span>{{$total_tutors}}</span>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 1-->
									</div>
									
									
									
									<div class="col-xxl-8 order-2 order-xxl-1">
										<!--begin::Advance Table Widget 2-->
                                                                                
                                                                                
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Most Recent Sessions</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 min-w-100px">ID</th>
																		<th class="p-0 min-w-200px">Date/Time</th>
																		<th class="p-0 min-w-100px">Board</th>
																	
																		<th class="p-0 min-w-110px text-right">Status</th>
																		
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    @foreach($sessions as $session)
                                                                                                                                    <?php
                                                                                                                                        $sesStartTime=$session->ses_start_time;
                                                                                                                                        $curr_time= date("Y-m-d H:i:s");

                                                                                                                                        $in_sec= strtotime($sesStartTime) - strtotime($curr_time);
                                                                                                                                    ?>
																	<tr>
																		<td class="pl-0 py-4">
																			<span class="font-weight-500">{{$session->id}}</span>
																		</td>
																		<td class="pl-0">
																			<span class="font-weight-500">{{date("F d, Y H:ia", strtotime($session->ses_start_time))}}</span>
																		</td>
                                                                                                                                            <td style="padding-left: 0px">
																		 @if($session->board_type == 'newrow')
                                                                                                                                                     @if($session->ios_newrow == 1)
																			<span class=" ">IOS Newrow</span>
                                                                                                                                                     @else
                                                                                                                                                       <span class="">{{ ucwords($session->board_type)}}</span>
                                                                                                                                                     @endif  
                                                                                                                                                  @else       
                                                                                                                                                    <span class=" ">{{ ucwords($session->board_type)}}</span>
                                                                                                                                                  @endif
																		</td>
																		
                                                                                                                                            <td class="text-right" style="padding-right: 0px">
                                                                                                                                                  
                                                                                                                                                @if($in_sec<-3600)
                                                                                                                                           
                                                                                                                                                    <span class="label label-lg label-danger label-inline">Session expired!</span>
                                                                                                                                                @else
                                                                                                                                                 @if(!empty($session->app_url))
                                                                                                                                                   <span class="label label-lg label-light-d label-inline">Session Assigned</span>
                                                                                                                                                 @else
                                                                                                                                                   <span class="label label-lg label-danger-d label-inline">Session Assigned</span>
                                                                                                                                                    @endif
                                                                                                                                                @endif
                                                                                                                                               
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
										<!--end::Advance Table Widget 2-->
                                                                                
                                                                                
									</div>
                                                                    
                                                                    <div class="col-xxl-8 order-2 order-xxl-1">
										<!--begin::Advance Table Widget 2-->
                                                                                
                                                                                
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Most Recent Applicants</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		
																		<th class="p-0 min-w-200px">Name</th>
																		<th class="p-0 min-w-100px">Email</th>
																	        <th class="p-0 min-w-100px">Phone</th> 
																		<th class="p-0 min-w-110px text-right">Status</th>
																		
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    @foreach($applicants as $applicant)
                                                                                                                                  
																	<tr>
																		
																		<td class="pl-0">
																			<span class="font-weight-500">{{$applicant->f_name}}&nbsp;{{$applicant->lname}}</span>
																		</td>
                                                                                                                                            <td style="padding-left: 0px">{{$applicant->email}}</td>
																		
                                                                                                                                            <td style="padding-left: 0px">{{$applicant->phone}}</td>
                                                                                                                                            <td class="text-right">
                                                                                                                                                <?php 
                                            // $next_state_url='rejected_application.php';
                                            $curr_url=$applicant->all_state_url;
                                            $status=null;

                                           $st_class="text-primary";
                                          
                                             if($applicant->status_from_admin=='interview_rejected'){
                                              // Rejected :: interview_rejected
                                              $st_class="text-danger";
                                              $status='Application Rejected';

                                             }elseif($curr_url=="training.php"){
                                               $status='Training Pending';
                                               $st_class="text-warning";
 
                                             
                                            } elseif($curr_url=="application.php"){



                                              $st_class="text-warning";

                                              $status='Application Pending';
                                            } elseif($curr_url=='legal_stuff.php'){
                                               // payment_info ,  legal_stuff
                                               	$st_class="text-danger";
                                               	 $status='Legal stuff Pending';
                                               	 
                                               	 if($applicant->payment_info==2)
                                               	 	 $status='Legal stuff-Pending for approval';

                                            }elseif($curr_url=='payment_info.php'){
                                            	//$status='Payment info Pending';
                                            	// pending |approved.  :: payment_info , 0,1,2
                                            	if($applicant->payment_info==0){
                                            		$st_class="text-danger";
                                            		$status='Payment info Pending';
                                            	}elseif($applicant->payment_info==1){
                                            		$status='Payment info approved';
                                            	}


                                            }elseif($applicant->interview==1){

                                            	$st_class="text-danger";
                                            	$status='Background Checks Pending';

                                            }elseif($curr_url=="quiz.php"){

                                            	$status='Quiz Pending';
                                            }elseif($curr_url=="interview.php"){
                                            	$status='Interview Pending';
                                            	// Last 2 state

                                            }elseif($curr_url=="rejected_application.php"){
                                            		$status='Rejected';
                                            		//$st_class="btn btn-danger btn-sm";
                                            }elseif($curr_url=="quiz_result.php"&&$applicant->status_from_admin=='failed'){
                                            	// Failed Failed// status_from_admin
                                          $status='Failed Application'; $st_class="text-danger";
                                            		
                                            		
                                            }
                                           
                                            ?>
                                                                                                                                                
                                                                                                                                                <?php if(isset($status)){?>     <p><span style="font-size:13px" class="<?=$st_class?>"> <?=$status?> </span> </p> <?php }?>
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
										<!--end::Advance Table Widget 2-->
                                                                                
                                                                                
									</div>
                                                                    
                                                                    <div class="col-xxl-8 order-2 order-xxl-1">
										<!--begin::Advance Table Widget 2-->
                                                                                
                                                                                
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Most Recent Students</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 min-w-200px">Date</th>
																		<th class="p-0 min-w-200px">Name</th>
																		<th class="p-0 min-w-100px">Email</th>
																	        
																		<th class="p-0 min-w-110px text-right">Status</th>
																		
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    @foreach($students as $student)
                                                                                                                                  
																	<tr>
                                                                                                                                            <td style="padding-left: 0px">{{date("F d, Y", strtotime($student->created))}}</td>
																		
																		<td class="pl-0">
																			<span class="font-weight-500">{{$student->first_name}}&nbsp;{{$student->last_name}}</span>
																		</td>
                                                                                                                                            <td style="padding-left: 0px">{{$student->email}}</td>
																		
                                                                                                                                            
                                                                                                                                            <td class="text-right" style="padding-right:0px">
                                                                                                                                                @if($student->status == 1 )
                                                                                                                                                  <span class="label label-lg label-light-d label-inline">Active</span>
                                                                                                                                                @else
                                                                                                                                                 <span class="label label-lg label-danger label-inline">Pending</span>
                                                                                                                                                @endif
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
										<!--end::Advance Table Widget 2-->
                                                                                
                                                                                
									</div>
									<div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
										<!--begin::List Widget 3-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Recent 6 Tutors</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
                                                                                             @foreach($tutors as $tutor)
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-10">
													<!--begin::Symbol-->
													<div class="symbol symbol-40 symbol-light-success mr-5">
														<span class="symbol-label">
															<img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
                                                                                                       
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">{{$tutor->f_name}}&nbsp;{{$tutor->lname}}</a>
														<span class="text-muted">{{$tutor->email}}</span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    @if($tutor->created_by == 2)
																	<a href="{{url('edit-admintutor')}}/{{$tutor->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		</span>
																	</a>
                                                                                                                                    @else
                                                                                                                                       <a href="{{url('edit-tutor')}}/{{$tutor->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		</span>
																	</a>
                                                                                                                                    @endif
																</li>
																
                                                                                                                                @if($tutor->created_by == 2)
																<li class="navi-item">
																	<a href="{{url('tutor_detail')}}/{{$tutor->id}}" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Applicant Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                                @else
                                                                                                                                <li class="navi-item">
																	<a href="{{url('applicant_detail')}}/{{$tutor->id}}" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Applicant Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                                @endif
																
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
													<!--end::Dropdown-->
												</div>
												<!--end::Item-->
												@endforeach
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 3-->
									</div>
									
									
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
				@endsection	