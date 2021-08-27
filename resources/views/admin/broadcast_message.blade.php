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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Broadcast Message</h5>
										
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
                                                            
                                                            
                                                            @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<!--begin::Notice-->
                                                                
                                                                
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Broadcast Message</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">554 Teachers</span>
												</h3>
												
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
                                                                                            
                                                                                            <div class="row" style="margin-top: 20px">
												<div class="col-xl-12">
												<div class="d-flex align-items-center">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-info flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Select All</a>
													</div>
													
												</div>
												</div>
                                                                                                     
                                                                                                    </div>
                                                                                            <div >
										<!--begin::List Widget 6-->
										<div class="card card-custom bg-light-success card-stretch gutter-b">
											
											<div class="card-body pt-5">
                                                                                            <div class="row">
												<div class="col-xl-6">
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">test2 test2</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;test2@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sindy Bonilla</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;sindybonila@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Boris Marinda</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;boris@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Peter Martin</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;petermartin@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">William James</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;william@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Katrina Allica</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;katrina@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Bill Gates</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;billgates@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Create FireStone</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;billgates@gmail.com</span>
													</div>
													
												</div>
                                                                                                    </div>
                                                                                            <div class="col-xl-6">
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">test2 test2</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;test2@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sindy Bonilla</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;sindybonila@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Boris Marinda</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;boris@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Peter Martin</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;petermartin@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">William James</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;william@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Katrina Allica</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;katrina@gmail.com</span>
													</div>
													
												</div>
                                                                                                <div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Bill Gates</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;billgates@gmail.com</span>
													</div>
													
												</div>
												
												<div class="d-flex align-items-center mb-6">
													<!--begin::Checkbox-->
													<label class="checkbox checkbox-lg checkbox-light-white flex-shrink-0 m-0 mr-4">
														<input type="checkbox" value="1">
														<span></span>
													</label>
													<!--end::Checkbox-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 py-2">
														<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Create FireStone</a>
														<span class="text-muted font-weight-bold"><i class="fa fa-envelope-open-text"></i>&nbsp;billgates@gmail.com</span>
													</div>
													
												</div>
                                                                                                    </div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 6-->
									</div>
                                                                                                
                                                                                                </div>
                                                                                            
											</div>
											<!--end::Body-->
                                                                                        
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