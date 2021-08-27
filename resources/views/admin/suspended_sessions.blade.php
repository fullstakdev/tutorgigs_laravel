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
													<span class="card-label font-weight-bolder text-dark">Suspened Sessions By Admin</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">{{$tot_record}} Sessions</span>
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
																		
																		<th class="p-0 min-w-230px">SESSION</th>
																		
																		<th class="p-0 min-w-100px text-right">CANCELLED TUTOR</th>
																		<th class="p-0 min-w-100px text-right">CANCELLED DATE</th>
																	</tr>
																</thead>
																<tbody>
                                                                                                                                   
                                                                                                                                      @foreach($results as $ses_det)
                                                                                                                                    <?php
                                                                                                                                    $grade = DB::table('terms')->where('id', $ses_det->grade_id)->first();
                                                                                                                                    if(@$ses_det->tut_teacher_id)
                                                                                                                                     $tutor = \App\Tutor::find($ses_det->tut_teacher_id);
                                                                                                                                    
                                                                                                                                    ?>
																	<tr>
																		
																		<td class="pl-0">
																			<a href="javascript:void(0)" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">3rd Grade Math</a>
																			<div>
																				<span class="">Tutoring ID:</span>
																				{{$ses_det->tutoring_id}}
																			</div>
                                                                                                                                                        <div>
																				<span class="">Time:</span>
																				{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}
																			</div>
																		</td>
																		
																		<td class="text-right">
																			@if(@$ses_det->tut_teacher_id > 0)
                                                                                                                                       {{@$tutor->f_name}}&nbsp;{{@$tutor->lname}}
                                                                                                                                       <div>
																				{{@$tutor->email}}
																			</div>
                                                                                                                                     @else
                                                                                                                                        - 
                                                                                                                                    @endif
																			
                                                                                                                                                       
																		</td>
																		<td class="text-right">
																			{{date('F d,Y H:iA', strtotime($ses_det->created_at))}}
                                                                                                                                                        
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
                                    <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}"></script>
                                    <script>
                                        

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection