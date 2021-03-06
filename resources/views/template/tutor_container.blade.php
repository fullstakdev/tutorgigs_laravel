<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Tutorgigs | Tutor Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('tutor_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('tutor_assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('tutor_assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('tutor_assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		 <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
                <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
                <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
                
                <style>
                    .page-item.active .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .pagination { float:right}
                </style>
                 @yield('css')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" style="background-image: url({{asset('tutor_assets/media/bg/bg-5.jpg')}})" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile"> 
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{asset('assets_old/img/logo.png')}}" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-stretch mr-3">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="{{url('tutor/dashboard')}}">
										<img alt="Logo" src="{{asset('assets_old/img/logo.png')}}" class="logo-default max-h-30px" />
										<img alt="Logo" src="{{asset('assets_old/img/logo.png')}}" class="logo-sticky max-h-30px" />
									</a>
								</div>
								<!--end::Header Logo-->
								<!--begin::Header Menu Wrapper-->
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Dashboard</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
<!--														<li class="menu-item menu-item-active" aria-haspopup="true">
															<a href="index.html" class="menu-link">
																<span class="menu-text">Tutor Policy</span>
																<span class="menu-desc"></span>
															</a>
														</li>-->
														<li class="menu-item" aria-haspopup="true">
															<a target="_blank" href="https://tutorgigs.io/knowledgebase/index.html" class="menu-link">
																<span class="menu-text">Tutor Trainin Video</span>
																<span class="menu-desc"></span>
															</a>
														</li>
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a href="{{route('job_calendar')}}" class="menu-link">
																<span class="menu-text">Job Calendar</span>
																<span class="menu-desc"></span>
															</a>
														</li>
                                                                                                                
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a  href="{{route('complete_sessions')}}" class="menu-link">
																<span class="menu-text">Complete Sessions</span>
																<span class="menu-desc"></span>
															</a>
														</li>
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a href="https://tutorgigs.io/dashboard/Tutor-Training -Kelly- Services.pptx" class="menu-link">
																<span class="menu-text">Tutor Instructions</span>
																<span class="menu-desc"></span>
															</a>
														</li>
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a  href="{{route('payment_list')}}" class="menu-link">
																<span class="menu-text">Payments</span>
																<span class="menu-desc"></span>
															</a>
														</li>
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a  href="{{route('messages')}}" class="menu-link">
																<span class="menu-text">Messages</span>
																<span class="menu-desc"></span>
															</a>
														</li>
													</ul>
												</div>
											</li>
                                                                                        
                                                                                        
                                                                                        <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">Job Boards</span>
													<span class="menu-desc"></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														
														
														
														<li class="menu-item" aria-haspopup="true">
															<a  href="{{route('job_board')}}" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"></rect>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Tutor Job Boards</span>
															</a>
														</li>
                                                                                                                
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a href="{{route('observer_job_board')}}" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"></rect>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Observer Job Boards</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
												<a href="javascript:;" class="menu-link menu-toggle">
													<span class="menu-text">My Sessions</span>
													<span class="menu-desc"></span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu menu-submenu-classic menu-submenu-left">
													<ul class="menu-subnav">
														
														
														
														<li class="menu-item" aria-haspopup="true">
															<a  href="{{route('tutor_sessions')}}" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"></rect>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Tutor Sessions</span>
															</a>
														</li>
                                                                                                                
                                                                                                                <li class="menu-item" aria-haspopup="true">
															<a href="{{route('observer_sessions')}}" class="menu-link">
																<span class="svg-icon menu-icon">
																	<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Home/Library.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"></rect>
																			<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"></rect>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<span class="menu-text">Observer Sessions</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											
											
                                                                                        <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true" >
												<a href="{{route('get_qualification')}}" class="menu-link">
													<span class="menu-text">Get Qualified More Subjects</span>
													
												</a>
                                                                                         </li>
                                                                                        
											
										</ul>
										<!--end::Header Nav-->
									</div>
									<!--end::Header Menu-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">
								
								<!--end::Search-->
								<!--begin::Notifications-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-sm mr-1 pulse pulse-danger">
											<i class="flaticon2-notification"></i>
											<span class="pulse-ring"></span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<form>
											<!--begin::Header-->
											<div class="d-flex flex-column pt-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url({{asset('tutor_assets/media/misc/bg-1.jpg')}})">
												<!--begin::Title-->
												<h4 class="d-flex flex-center rounded-top">
													<span class="text-white">Tutor Notifications</span>
<!--													<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>-->
												</h4>
												<!--end::Title-->
												<!--begin::Tabs-->
												
												<!--end::Tabs-->
											</div>
											<!--end::Header-->
											<!--begin::Content-->
											<div class="tab-content">
												<!--begin::Tabpane-->
												<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
													<!--begin::Scroll-->
													<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
														<!--begin::Item-->
														
														
														<!--begin::Item-->
														
														
														<div class="d-flex align-items-center mb-6">
													<!--begin::Bullet-->
													<span class="bullet bullet-bar bg-success align-self-stretch"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<label class=" m-0 mx-4">
														
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">New Job Found</a>
														<span class="text-muted font-weight-bold">Session Id - 66032</span>
													</div>
													
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center  mb-6">
													<!--begin::Bullet-->
													<span class="bullet bullet-bar bg-primary align-self-stretch"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<label class="m-0 mx-4">
														
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">New Job Found</a>
														<span class="text-muted font-weight-bold">Session Id - 76032</span>
													</div>
													
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center  mb-6">
													<!--begin::Bullet-->
													<span class="bullet bullet-bar bg-warning align-self-stretch"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<label class="m-0 mx-4">
														
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">New Job Found</a>
														<span class="text-muted font-weight-bold">Session Id - 66032</span>
													</div>
													
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center  mb-6">
													<!--begin::Bullet-->
													<span class="bullet bullet-bar bg-info align-self-stretch"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<label class="m-0 mx-4">
														
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">New Job Found</a>
														<span class="text-muted font-weight-bold">Session Id - 43032</span>
													</div>
													
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center  mb-6">
													<!--begin::Bullet-->
													<span class="bullet bullet-bar bg-danger align-self-stretch"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<label class="m-0 mx-4">
														
													</label>
													<!--end::Checkbox:-->
													<!--begin::Title-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">New Job Found</a>
														<span class="text-muted font-weight-bold">Session Id - 43032</span>
													</div>
													
												</div>
														
														
													</div>
													<!--end::Scroll-->
													<!--begin::Action-->
													<div class="d-flex flex-center pt-7">
														<a href="{{route('notification')}}" class="btn btn-light-primary font-weight-bold text-center">See All</a>
													</div>
													<!--end::Action-->
												</div>
												
											</div>
											<!--end::Content-->
										</form>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								
								
								
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
											<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
											<span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{Auth::guard('tutor')->user()->f_name}}</span>
											<span class="symbol symbol-35">
												<span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">{{strtoupper(Auth::guard('tutor')->user()->f_name[0])}}</span>
											</span>
										</div>
									</div>
									<!--end::Toggle-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
                                        @yield('content')
                                        
                                        <!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021?</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Tutor Gigs</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				</h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
                                             <?php
                                      $dir = $_SERVER['DOCUMENT_ROOT'].'/tutorgigs.io/uploads/avatar' .'/' . Auth::guard('tutor')->user()->id ; 
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
						<div class="symbol-label" style="background-image:url('{{$profile_image}}')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::guard('tutor')->user()->f_name}} {{Auth::guard('tutor')->user()->lname}}</a>
						<div class="text-muted mt-1">Tutor</div>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{Auth::guard('tutor')->user()->email}}</span>
								</span>
							</a>
							<a href="{{url('login')}}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
						</div>
					</div>
				</div>
				
				
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
                                
                                <div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="{{route('profile')}}" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"></path>
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Profile</div>
								<div class="text-muted">Account settings and more
								</div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--begin::Item-->
					
					
					<!--begin::Item-->
					
				</div>
				
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<!--begin::Quick Panel-->
		
		<!--end::Quick Panel-->
		
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:tutor_assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		
		
		
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('tutor_assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('tutor_assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('tutor_assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{asset('tutor_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('tutor_assets/js/pages/widgets.js')}}"></script>
                <script src="{{asset('tutor_assets/js/pages/custom/chat/chat.js')}}"></script>
		<!--end::Page Scripts-->
                
                @yield('js')
	</body>
	<!--end::Body-->
</html>