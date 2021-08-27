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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Trainign Management</h5>
										
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
                                                            
                                                         
                                                                
                                                                <div class="card card-custom gutter-b example example-compact">
											
                                                                                        <form class="form" action="{{url('tutor_session_list')}}" method="post">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="col-sm-12">
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">UploadCertified Teacher Certification</h3>
												
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												<div class="card-footer">
													
                                                                                                        <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Disapprove</button>
    <button type="button" class="btn btn-warning btn-sm">Block</button>
    <button type="button" class="btn btn-danger btn-sm">Delete</button>
</div>
												
												</div>
											</form>
											<!--end::Form-->
										</div>
									
                                                                                                                                    
								</div>
                                                                                                    
                                                                                                    <div class="col-sm-12">
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Upload Certified in ESL Certification</h3>
												
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												<div class="card-footer">
													
                                                                                                        <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Disapprove</button>
    <button type="button" class="btn btn-warning btn-sm">Block</button>
    <button type="button" class="btn btn-danger btn-sm">Delete</button>
</div>
												
												</div>
											</form>
											<!--end::Form-->
										</div>
									
                                                                                                                                    
								</div>
                                                                                                    
                                                                                                    <div class="col-sm-12">
									
									<div class="card card-custom example example-compact">
											<div class="card-header">
												<h3 class="card-title">Upload Billingual Certification</h3>
												
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													
													
													
													<div class="form-group">
														<label>File Browser</label>
														<div></div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="customFile">
															<label class="custom-file-label" for="customFile">Choose file</label>
														</div>
													</div>
													<!--begin: Code-->
													
												</div>
												<div class="card-footer">
													
                                                                                                        <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Disapprove</button>
    <button type="button" class="btn btn-warning btn-sm">Block</button>
    <button type="button" class="btn btn-danger btn-sm">Delete</button>
</div>
												
												</div>
											</form>
											<!--end::Form-->
										</div>
									
                                                                                                                                    
								</div>
                                                                                                    
                                                                                                    
												</div>
												
											</form>
											<!--end::Form-->
										</div>
                                                            
                                                            
                                                            <div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title font-weight-bolder text-dark">Tutor Exam Test</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="mb-6">
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-grow-1">
														
														<!--begin::Section-->
														<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
															<!--begin::Info-->
															<div class="d-flex flex-column align-items-cente py-2 w-75">
																<!--begin::Title-->
																<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Math (2nd -9th Grade) / Algebra 1</a>
																<!--end::Title-->
																<!--begin::Data-->
																<span class="text-muted font-weight-bold">Status - Pass</span>
                                                                                                                                <span class="text-muted font-weight-bold">Score - 95.00%</span>
																<!--end::Data-->
															</div>
															<!--end::Info-->
															<!--begin::Label-->
															<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Reset</button>
    <button type="button" class="btn btn-success btn-sm">Edit Score</button>
    <button type="button" class="btn btn-danger btn-sm">Block</button>
</div>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="mb-6">
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-grow-1">
														
														<!--begin::Section-->
														<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
															<!--begin::Info-->
															<div class="d-flex flex-column align-items-cente py-2 w-75">
																<!--begin::Title-->
																<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">English</a>
																<!--end::Title-->
																<!--begin::Data-->
																<span class="text-muted font-weight-bold">Status - Pass</span>
                                                                                                                                <span class="text-muted font-weight-bold">Score - 95.00%</span>
																<!--end::Data-->
															</div>
															<!--end::Info-->
															<!--begin::Label-->
															<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Reset</button>
    <button type="button" class="btn btn-success btn-sm">Edit Score</button>
    <button type="button" class="btn btn-danger btn-sm">Block</button>
</div>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="mb-6">
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-grow-1">
														
														<!--begin::Section-->
														<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
															<!--begin::Info-->
															<div class="d-flex flex-column align-items-cente py-2 w-75">
																<!--begin::Title-->
																<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Billingual Spanish</a>
																<!--end::Title-->
																<!--begin::Data-->
																<span class="text-muted font-weight-bold">Status - Pass</span>
                                                                                                                                <span class="text-muted font-weight-bold">Score - 95.00%</span>
																<!--end::Data-->
															</div>
															<!--end::Info-->
															<!--begin::Label-->
															<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary btn-sm ">Reset</button>
    <button type="button" class="btn btn-success btn-sm">Edit Score</button>
    <button type="button" class="btn btn-danger btn-sm">Block</button>
</div>
															<!--end::Label-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												
												
											</div>
											<!--end: Card Body-->
										</div>
                                                            
                                                            <div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Observer Job Prviledge</h3>
												
											</div>
											
												<div class="card-body">
                                                                                                    <div class="row">
													<div class="col-sm-6">
													<div class="form-group">
														<label>Is Allowed Observer Job?</label>
														<select class="form-control form-control-solid" name="session_type">
															<option >Yes</option>
                                                                                                                        <option >No</option>
														</select>
													</div>
												 </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" style="margin-top: 26px" class="btn btn-primary mr-2">Submit</button>
                                                                                                        </div>
                                                                                                    </div>
													</div>
												</div>
												
											
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
                                    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection