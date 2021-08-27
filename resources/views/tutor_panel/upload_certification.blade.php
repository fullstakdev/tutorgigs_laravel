@extends('template.tutor_container')
@section('css')
<link href="{{asset('tutor_assets/css/pages/wizard/wizard-2.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<?php

$profile = DB::table('tutor_profiles')->where('tutorid', Auth::guard('tutor')->user()->id)->first();
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
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
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
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
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
														<form name="form_class" id="form_class" method="post" action='{{route('upload_teacher_certificate')}}'  enctype="multipart/form-data">
														@csrf
                                                                                                                    <!--begin: Wizard Step 1-->
															<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
																
																<div class="col-sm-12">
                                                                                                                                    
                                                                                                                                     @if ($message = Session::get('success'))
                                                                              <div class="alert alert-success text-center" role="alert">{{$message }}</div>
                                                                            @endif  
                                                                            @if ($message = Session::get('error'))
                                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                                            @endif 
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Upload Certified Teacher Certification</h3>
												
											</div>
											<!--begin::Form-->
											
												<div class="card-body">
													<div class="form-group form-group-last">
														<div class="alert alert-custom alert-default" role="alert">
															<div class="alert-icon">
																<span class="svg-icon svg-icon-primary svg-icon-xl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
																			<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															
                                                                                                                           
                                                                                                                            
                                                                                                                             <?php
                                                                                                                                    if($profile->teacher_certificate) { ?>
                                                                                                                    <div class="alert-text">
                                                                                                                                    <p> <a href="../teacher_certificate/<?php echo $profile->teacher_certificate;?>" target="_blank"><?php echo $profile->teacher_certificate;?></a> 
                                                                                                                                        <a href="{{url('tutor/delete_document')}}/teacher_certificate" onclick="return confirm('Are you sure you want to delete thos document?')"><i class="flaticon-circle" style="float:right;color:red;font-size: 20px"></i></a></p>
                                                                                                                    </div>                                                                                                                       
                                                                                                               <?php } else { ?>
                                                                                                                    <div class="alert-text">You have no uploaded teacher ertificate</div>
                                                                                                               <?php } ?>    
														</div>
													</div>
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile" name="teacher_certificate">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												
										</div>
									
                                                                                                                                    
								</div>
                                                                                                                            
                                                                                                                            <div class="col-sm-12">
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Upload Billingual Certification</h3>
												
											</div>
											
												<div class="card-body">
													<div class="form-group form-group-last">
														<div class="alert alert-custom alert-default" role="alert">
															<div class="alert-icon">
																<span class="svg-icon svg-icon-primary svg-icon-xl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
																			<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<?php
                                                                                                                                    if($profile->billingual_certificate) { ?>
                                                                                                                    <div class="alert-text">
                                                                                                                                    <p> <a href="../teacher_certificate/<?php echo $profile->billingual_certificate;?>" target="_blank"><?php echo $profile->billingual_certificate;?></a> 
                                                                                                                                        <a href="{{url('tutor/delete_document')}}/billingual_certificate" onclick="return confirm('Are you sure you want to delete thos document?')"><i class="flaticon-circle" style="float:right;color:red;font-size: 20px"></i></a></p>
                                                                                                                    </div>                                                                                                                       
                                                                                                               <?php } else { ?>
                                                                                                                    <div class="alert-text">You have no uploaded billingual ertificate</div>
                                                                                                               <?php } ?> 
														</div>
													</div>
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile" name="billingual_certificate">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												
										</div>
									
                                                                                                                                    
								</div>
                                                                                                                            <div class="col-sm-12">
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Upload ESL Certification</h3>
												
											</div>
											<!--begin::Form-->
											
												<div class="card-body">
													<div class="form-group form-group-last">
														<div class="alert alert-custom alert-default" role="alert">
															<div class="alert-icon">
																<span class="svg-icon svg-icon-primary svg-icon-xl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
																			<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<?php
                                                                                                                                    if($profile->esl_certificate) { ?>
                                                                                                                    <div class="alert-text">
                                                                                                                                    <p> <a href="../teacher_certificate/<?php echo $profile->esl_certificate;?>" target="_blank"><?php echo $profile->esl_certificate;?></a> 
                                                                                                                                        <a href="{{url('tutor/delete_document')}}/esl_certificate" onclick="return confirm('Are you sure you want to delete thos document?')"><i class="flaticon-circle" style="float:right;color:red;font-size: 20px"></i></a></p>
                                                                                                                    </div>                                                                                                                       
                                                                                                              <?php } else { ?>
                                                                                                                    <div class="alert-text">You have no uploaded ESL ertificate</div>
                                                                                                               <?php } ?> 
														</div>
													</div>
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile" name="esl_certificate">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2">Submit</button>
												
												</div>
											</form>
											<!--end::Form-->
										</div>
									
                                                                                                                                    
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
                                                                
                                                                
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection
                                        @section('js')
                                         <script src="{{asset('tutor_assets/js/pages/custom/wizard/wizard-2.js')}}"></script>
                                        @endsection