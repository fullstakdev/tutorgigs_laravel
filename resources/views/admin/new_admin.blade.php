@extends('template.container')
@section('css')
@endsection
@section('content')
<?php
$role = Auth::guard('admin')->user()->role;
        if($role == 0)
        {
           $resultAdminRoles = DB::table('gig_admin_roles')->where('isActive', '!=', 0)->where('value', 0)->get();
        }
       else 
       {
           $resultAdminRoles = DB::table('gig_admin_roles')->where('isActive', '!=', 0)->get();
       }
?>
					<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Create New Admin</h5>
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
												<h3 class="card-title">Fillup New Admin Form</h3>
												
											</div>
											<!--begin::Form-->
                                                                                        <form class="form" method="post" action="{{url('post_admin')}}" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
													<div class="form-group row">
														<div class="col-lg-6">
															<label>First Name:</label>
                                                                                                                        <input type="test" name="first_name" required="" class="form-control" placeholder="Enter first name">
															
														</div>
														<div class="col-lg-6">
															<label>Last Name:</label>
                                                                                                                        <input type="text" name="last_name" required="" class="form-control" placeholder="Enter last name">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Email:</label>
                                                                                                                        <input type="email" name="email" required="" class="form-control" placeholder="Enter Email">
															
														</div>
														<div class="col-lg-6">
															<label>Phone:</label>
                                                                                                                        <input type="text" name="phone" required="" class="form-control" placeholder="Enter contact number">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Password:</label>
                                                                                                                        <input type="password" name="password" required="" class="form-control" placeholder="">
															
														</div>
														<div class="col-lg-6">
															<label>Confirm Password:</label>
                                                                                                                        <input type="password" required="" class="form-control" placeholder="">
															
														</div>
													</div>
                                                                                                    <div class="form-group row">
														<div class="col-lg-6">
															<label>Username</label>
                                                                                                                        <input type="text" required="" class="form-control" name="username" placeholder="Enter username">
															
														</div>
														<div class="col-lg-6">
															<label>Role</label>
															<select class="form-control selectpicker" name="role">
                                                                                                                            <option value="">Select role</option>
															   @foreach($resultAdminRoles as $role)
                                                                                                                                <option value="{{$role->value}}">{{$role->name}}</option>
                                                                                                                            @endforeach

                                                                                                                         </select>
														
														</div>
													</div>
                                                                                                    
                                                                                                    <div class="form-group row">
														
														<div class="col-lg-6">
															<label>Status</label>
                                                                                                                        <select class="form-control selectpicker" required="" name="status">
                                                                                                                            <option value="">Select status</option>
															    <option value="1">Active</option>
                                                                                                                            <option value="0">Inactive</option>
                                                                                                                         </select>
														
														</div>
													</div>
													
                                                                                                    
                                                                                                    
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2">Save</button>
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