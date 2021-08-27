@extends('template.container')
@section('css')
@endsection
@section('content')
<?php
$sub=array(
"Elementary Math","Elementary ELA","Middle School / Junior High School - Math","Middle School / Junior High School - ELA","High School Math","High School ELA","Fluent in Spanish",

"Early Reading Phonics / English Language Learning");
?>
					<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Create New Tutor</h3>
												
											</div>
											<!--begin::Form-->
                                                                                        <form class="form" method="post" action="{{url('post_tutor')}}" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
													<div class="form-group row">
														<div class="col-lg-6">
															<label>First Name:</label>
															<input type="test" name="firstname" class="form-control" placeholder="Enter first name">
															
														</div>
														<div class="col-lg-6">
															<label>Last Name:</label>
															<input type="text" name="lastname" class="form-control" placeholder="Enter last name">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Email:</label>
															<input type="email" name="email" class="form-control" placeholder="Enter Email">
															
														</div>
														<div class="col-lg-6">
															<label>Phone:</label>
															<input type="text" name="phone" class="form-control" placeholder="Enter contact number">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Password:</label>
															<input type="password" name="password" class="form-control" placeholder="">
															
														</div>
														<div class="col-lg-6">
															<label>Confirm Password:</label>
															<input type="password" class="form-control" placeholder="">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Paypal Email:</label>
															<input type="email" class="form-control" name="paypal_email" placeholder="Enter paypal email">
															
														</div>
														<div class="col-lg-6">
															<label>Paypal Phone:</label>
															<input type="text" class="form-control" name="paypal_phone" placeholder="Enter paypal phone">
															
														</div>
													</div>
													<div class="form-group row">
														<div class="col-lg-6">
															<label>Address:</label>
															<div class="input-group">
																<input type="text" name="home_address" class="form-control" placeholder="Enter your address">
																<div class="input-group-append">
																	<span class="input-group-text">
																		<i class="la la-map-marker"></i>
																	</span>
																</div>
															</div>
															<span class="form-text text-muted">Please enter your address</span>
														</div>
														<div class="col-lg-6">
															<label>Specialty/Subjects:</label>
															<select class="form-control selectpicker" name="SpecialtySubjects[]" multiple="multiple">
															 @foreach ($sub as  $value)
                                                                                                                                <option value="{{$value}}">{{$value}}</option>
                                                                                                                            @endforeach

                                                                                                                         </select>
														
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<div class="col-lg-12">
															
															<div class="dropzone dropzone-default" id="kt_dropzone_1">
														<div class="dropzone-msg dz-message needsclick">
															<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
															<span class="dropzone-msg-desc">This is just a demo dropzone. Selected files are
															<strong>not</strong>actually uploaded.</span>
														</div>
													</div>
														</div>
													</div>
													<!-- begin: Example Code-->
													
													<!-- end: Example Code-->
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2">Save</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
														
													</div>
												</div>
											</form>
											<!--end::Form-->
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
                                    <script src="{{asset('assets/js/pages/crud/file-upload/dropzonejs.js')}}"></script>
                                    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}"></script>
                                    <!--end::Page Vendors-->
                                    <!--begin::Page Scripts(used by this page)-->
<!--                                    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>-->
                                @endsection