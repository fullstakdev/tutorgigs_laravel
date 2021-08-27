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
										<h2 class="text-white font-weight-bold my-2 mr-5">Observer Job Board List ({{$total_observer_jobs}})</h2>
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
                                                                            
                                                                               @if ($message = Session::get('success'))
                                                                              <div class="alert alert-success text-center" role="alert">{{$message }}</div>
                                                                            @endif  
                                                                            @if ($message = Session::get('error'))
                                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                                            @endif 
                                                                            
                                                                          @foreach($observer_jobs as $ses_det)
                                                                           <?php
                                                                                unset($session_time);    
                                                                               $ids = $ses_det->session_ids;
                                                                               $ses_ids = explode(",", $ids);
                                                                               $ses_sql = DB::table('int_schools_x_sessions_log')->select('ses_start_time')->whereIn('id', $ses_ids)->orderBy('ses_start_time', 'asc')->get();
                                                                               
                                                                                foreach($ses_sql as $data)
                                                                                {
                                                                                    $session_time[] = $data->ses_start_time;
                                                                                }
                                                                              
                                                                               if(@count($session_time)) {
                                                                            ?>
                                                                            <div class="card card-custom bg-light-danger gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">No. of Sessions &nbsp; - &nbsp;<?php echo @count($session_time);?>	
                                                                                                                   
                                                                                                                </a>
                                                                                                               
														<!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                             <a href="{{route('observer_session_details')}}/{{$ses_det->id}}" class="label label-primary label-inline mr-2" >Session Details</a>
													                
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                                                                <a href="{{url('tutor/claim_observer_job')}}/{{$ses_det->id}}" name="submit_observer_claim" action="Intervention" class="btn btn-danger ">Claim Observer Job</a>

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
													<span class="font-weight-bolder font-size-sm">Session IDs</span>
													<span class="font-weight-bolder font-size-h6"> <?=$ids?></span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Date</span>
													<span class="font-weight-bolder font-size-h6">{{date('F d,Y', strtotime($session_time[0]))}}</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Time</span>
													<span class="font-weight-bolder font-size-h6">{{date('H:iA', strtotime($session_time[0]))}}</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											
											<!--end: Item-->
											<!--begin: Item-->
											
											<!--end: Item-->
											<!--begin: Item-->
											
											<!--end: Item-->
										</div>
										<!--end::Bottom-->
                                                                                
                                                                                
									</div>
								</div>
                                                                               <?php } ?>       
                                                                     @endforeach       
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                                
                                                                     {!! $observer_jobs->appends(Request::all())->links() !!}           
									</div>
								</div>
                                                                                
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection