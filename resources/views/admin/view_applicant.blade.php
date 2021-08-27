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
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<div class="card-toolbar">
													<a href="" class="btn btn-info btn-sm font-weight-bolder font-size-sm mr-3">Download PDF</a>
                                                                                                        @if(Auth::guard('admin')->user()->role > 0)
													 <a href="" class="btn btn-warning btn-sm font-weight-bolder font-size-sm">Download W-9 Form</a>
                                                                                                        @endif  
												</div>
								</div>
								<!--end::Toolbar-->
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
										<!--begin::Top-->
										<div class="d-flex">
											
												<!--begin::Body-->
												<div class="card-body">
													<div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mb-6">Customer Info</h5>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                     															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(http://tutorgigs.io/tutor-images/1069unnamed.jpg)">
																<div class="image-input-wrapper" style="background-image: url(http://tutorgigs.io/tutor-images/1069unnamed.jpg)"></div>
																
																
															</div>
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                    <input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="1230200unenrollaccount@gmail.com">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="Carol1">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="Jackson">
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What is your phone number?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="4695834764">
														</div>
													</div>
                                                                                                    
                                                                                                     
											     <div class="form-row row">
													    <!-- <label>Quiz 1 Result (%)</label>  -->
													   
                                                                                                                                                                                                                       <label class="col-xl-3 col-lg-3 col-form-label">English Result (%)</label>
                                                                                                                                                                                                                       <div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="0%">
														</div>
														
													</div>
													


											
											     <div class="form-row row">
                                                                                                 <label class="col-xl-3 col-lg-3 col-form-label">English Result (%)</label>
													  <div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="0%">
														</div>
														
													</div>
													                                                                                                    
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Do you have a computer or tablet and reliable internet access?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" disabled="" checked="" name="radios3">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" disabled="" name="radios3">
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How did you hear about us?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="indeed">
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">When would you like to get started Tutoring?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="07/14/2020" placeholder="mm/dd/yyyy">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Why do you want to Tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="To help students accomplish their goals during the journey of learning.">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What makes a good Tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="Someone who keeps learning on track, is consistent, flexible, has fun and never lets the students see you upset.">
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Have you ever tutored before?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" checked="" disabled="" name="radios3">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Have you ever Tutored online?</label>
														<div class="col-lg-9 col-xl-6">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" checked="" name="radios3" disabled="">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>No</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">If you have tutored, where and what did you tutor?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="I have taught private piano and voice lessons.">
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How many years have you Tutored ?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>Less than a year</label>
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>1-3 years</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" checked="" disabled="">
															<span></span>3-5 years</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>More than 5 years</label>
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                                                                                                                        
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What grade levels do you want to Tutor?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="checkbox-inline">
                                                                                                                    
                                                                                                                                                                                                                                         
                                                                                                                    <label class="checkbox">
															<input type="checkbox" checked="" name="radios3" disabled="">
															<span></span>Elementary School (3-5)</label>
                                                                                                                    
														

														                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" checked="" name="radios3" disabled="">
															<span></span>Middle School (6-8)</label>
                                                                                                                    
														

														                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" name="radios3" disabled="">
															<span></span>High School (9-12)</label>
                                                                                                                    
														

																													
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What subjects can you Tutor ?</label>
														<div class="col-lg-9 col-xl-9">
                                                                                                                    															<div class="form-group">
														
														<div class="checkbox-inline">
                                                                                                                    
                                                                                                                                                                                                                                          
                                                                                                                    <label class="checkbox">
															<input type="checkbox" checked="" name="radios3" disabled="">
															<span></span>Math</label>
                                                                                                                    
														

														                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" checked="" name="radios3" disabled="">
															<span></span>English Comprehension &amp; Reading</label>
                                                                                                                    
														

														                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" name="radios3" disabled="">
															<span></span>ESL</label>
                                                                                                                    
														

														                                                                                                                    
                                                                                                                    <label class="checkbox">
															<input type="checkbox" checked="" name="radios3" disabled="">
															<span></span>Languages</label>
                                                                                                                    
														

																													
															
														</div>
														
													</div>
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">What languages do you speak aside from English?</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-sm form-control-solid" disabled="" type="text" value="I know American sign language ">
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Are you a certified Teacher?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>Yes</label>
															<label class="radio">
															<input type="radio" name="radios3" checked="" disabled="">
															<span></span>No</label>
                                                                                                                   
														</div>
														
													</div>
														</div>
													</div>
                                                                                                                                                                                                        <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">How familiar are you with TEKS &amp; STAAR?</label>
														<div class="col-lg-9 col-xl-9">
															<div class="form-group">
														
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>Not familiar</label>
															<label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>I have heard of it, but not very familiar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" disabled="">
															<span></span>Somewhat familiar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" checked="" disabled="">
															<span></span>Very familar</label>
                                                                                                                    <label class="radio">
															<input type="radio" name="radios3" checked="" disabled="">
															<span></span>I'm a specialist</label>
                                                                                                                   
														</div>
														
													</div>
														</div>
													</div>
												</div>
												<!--end::Body-->
											
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