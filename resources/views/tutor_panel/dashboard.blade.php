@extends('template.tutor_container')
@section('css')
@endsection
@section('content')

 <?php
                                            $dir = asset('uploads/avatar/' . Auth::guard('tutor')->user()->id . '/');
                                            $file_display = array('jpg', 'jpeg', 'png', 'gif');
                                            if (file_exists($dir) == false) {
                                                $profile_image = asset("images/avt-default.png");
                                            
                                            } else {
                                                $dir_contents = scandir($dir);
                                                foreach ($dir_contents as $file) {
                                                    $file_type = strtolower(end(explode('.', $file)));

                                                    if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
                                                         $profile_image = $dir.$file;
                                                    }
                                                }
                                            }
                                           
                                            ?>
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
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
									<div class="col-xl-4">
										<!--begin::Tiles Widget 1-->
										<div class="card card-custom">
											<!--begin::Body-->
											<div class="card-body pt-15">
												<!--begin::User-->
												<div class="text-center mb-10">
													<div class="symbol symbol-60 symbol-circle symbol-xl-90">
														<div class="symbol-label" style="background-image:url('{{$profile_image}}')"></div>
														<i class="symbol-badge symbol-badge-bottom bg-success"></i>
													</div>
													<h4 class="font-weight-bold my-2">{{Auth::guard('tutor')->user()->f_name}} {{Auth::guard('tutor')->user()->lname}}</h4>
													<div class="text-muted mb-2">Tutor</div>
													@if(Auth::guard('tutor')->user()->status == 0)
													 <span class="label label-light-warning label-inline font-weight-bold label-lg">Verify Your Email</span>
                                                                                                        @else
                                                                                                         <span class="label label-light-success label-inline font-weight-bold label-lg">Active</span>
                                                                                                        @endif 
												</div>
												<!--end::User-->
												<!--begin::Contact-->
												
												<!--end::Contact-->
                                                                                                
                                                                                                <div class="py-9">
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">{{Auth::guard('tutor')->user()->email}}</a>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Phone:</span>
														<span class="text-muted">{{Auth::guard('tutor')->user()->phone}}</span>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<span class="font-weight-bold mr-2">Location:</span>
														<span class="text-muted">Dhaka</span>
													</div>
												</div>
												<!--begin::Nav-->
												<a href="#" class="btn btn-hover-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Edit Profile</a>
												
												<!--end::Nav-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tiles Widget 1-->
									</div>
									<div class="col-xl-8">
										 
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom bg-gray-100 gutter-b card-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-danger py-5">
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 position-relative overflow-hidden">
												<!--begin::Chart-->
												<div  class="card-rounded-bottom bg-danger" style="height: 230px; min-height: 230px;">
                                                                                                    <div class="mr-2" style="padding-left: 20px;padding-right: 20px">
															<h2 class="font-weight-bolder text-white text-center">WELCOME TO TUTOR DASHBOARD</h2>
															<div class="font-size-lg mt-5 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</div>
														</div>
                                                                                                    </div>
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
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="{{route('tutor_sessions')}}" class="text-warning font-weight-bold font-size-h6">Total Claiemd Sessions</a>
                                                                                                                        <br><span>{{@$total_claimed_session}}</span>
														</div>
														<div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="{{route('job_board')}}" class="text-primary font-weight-bold font-size-h6 mt-2">Total Tutor Sessions</a>
                                                                                                                        <br><span>{{@$total_tutor_sessions}}</span>
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
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="{{route('observer_sessions')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Total Observer Jobs</a>
                                                                                                                        <br><span>{{@$total_observer_session}}</span>
														</div>
														<div class="col bg-light-dark px-6 py-8 rounded-xl">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="text-success font-weight-bold font-size-h6 mt-2">Total Cancelled Sessions</span>
                                                                                                                        <br><span>{{@$total_cancelled_sessions}}</span>
														</div>
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											<div class="resize-triggers"><div class="expand-trigger"><div style="width: 348px; height: 471px;"></div></div><div class="contract-trigger"></div></div></div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
                                                                            </div>
										
									</div>
								</div>
								<!--end::Row-->
                                                                
                                                                <div class="row">
									
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Most Recent Claimed Sessions</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">5 sessions</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
																
																<th class="pr-0" style="width: 50px">Tutors</th>
																<th style="min-width: 200px"></th>
																<th style="min-width: 150px">Session</th>
																<th style="min-width: 150px">Start Time</th>
																<th class="pr-0 text-right" style="min-width: 150px">Status</th>
															</tr>
														</thead>
														<tbody>
															<?php
                                            $dir = asset('uploads/avatar/' . Auth::guard('tutor')->user()->id . '/');
                                            $file_display = array('jpg', 'jpeg', 'png', 'gif');
                                            if (file_exists($dir) == false) {
                                                $profile_image = asset("images/avt-default.png");
                                            
                                            } else {
                                                $dir_contents = scandir($dir);
                                                foreach ($dir_contents as $file) {
                                                    $file_type = strtolower(end(explode('.', $file)));

                                                    if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
                                                         $profile_image = $dir."/".$file;
                                                    }
                                                }
                                            }
                                           
                                            ?>
                                                                                                                    @foreach($claimed_sessions as $ses)
                                                                                                                    <?php
                                                                                                                    $grade = DB::table('terms')->where('id', $ses->grade_id)->first();
                                                                                                                    ?>
															<tr>
																
																<td class="pr-0">
																	<div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="{{$profile_image}}" class="h-75 align-self-end" alt="" />
																		</span>
																	</div>
																</td>
																<td class="pl-0">
																	<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{Auth::guard('tutor')->user()->f_name}}&nbsp;{{Auth::guard('tutor')->user()->lname}}</a>
																	<span class="text-muted font-weight-bold text-muted d-block">Email: {{Auth::guard('tutor')->user()->email}}</span>
																</td>
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$grade->name}}</span>
																	<span class="text-muted font-weight-bold">ID : {{$ses->id}}</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		{{date('F d,Y H:iA', strtotime($ses->ses_start_time))}}
																	</div>
																</td>
																<td class="pr-0 text-right">
																	<span class="label label-success label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Assigned</span>
																</td>
															</tr>

															@endforeach	
																
																
																
																
																
														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								<!--begin::Row-->
								<div class="row">
									
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Most Recent Not Claimed Sessions</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">5 sessions</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
																
																
																<th style="min-width: 150px">Session</th>
																<th style="min-width: 150px">Start Time</th>
                                                                                                                                <th style="min-width: 150px">Lesson</th>
																<th class="pr-0 text-right" style="min-width: 150px">Status</th>
															</tr>
														</thead>
														<tbody>
															 @foreach($tutor_sessions as $ses)
                                                                                                                    <?php
                                                                                                                      $grade = DB::table('terms')->where('id', $ses->grade_id)->first();
                                                                                                                     $lesson = DB::table('master_lessons')->where('id', $ses->lesson_id)->first();
                                                                                                                     $curr_time = date("Y-m-d H:i:s");
                                                                                                                     $in_sec = strtotime($ses->ses_start_time) - strtotime($curr_time);
                                                                                                                    ?>
															<tr>
																
																
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$grade->name}}</span>
																	<span class="text-muted font-weight-bold">ID : {{$ses->id}}</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		{{date('F d,Y H:iA', strtotime($ses->ses_start_time))}}
																	</div>
																</td>
                                                                                                                                <td>
																	<span class="d-flex flex-column w-100 mr-2">{{$lesson->name}}</span>
																	
																</td>
																<td class="pr-0 text-right">
                                                                                                                                    @if($in_sec > 0)
																	<span class="label label-warning label-inline mr-2 " sessionid="6701" action="Intervention">Not Assigned</span>
                                                                                                                                     @else
                                                                                                                                     <span class="label label-danger label-inline mr-2" sessionid="6701" action="Intervention">Expired</span>
                                                                                                                                    @endif 
																</td>
															</tr>
                                                                                                                      @endforeach
														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								
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