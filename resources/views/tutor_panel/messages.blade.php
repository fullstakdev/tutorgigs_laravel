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
										<h2 class="text-white font-weight-bold my-2 mr-5">Messages</h2>
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
								
								
                                                            <div class="flex-row-fluid" id="kt_chat_content">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header align-items-center px-4 py-3">
												
												<div class="text-center flex-grow-1">
													<div class="text-dark-75 font-weight-bold font-size-h5">{{Auth::guard('tutor')->user()->f_name}} {{Auth::guard('tutor')->user()->lname}}</div>
													<div>
														<span class="label label-sm label-dot label-success"></span>
														<span class="font-weight-bold text-muted font-size-sm">Active</span>
													</div>
												</div>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
                                                                                             @if ($message = Session::get('success'))
                                                                              <div class="alert alert-success text-center" role="alert">{{$message }}</div>
                                                                            @endif  
                                                                            @if ($message = Session::get('error'))
                                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                                            @endif 
												<!--begin::Scroll-->
												<div class="scroll scroll-pull ps ps--active-y" data-mobile-height="350" style="overflow: hidden; min-height: 300px;">
													<!--begin::Messages-->
													<div class="messages">
                                                                                                            @foreach($messages as $message)
														@if($message->sender_type == 'admin')
														<div class="d-flex flex-column mb-5 align-items-start">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<img alt="Pic" src="{{asset('images/avt-default.png')}}">
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Tutor Admin</a>
                                                                                                                                        <span class="text-muted font-size-sm">
                                                                                                                                            <?php
                                                                                                                                             $dt = \Carbon\Carbon::parse($message->created_at);
                                                                                                                                             echo $dt->diffForHumans();
                                                                                                                                            ?>
                                                                                                                                        </span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px"><?php echo $message->message;?></div>
														</div>
														@endif
                                                                                                                @if($message->sender_type == 'tutor')
														<div class="d-flex flex-column mb-5 align-items-end">
															<div class="d-flex align-items-center">
																<div>
																	<span class="text-muted font-size-sm"> <?php
                                                                                                                                             $dt = \Carbon\Carbon::parse($message->created_at);
                                                                                                                                             echo $dt->diffForHumans();
                                                                                                                                            ?></span>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
																</div>
																<div class="symbol symbol-circle symbol-40 ml-3">
																	<img alt="Pic" src="{{asset('images/avt-default.png')}}">
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px"><?php echo $message->message;?></div>
														</div>
                                                                                                                @endif
														
														@endforeach
														
													</div>
													<!--end::Messages-->
												<div class="ps__rail-x" style="left: 0px; bottom: -871px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 871px; right: -2px; height: 186px;"><div class="ps__thumb-y" tabindex="0" style="top: 146px; height: 40px;"></div></div></div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer align-items-center">
                                                                                            <form action="{{route('send_message')}}" method="post">
                                                                                                @csrf
												<!--begin::Compose-->
												<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message" id="msg" name="msg" required></textarea>
												<div class="d-flex align-items-center justify-content-between mt-5">
													<div class="mr-3">
														<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
															<i class="flaticon2-photograph icon-lg"></i>
														</a>
														<a href="#" class="btn btn-clean btn-icon btn-md">
															<i class="flaticon2-photo-camera icon-lg"></i>
														</a>
													</div>
													<div>
														<button type="submit" id="profile-submit" name="send_email" class="btn btn-primary btn-md text-uppercase font-weight-bold py-2 px-6">Send</button>
													</div>
												</div>
                                                                                                </form>
												<!--begin::Compose-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Card-->
									</div>
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection