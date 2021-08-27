@extends('template.container')
@section('css')
@endsection
@section('content')
<?php

           $resultAdminRoles = DB::table('gig_admin_roles')->where('isActive', '!=', 0)->get();

?>
					<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit Admin</h5>
									<!--end::Page Title-->
									
								</div>
								
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Fillup Edit Admin Form</h3>
												
											</div>
											<!--begin::Form-->
                                                                                        <form class="form" method="post" action="{{url('post_edit_admin')}}" enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <input type="hidden" name="admin_id" value="{{$admin->id}}">
												<div class="card-body">
													<div class="form-group row">
														<div class="col-lg-6">
															<label>First Name:</label>
															<input type="test" name="first_name" class="form-control" value="{{$admin->first_name}}">
															
														</div>
														<div class="col-lg-6">
															<label>Last Name:</label>
															<input type="text" name="last_name" class="form-control" value="{{$admin->last_name}}">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Email:</label>
															<input type="email" name="email" class="form-control" value="{{$admin->email}}">
															
														</div>
														<div class="col-lg-6">
															<label>Phone:</label>
															<input type="text" name="phone" class="form-control" value="{{$admin->phone_number}}">
															
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Username</label>
															<input type="text" class="form-control" name="username" value="{{$admin->user_name}}">
															
														</div>
														<div class="col-lg-6">
															<label>Role</label>
															<select class="form-control selectpicker" name="role">
                                                                                                                            <option value="">Select role</option>
															   @foreach($resultAdminRoles as $role)
                                                                                                                                <option value="{{$role->value}}" @if($admin->role == $role->value) selected @endif>{{$role->name}}</option>
                                                                                                                            @endforeach
 
                                                                                                                         </select>
														
														</div>
													</div>
													
                                                                                                    <div class="form-group row">
														
														<div class="col-lg-6">
															<label>Status</label>
                                                                                                                        <select class="form-control selectpicker" required="" name="status">
                                                                                                                            <option value="">Select status</option>
															    <option value="1" @if($admin->status == 1) selected @endif>Active</option>
                                                                                                                            <option value="0" @if($admin->status == 0) selected @endif>Inactive</option>
                                                                                                                         </select>
														
														</div>
													</div>
                                                                                                    
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2">Update</button>
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