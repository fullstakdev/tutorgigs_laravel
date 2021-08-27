@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
					<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Applicant Details</h5>
									<!--end::Page Title-->
									
								</div>
								
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                         
                                                                
                                                                <div class="card card-custom gutter-b">
                                                                    <div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Application Personal Information</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">application personal informaiton</span>
												</div>
												
											</div>
									<div class="card-body">
                                                                            
                                                                            <form class="form">
												<!--begin::Body-->
												<div class="card-body">
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
														<div class="col-lg-9 col-xl-6">
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{asset('tutor_assets/media/users/300_21.jpg')}})">
																<div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
																<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																	<i class="fa fa-pen icon-sm text-muted"></i>
																	<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																	<input type="hidden" name="profile_avatar_remove">
																</label>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
															</div>
															<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="Nick">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="Bold">
														</div>
													</div>
													
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-at"></i>
																	</span>
																</div>
																<input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email">
															</div>
														</div>
													</div>
                                                                                                    
                                                                                                       <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Password</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="password" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="password" value="Bold">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label"></label>
														<div class="col-lg-9 col-xl-6">
															<button type="reset" class="btn btn-primary mr-2">Submit</button>
														</div>
													</div>
													
												</div>
												<!--end::Body-->
											</form>
									
												</div><!--end::Body-->
											
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
								
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
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection