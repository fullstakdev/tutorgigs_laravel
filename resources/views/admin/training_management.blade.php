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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Trainign Management</h5>
										
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
                                                              <div class="alert alert-success text-center" role="alert">{{ $message }}</div>
                                                            @endif
                                                            @if ($message = Session::get('error'))   
                                                              <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
                                                            @endif
                                                            
								<!--begin::Notice-->
                                                                
                                                                <div class="card card-custom gutter-b example example-compact">
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Upload Certification Document</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Upload Certification Document</span>
												</h3>
												<hr>
											</div>
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('upload_training_file')}}" method="post" enctype="multipart/form-data">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="row">
													
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Name</label>
                                                                                                                        <input type="text" class="form-control" name="file_name" required="">
                                                                                                                </div>
												          </div>
                                                                                                        <div class="col-sm-6">
                                                                                                                <div class="form-group">
                                                                                                                        <label>Uplaod File</label>
                                                                                                                        <input type="file" class="form-control" name="file" required="" >
                                                                                                                </div>
												          </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
													<span class="card-label font-weight-bolder text-dark">Training Item List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">Training Item List</span>
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
                                                                                                                        <th class="p-0 min-w-230px">NAME</th>
                                                                                                                        <th class="p-0 min-w-230px text-right">URL</th>
                                                                                                                        <th class="p-0 min-w-150px text-right">ACTION</th>
                                                                                                                    </tr></thead>

                                                                                                                    <tbody>
                                                                                                                        
                                                                                                                        @foreach($get_test_result as $row)
                                                                                                                        <tr class="pl-0">
                                                                                                                        <td><?php echo $row->name;?></td>
                                                                                                                        <td class="text-right pr-0"><a href="{{asset('training_docs')}}/{{$row->file}}" target="_blank"><?php echo $row->file;?></a></td>
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
																	<a href="{{url('delete_training_management')}}/{{$row->id}}" class="navi-link" onclick="return confirm('Are you sure you want to delete this?')">
																		<span class="navi-text">
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
                                
                 
                                         
                                            
                                                             
                                
                 
                                     </tbody></table>
															
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