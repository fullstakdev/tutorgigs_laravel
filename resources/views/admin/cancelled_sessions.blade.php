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
										<h5 class="text-dark font-weight-bold my-1 mr-5">Cancelled Session List</h5>
										
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
                                                                
                                                                <div class="card card-custom gutter-b example example-compact">
											
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('cancelled_sessions')}}" method="post">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="row">
													<div class="col-sm-6">
													<div class="form-group">
														<label>Select</label>
														<select class="form-control form-control-solid" name="type">
															<option value="">All</option>
                                                                                                                        <option value="1" @if(@$type == 1) selected @endif>Resolved</option>
                                                                                                                        <option value="0" @if(@$type == 0) selected @endif>Unresolved</option>
														</select>
													</div>
												 </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" style="margin-top: 26px" class="btn btn-primary mr-2">Filter</button>
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
													<span class="card-label font-weight-bolder text-dark">Cancelled Session History</span>
													<span class="text-muted mt-3 font-weight-bold font-size-sm">More than {{$tot_record}}+ history</span>
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
                                                                                                             <form id="form-manager" class="content_wrap" action="{{route('post_resolved_session')}}" method="post">
                                                                                                                 @csrf
                                                                                                                 <input type="hidden" id="arruser" name="arruser" value=""/>
														<!--begin::Table-->
														<div >
                                                                                                                    <input type="submit" class="btn btn-primary" value="Resolved Selected" id="resolve_session"  name="resolve_session">
															<table id="tutor_table" class="table  table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-40px"><label class="checkbox checkbox-single">
                                                                                                                                                    <input type="checkbox" value="" class="checkable" id="checkAll">
                                                                                                                                                    <span></span>
                                                                                                                                                </label></th>
																		<th class="p-0 min-w-150px">SESSION</th>
																		<th class="p-0 min-w-180px text-right">SESSION TIME</th>
																		<th class="p-0 min-w-120px text-center">TUTOR</th>
																		<th class="p-0 min-w-110px text-center">STATUS</th>
																		<th class="p-0 min-w-200px text-center">Reason</th>
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
																		<td class="pl-0 py-4">
																			<label class="checkbox checkbox-single">
                                                                                                                                                    <input type="checkbox" value="<?php echo $ses_det->ID;?>" class="checkable">
                                                                                                                                                    <span></span>
                                                                                                                                                </label>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{@$grade->name}}</a>
																			<div>
																				<span class="">Session ID:</span>
																				{{$ses_det->SessionID}}
																			</div>
																		</td>
																		<td class="text-right">
																			<span class="text-dark-75 d-block font-size-lg">{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</span>
																			
																		</td>
																		<td class="text-center">
																			<span class="font-weight-500"> @if(@$ses_det->tut_teacher_id > 0)
                                                                                                                                       {{@$tutor->f_name}}&nbsp;{{@$tutor->lname}}
                                                                                                                                     @else
                                                                                                                                        - 
                                                                                                                                    @endif</span>
																		</td>
																		<td class="text-right">
																			@if($ses_det->ReadStatus ==1)
                                                                                                                                                         <span class="label label-success label-inline font-weight-lighter mr-2">Resolved</span>
                                                                                                                                                        @else
                                                                                                                                                        <span class="label label-danger label-inline font-weight-lighter mr-2">Unresolved</span>
                                                                                                                                                        @endif
																		</td>
																		<td class="text-center">
                                                                                                                                                    {{$ses_det->CancelReason}}				
																		
																		</td>
																	</tr>
                                                                                                                                        
                                                                                                                                      @endforeach  
																	
																</tbody>
															</table>
														</div>
                                                                                                                </form>
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
                                        
                                        <script>
 $(document).ready(function(){

$("#checkAll").click(function(){

  $('input:checkbox').not(this).prop('checked', this.checked);
    }); 
          ////////////////  
   $('#resolve_session').on('click',function(){
       
   
    var count = $('#form-manager .checkable:checked').length;
    $('#arruser').val("");
    $('#form-manager .checkable:checked').each(function(){
    var val = $('#arruser').val();
    var id = $(this).val();
    $('#arruser').val(val+','+id);
    });
    var str = $('#arruser').val();
    $('#arruser').val(str.replace(/^\,/, ""));
    return confirm('Are you sure?');
 
   });
});
</script>
                                @endsection