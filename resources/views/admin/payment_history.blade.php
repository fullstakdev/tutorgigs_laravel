@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
					<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                            
                                                            @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<!--begin::Notice-->
                                                                
                                                                <div class="card card-custom gutter-b example example-compact">
											
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('tutor_session_list')}}" method="post">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="row">
													<div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Tutor</label>
                                                                                                                        <select class="form-control form-control-solid" name="session_type">

                                                                                                                           <option value="55333">Adriana  Rivera Villegas </option>
                                                                                                                            <option value="62103">Alma Armendariz Galaviz </option>
                                                                                                                            <option value="1017">Amur Kouka </option>
                                                                                                                            <option value="47382">Ansley Pierce </option>
                                                                                                                            <option value="18692">Boris Miranda </option>
                                                                                                                            <option value="857">Divya Joseph </option>
                                                                                                                            <option value="1091">Nick Mathew </option>
                                                                                                                            <option value="62966">Romina Aguilar </option>
                                                                                                                            <option value="62958">Sandy Berrocal </option>
                                                                                                                            <option value="2840">Test2 test2 </option>
                                                                                                                            <option value="61520">Yasmeen Graciano </option>

                                                                                                                        </select>
                                                                                                                </div>
												          </div>
                                                                                                          <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>All(Tutor & Obsever sessions)</label>
                                                                                                                        <select class="form-control form-control-solid" name="session_type">

                                                                                                                           <option value="55333">Tutor Sessions</option>
                                                                                                                            <option value="62103">Observer Sessions</option>
                                                                                                                           

                                                                                                                        </select>
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>From Date</label>
                                                                                                                        <input type="text" class="form-control" id="kt_datepicker_1" readonly="readonly" placeholder="Select date">
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>To Date</label>
                                                                                                                        <input type="text" class="form-control" id="kt_datepicker_1" readonly="readonly" placeholder="Select date">
                                                                                                                </div>
												          </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" class="btn btn-primary mr-2">Search</button>
                                                                                                        </div>
                                                                                                    </div>
													</div>
                                                                                                    
                                                                                                    
												</div>
												
											</form>
											<!--end::Form-->
										</div>
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Unpaid Payment History</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">55 Sessions - 55 Total Hours</span>
												
                                                                                                </h3>
                                                                                            
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<div class="btn-group " role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Pay By Paypal</button>
    <button type="button" class="btn btn-success">Mark as Paid</button>

</div>
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															<table id="tutor_table" class="table  table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-40px"><label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label></th>
																		<th class="p-0 min-w-230px">SESSION</th>
																		
																		<th class="p-0 min-w-100px text-right">TUTOR</th>
																		<th class="p-0 min-w-110px text-right">STATUS</th>
                                                                                                                                                <th class="p-0 min-w-110px text-right">TOTAL HOURS</th>
																		<th class="p-0 min-w-150px text-right">ACTION</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                   
																	<tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr><tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        <tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">ID:</span>
																				60045
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				April 14, 2021 10:30PM
																			</div>
																		</td>
																		
																		<td class="text-right">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">test2 test2</a>
																			<div>
																				<span class="">Paypal Email: </span>
																				test2@gmail.com
																			</div>
                                                                                                                                                        <span class="label label-info label-inline font-weight-lighter mr-2">Tutor</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                         <span class="label label-danger label-inline font-weight-lighter mr-2">Unpaid</span>
																		</td>
                                                                                                                                                <td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">2</span>
																			
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																
																<li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Mark as paid</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-item">
																	<a href="{{url('view_session_details')}}/4" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Pay by paypal</span>
																		</span>
																	</a>
																</li>
                                                                                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                                                                                <li class="navi-item">
																	<a href="" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">View Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                               
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
																	
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
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