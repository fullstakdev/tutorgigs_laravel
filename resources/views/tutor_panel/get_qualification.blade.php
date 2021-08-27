@extends('template.tutor_container')
@section('css')
<link href="{{asset('tutor_assets/css/pages/wizard/wizard-2.css')}}" rel="stylesheet" type="text/css" />
<style>
   
    .feature-list-card .clock_time {
    position: absolute;
    top: 0px;
    left: -24px;
    transform: rotate(-45deg);
    overflow: hidden;
}
.feature-list-card .clock_time div {
    background-color: orange;
    color: #fff;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    width: 100px;
    text-align: center;
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Get Qualification</h2>
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
									
									<div class="col-xl-12">
										 
                                                                            <div class="card card-custom">
									<div class="card-body p-0">
										<!--begin: Wizard-->
										<div class="wizard wizard-2" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="false">
											<!--begin: Wizard Nav-->
											<div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
												<!--begin::Wizard Step 1 Nav-->
												<div class="wizard-steps">
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-wrapper">
															<div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<div class="wizard-label">
																<h3 class="wizard-title">Take a Test</h3>
																<div class="wizard-desc">Take your test</div>
															</div>
														</div>
													</div>
													<!--end::Wizard Step 1 Nav-->
													<!--begin::Wizard Step 2 Nav-->
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                                                                                            <a href='{{route('upload_certification')}}'>
														<div class="wizard-wrapper">
															<div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<div class="wizard-label">
																<h3 class="wizard-title">Upload Certification</h3>
																<div class="wizard-desc">Upload your certification</div>
															</div>
														</div>
                                                                                                                </a>
													</div>
													<!--end::Wizard Step 2 Nav-->
													
												</div>
											</div>
											<!--end: Wizard Nav-->
											<!--begin: Wizard Body-->
											<div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
												<!--begin: Wizard Form-->
												<div class="row">
													<div class="offset-xxl-2 col-xxl-8">
														<form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
															<!--begin: Wizard Step 1-->
															<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
																<h4 class="mb-10 font-weight-bold text-dark">Select a test what you want to take</h4>
																<!--begin::Input-->
																
																<!--end::Input-->
																<div class="row">
                                                                                                                                    @foreach($testList as $tRecord)
                                                                                                                                    <?php
                                                                                                                                    $result = DB::connection('mysql_2')->table('questions')->where('TestID', $tRecord->ID);
                                                                                                                                   
                                                                                                                                $numQuestions = $result->count();

                                                                                                                                if($numQuestions > 0) {
                                                                                                                                     $test_result = DB::connection('mysql_2')->table('tutor_tests_logs')->where('quiz_test_id', $tRecord->ID)->where('tutor_id', Auth::guard('tutor')->user()->id)->first();
                                                                                                                              
                                                                                                                                     if(@$test_result->status == 'completed' && @$test_result->pass_status == 'pass')
                                                                                                                                     {
                                                                                                                                          $bg_color = '#337ab7';
                                                                                                                                          $status_text = 'Completed';
                                                                                                                                          $mark_color = 'green';
                                                                                                                                     }
                                                                                                                                     else if(@$test_result->status == 'completed' && @$test_result->pass_status == 'fail')
                                                                                                                                     {
                                                                                                                                          $bg_color = '#337ab7';
                                                                                                                                          $status_text = 'Failed';
                                                                                                                                          $mark_color = 'red';
                                                                                                                                     }
                                                                                                                                     else if(@$test_result->status == 'in_process')
                                                                                                                                     {
                                                                                                                                         $bg_color = '#337ab7'; 
                                                                                                                                         $status_text = 'In Progress';
                                                                                                                                         $mark_color = 'orange';
                                                                                                                                     }
                                                                                                                                     else
                                                                                                                                     {
                                                                                                                                         $bg_color = '#337ab7'; 
                                                                                                                                         $status_text = '';
                                                                                                                                     }
                                                                                                                                     
                                                                                                                                    
                                                                                                                            ?>
									<div class="col-xl-6">
										@if(@$test_result->status == 'completed' || @$test_result->pass_status == 'fail')
										<div class="card card-custom bg-danger bg-hover-state-danger gutter-b" style="background-color: <?php echo $bg_color;?> !important;">
											
											<div class="card-body feature-list-card">
												<?php if(!empty($status_text)) { ?>
                  <div class="clock_time" >
                                            <div style="background-color:<?php  echo $mark_color;?> !important">
                                                <?php echo ucwords($status_text);?>
                                            </div>
                                        </div>
               <?php }  ?>
												<div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5"><?php echo $tRecord->Name;?></div>
												
											</div>
											<!--end::Body-->
										</div>
                                                                                @else
                                                                                
                                                                                <a href="javascript:void()" onclick="test_confirm_modal({{$tRecord->ID}},'{{$tRecord->Name}}','{{$status_text}}')" class="card card-custom bg-danger bg-hover-state-danger gutter-b" style="background-color: <?php echo $bg_color;?> !important;">
											
											<div class="card-body feature-list-card">
												<?php if(!empty($status_text)) { ?>
                  <div class="clock_time" >
                                            <div style="background-color:<?php  echo $mark_color;?> !important">
                                                <?php echo ucwords($status_text);?>
                                            </div>
                                        </div>
               <?php }  ?>
												<div class="text-inverse-danger font-weight-bolder font-size-h5 mb-2 mt-5"><?php echo $tRecord->Name;?></div>
												
											</div>
											<!--end::Body-->
										</a>
                                                                                @endif
										<!--end::Stats Widget 13-->
									</div>
                                                                                                                                <?php } ?>
									@endforeach
									
                                                                                                                                    
								</div>
															</div>
															
															<!--end: Wizard Actions-->
														<div></div><div></div><div></div><div></div><div></div></form>
													</div>
													<!--end: Wizard-->
												</div>
												<!--end: Wizard Form-->
											</div>
											<!--end: Wizard Body-->
										</div>
										<!--end: Wizard-->
									</div>
								</div>
										
									</div>
								</div>
								<!--end::Row-->
                                                                <div class="modal fade" id="session_details_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Take Exam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body text-center" >
                <input type="hidden" name="test_id" id="test_id" value="">
                  <h5 class="card-title" id="test_name">Exam English</h5>
    <p class="card-text">Are you sure you want to sart the exam?</p>
    <p id="test_url"><a href="#" class="btn btn-primary">START</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            
            </div>
        </div>
    </div>
</div>
                                                                
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection
                                        @section('js')
                                         <script src="{{asset('tutor_assets/js/pages/custom/wizard/wizard-2.js')}}"></script>
                                         <script>
                                             function test_confirm_modal(test_id, test_name, status)
                                             {
                                                 $('#test_name').html('Exam '+test_name);
                                                 $('#test_id').val(test_id);
                                                 if(status == 'In Progress')
                                                    $('#test_url').html('<a href="start_test/?test_id='+test_id+'" class="btn btn-primary">RESUME</a>');
                                                 else
                                                     $('#test_url').html('<a href="start_test/?test_id='+test_id+'" class="btn btn-primary">START</a>');
                                                 $('#session_details_modal').modal('show');
                                             }
                                         </script>
                                        @endsection