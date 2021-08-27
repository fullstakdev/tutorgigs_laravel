@extends('template.container')
@section('css')
<link href="{{asset('tutor_assets/css/pages/wizard/wizard-2.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
					<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Tutor Messages</h5>
										
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Take a Test</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Jenna More</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
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
															<a href="{{route('tutor_message')}}" class="wizard-label">
																<h3 class="wizard-title">Peter Martin</h3>
																<div class="wizard-desc">Tutor</div>
															</a>
														</div>
													</div>
													<!--end::Wizard Step 2 Nav-->
													
												</div>
											</div>
											<!--end: Wizard Nav-->
											<!--begin: Wizard Body-->
											<div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
												<!--begin: Wizard Form-->
												<div class="flex-row-fluid" id="kt_chat_content">
										<!--begin::Card-->
										<div >
											<h3><div class="text-dark-75 font-weight-bold font-size-h5 text-center">Test2 Test2</div></h3>
                                                                                        <hr>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="scroll scroll-pull ps ps--active-y" data-mobile-height="350" style="overflow: hidden; min-height: 300px;">
													<!--begin::Messages-->
													<div class="messages">
														<!--begin::Message In-->
														<div class="d-flex flex-column mb-5 align-items-start">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_12.jpg')}}">
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
																	<span class="text-muted font-size-sm">2 Hours</span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
														</div>
														<!--end::Message In-->
														<!--begin::Message Out-->
														<div class="d-flex flex-column mb-5 align-items-end">
															<div class="d-flex align-items-center">
																<div>
																	<span class="text-muted font-size-sm">3 minutes</span>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
																</div>
																<div class="symbol symbol-circle symbol-40 ml-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_21.jpg')}}">
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
														</div>
														<!--end::Message Out-->
														<!--begin::Message In-->
														<div class="d-flex flex-column mb-5 align-items-start">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_21.jpg')}}">
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
																	<span class="text-muted font-size-sm">40 seconds</span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
														</div>
														<!--end::Message In-->
														<!--begin::Message Out-->
														<div class="d-flex flex-column mb-5 align-items-end">
															<div class="d-flex align-items-center">
																<div>
																	<span class="text-muted font-size-sm">Just now</span>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
																</div>
																<div class="symbol symbol-circle symbol-40 ml-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_21.jpg')}}">
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
														</div>
														<!--end::Message Out-->
														<!--begin::Message In-->
														<div class="d-flex flex-column mb-5 align-items-start">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_12.jpg')}}">
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
																	<span class="text-muted font-size-sm">40 seconds</span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
															<a href="#">https://github.com</a></div>
														</div>
														<!--end::Message In-->
														<!--begin::Message Out-->
														<div class="d-flex flex-column mb-5 align-items-end">
															<div class="d-flex align-items-center">
																<div>
																	<span class="text-muted font-size-sm">Just now</span>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
																</div>
																<div class="symbol symbol-circle symbol-40 ml-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_21.jpg')}}">
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
														</div>
														<!--end::Message Out-->
														<!--begin::Message In-->
														<div class="d-flex flex-column mb-5 align-items-start">
															<div class="d-flex align-items-center">
																<div class="symbol symbol-circle symbol-40 mr-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_12.jpg')}}">
																</div>
																<div>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
																	<span class="text-muted font-size-sm">40 seconds</span>
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
														</div>
														<!--end::Message In-->
														<!--begin::Message Out-->
														<div class="d-flex flex-column mb-5 align-items-end">
															<div class="d-flex align-items-center">
																<div>
																	<span class="text-muted font-size-sm">Just now</span>
																	<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
																</div>
																<div class="symbol symbol-circle symbol-40 ml-3">
																	<img alt="Pic" src="{{asset('tutor_assets/media/users/300_21.jpg')}}">
																</div>
															</div>
															<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
														</div>
														<!--end::Message Out-->
													</div>
													<!--end::Messages-->
												<div class="ps__rail-x" style="left: 0px; bottom: -871px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 871px; right: -2px; height: 186px;"><div class="ps__thumb-y" tabindex="0" style="top: 146px; height: 40px;"></div></div></div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer align-items-center">
												<!--begin::Compose-->
												<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
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
														<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
													</div>
												</div>
												<!--begin::Compose-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Card-->
									</div>
												<!--end: Wizard Form-->
											</div>
											<!--end: Wizard Body-->
										</div>
										<!--end: Wizard-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
					<!--end::Content-->
				@endsection	
                               @section('js')
                                         <script src="{{asset('tutor_assets/js/pages/custom/wizard/wizard-2.js')}}"></script>
                                        @endsection