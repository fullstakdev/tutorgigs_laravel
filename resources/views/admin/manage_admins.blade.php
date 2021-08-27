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
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Manage Admin Users</h5>
									<!--end::Page Title-->
									
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<div class="card-toolbar">
													<a href="{{route('new_admin')}}" class="btn btn-info btn-sm font-weight-bolder font-size-sm mr-3">Create New Admin</a>
                                                                                                          
												</div>
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
					<div class="d-flex flex-column-fluid mt-7" >
							<!--begin::Container-->
							<div class="container">
                                                           @if ($message = Session::get('success'))   
                                                              <div class="alert alert-success text-center" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Admin Users List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than {{count($resultAdmins)}}+ admins</span>
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
																		
																		<th class="p-0 min-w-230px">NAME</th>
																		<th class="p-0 min-w-100px text-right">EMAIL</th>
																		<th class="p-0 min-w-100px text-right">PHONE</th>
																		<th class="p-0 min-w-110px text-right">ROLE</th>
																		<th class="p-0 min-w-150px text-right">ACTION</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                    
                                                                                                                                    @foreach($resultAdmins as $admin)
                                                                                                                                  <tr role="row" class="odd">
																		
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$admin->first_name}}&nbsp;{{$admin->last_name}}</a>
																			<div>
																				<span class="">Last Login:</span>
																				{{date('F d,Y H:iA', strtotime($admin->latest_login))}}																		</div>
																		</td>
																		<td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">{{$admin->email}}</span>
																			
																		</td>
																		<td class="text-right">
																			<span class="font-weight-500">{{$admin->phone_number}}</span>
																		</td>
																		<td class="text-right">
																			
                                                                                                                                                        <span class="label label-primary label-inline mr-2">{{$listAdminRoles[@$admin->role]}}</span>
																		</td>
																		<td class="text-right pr-0">
                                                                                                                                                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
														<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="ki ki-bold-more-hor"></i>
														</a>
														<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose Option:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
                                                                                                                                    			<a href="{{url('edit_admin')}}/{{$admin->id}}" class="navi-link">
																			<span class="label label-xl label-inline label-light-success">Edit</span>
																		
																	</a>
                                                                                                                                    																</li>
																
                                                                                                                                																<li class="navi-item">
																	<a href="{{url('delete_admin')}}/{{$admin->id}}" class="navi-link" onclick="return confirm('Are you sure you want to delete this admin?')">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Delete</span>
																		</span>
																	</a>
																</li>
                                                                                                                                																<li class="navi-item">
                                                                                                                                    
                                                                                                                                   
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