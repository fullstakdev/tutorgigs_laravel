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
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Tutor List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
												</h3>
												<hr>
											</div>
                                                                                        
                                                                                        
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables11">
													<!--begin::Tap pane-->
													
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
														<!--begin::Table-->
														<div >
															<table id="tutor_table" class="table  table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-40px"></th>
																		<th class="p-0 min-w-230px">NAME</th>
																		<th class="p-0 min-w-100px text-right">EMAIL</th>
																		<th class="p-0 min-w-100px text-right">PHONE</th>
																		<th class="p-0 min-w-110px text-right">STATUS</th>
																		<th class="p-0 min-w-150px text-center">ACTION</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    @foreach($tutors as $tutor)
																	<tr>
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable">
                            <span></span>
                        </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$tutor->f_name}}&nbsp;{{$tutor->lname}}</a>
																			<div>
																				<span class="">Ceated date:</span>
																				{{date("F d, Y", strtotime($tutor->created_date))}}
																			</div>
																		</td>
																		<td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">{{$tutor->email}}</span>
																			
																		</td>
																		<td class="text-right">
																			<span class="font-weight-500">{{$tutor->phone}}</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-danger label-dot mr-2"></span>
                                                                                                                                                        <span class="font-weight-bold text-danger">Online</span>
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
                                                                                                                                    @if($tutor->created_by == 2)
																	<a href="{{url('edit-admintutor')}}/{{$tutor->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		</span>
																	</a>
                                                                                                                                    @else
                                                                                                                                       <a href="{{url('edit_tutor')}}/{{$tutor->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		</span>
																	</a>
                                                                                                                                    @endif
																</li>
																
                                                                                                                                @if($tutor->created_by == 2)
																<li class="navi-item">
																	<a href="{{url('tutor_detail')}}/{{$tutor->id}}" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Applicant Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                                @else
                                                                                                                                <li class="navi-item">
																	<a href="{{url('applicant_detail')}}/{{$tutor->id}}" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Applicant Details</span>
																		</span>
																	</a>
																</li>
                                                                                                                                @endif
																<li class="navi-item">
                                                                                                                                    
																	<a href="{{url('delete_tutor')}}/{{$tutor->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-danger">Delete</span>
																		</span>
																	</a>
                                                                                                                                   
																</li>
																
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
																			
																		
																		</td>
																	</tr>
																	@endforeach
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
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection