@extends('template.tutor_container')
@section('css')
@endsection
@section('content')
 <?php
                                      $dir = $_SERVER['DOCUMENT_ROOT'].'/uploads/avatar' .'/' . Auth::guard('tutor')->user()->id ; 
                                            $file_display = array('jpg', 'jpeg', 'png', 'gif');
                                         
                                            if (file_exists($dir) == false) {
                                                $profile_image =  asset("images/avt-default.png") ;
                                            } else {
                                                $dir_contents = scandir($dir);
                                               
                                                foreach ($dir_contents as $file) {
                                                 
                                                       $profile_image =   asset('uploads/avatar').'/'.Auth::guard('tutor')->user()->id.'/'.$file;
                                                  
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
										<h2 class="text-white font-weight-bold my-2 mr-5">My Profile</h2>
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
                                                                            <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
                                                                                     @if ($message = Session::get('success'))
                                                                              <div class="alert alert-success text-center" role="alert">{{$message }}</div>
                                                                            @endif  
                                                                            @if ($message = Session::get('error'))
                                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                                            @endif 
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom card-stretch">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">My Profile Information</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
												</div>
												<div class="card-toolbar">
													<button type="submit" class="btn btn-primary mr-2">Save Changes</button>
													
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											
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
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url('{{$profile_image}}')">
																<div class="image-input-wrapper" style="background-image: url('{{$profile_image}}')"></div>
																<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																	<i class="fa fa-pen icon-sm text-muted"></i>
																	<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg, .gif">
																	<input type="hidden" name="profile_avatar_remove">
																</label>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
																
															</div>
															<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                    <input class="form-control form-control-lg form-control-solid" name="first_name" required="" type="text" value="{{Auth::guard('tutor')->user()->f_name}}">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
														<div class="col-lg-9 col-xl-6">
                                                                                                                    <input class="form-control form-control-lg form-control-solid" type="text" required="" name="last_name" value="{{Auth::guard('tutor')->user()->lname}}">
														</div>
													</div>
													
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-phone"></i>
																	</span>
																</div>
																<input type="text" class="form-control form-control-lg form-control-solid" name="phone" value="{{Auth::guard('tutor')->user()->phone}}" placeholder="Phone">
															</div>
															<span class="form-text text-muted">We'll never share your email with anyone else.</span>
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
                                                                                                                            <input type="text" class="form-control form-control-lg form-control-solid" name="email" required="" value="{{Auth::guard('tutor')->user()->email}}" placeholder="Email">
															</div>
														</div>
													</div>
                                                                                                    
                                                                                                       <div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Password</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" name="password" type="password" value="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" name="confirm_password" type="password" value="Bold">
														</div>
													</div>
													
												</div>
                                                                                                
                                                                                                <div class="card-footer py-3">
												
												<div class="card-toolbar">
                                                                                                    <button type="submit" style="float:right" class="btn btn-primary mr-2">Save Changes</button>
													
												</div>
											</div>
												<!--end::Body-->
											
											<!--end::Form-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
                                                                            </div>
									
									</div>
                                                                    </form>	
								</div>
								<!--end::Row-->
                                                                
                                                                
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection