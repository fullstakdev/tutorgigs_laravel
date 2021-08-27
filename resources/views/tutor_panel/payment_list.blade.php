@extends('template.tutor_container')
@section('css')
@endsection
@section('content')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<div class="d-flex align-items-center font-weight-bold my-2">
											<!--begin::Item-->
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-white icon-1x"></i>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Home</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
											<!--end::Item-->
										</div>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Info-->
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
								<div class="row">
									
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
                                                                                        <div class="card-header border-0" style="min-height: 25px">
												
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
                                                                                            <div class="row">
												<div class="col-xl-6">
										
										<a  class="card card-custom bg-info bg-hover-state-info card-stretch card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
															<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<div class="text-inverse-info font-weight-bolder font-size-h5 mb-2 mt-5">{{@$total_paid_sessions}}</div>
												<div class="font-weight-bold text-inverse-info font-size-sm">Paid Sessions</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Stats Widget 17-->
									</div>
                                                                                            <div class="col-xl-6">
										
										<a href="#" class="card card-custom bg-danger bg-hover-state-primary card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
															<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">{{@$total_unpaid_sessions}}</div>
												<div class="font-weight-bold text-inverse-primary font-size-sm">Pending Sessions</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Stats Widget 14-->
									</div>
                                                                                                </div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
                                                                
                                                                
								<!--begin::Row-->
								<div class="row">
									
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder text-dark">Payment List</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than {{$payment_list->count('id')}}+ payment</span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<div class="table-responsive">
													<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
														<thead>
															<tr class="text-left">
																
																
																<th style="min-width: 250px">Session</th>
																<th style="min-width: 150px">Start Time</th>
																<th class="pr-0 text-right" style="min-width: 150px">Status</th>
															</tr>
														</thead>
														<tbody>
															
															@foreach($payment_list as $ses_det)
                                                                                                                         <?php $grade = DB::table('terms')->where('id', $ses_det->grade_id)->first(); ?>
                                                                                                                        <tr>
																
																
																<td>
																	<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{@$grade->name}}</span>
																	<span class="text-muted font-weight-bold">ID : {{$ses_det->id}}</span>
																</td>
																<td>
																	<div class="d-flex flex-column w-100 mr-2">
																		{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}
																	</div>
																</td>
                                                                                                                                @if($ses_det->payment_status == 1)
																<td class="pr-0 text-right">
																	<span class="label label-success label-inline" sessionid="6701" action="Intervention">Paid</span><br />
                                                                                                                                        <span class="text-muted font-weight-bold">Payment Date : {{date('F d,Y H:iA', strtotime($ses_det->payment_date))}}</span>
																</td>
                                                                                                                                @else
                                                                                                                                <td class="pr-0 text-right">
																	<span class="label label-danger label-inline" sessionid="6701" action="Intervention">Unpaid</span><br />
                                                                                                                                        
																</td>
                                                                                                                                @endif
															</tr>
                                                                                                                        @endforeach

														</tbody>
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								
								<!--end::Row-->
								<!--begin::Row-->
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection