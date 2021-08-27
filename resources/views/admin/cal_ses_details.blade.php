@extends('template.container')
@section('css')
<style>
    .page-item.active .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .page-link {
   
    padding: .7rem;
    font-size: 20px;
    padding-right: 15px;
    padding-left: 15px;
    border-radius: 6px;
    }
    .pagination { float:right}
    </style>
@endsection
@section('content')
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Tutor Session List</h5>
										
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								
								<!--end::Toolbar-->
							</div>
						</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
							<!--begin::Container-->
							<div class="container">
                                                            
                                                          
								<div class="card card-custom gutter-b">
									<div class="card-body">
										<!--begin::Top-->
										<div class="d-flex">
											
											<!--begin: Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
													<!--begin::User-->
													<div class="mr-3">
														<!--begin::Name-->
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math														                                                                                                                                                                                                                               </a>
														<!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                   
													                <span class="label label-danger label-inline mr-2 viewSession" sessionid="6658" action="Intervention">Session detail &amp; download</span>
															<span class="label label-info label-inline mr-2 viewSession" sessionid="6658" action="Intervention">View</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <a href="javascript:void(0)"  class="btn btn-primary btn-lg ">JOIN AS OBSERVER</a>
                                                                                                          <a href="javascript:void(0)" sessionid="6658" action="Intervention" class="btn btn-danger btn-lg">JOIN AS INSTRUCTOR</a>  
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder ">Assign Tutor</span>
																<span class="opacity-70 font-size-sm"><i class="far fa-user"></i>&nbsp;&nbsp;<strong>Samantha Mathew </strong></span>
                                                                                                                                <span class="opacity-70"><i class="fa fa-envelope-open-text"></i>&nbsp;&nbsp;Samantha@gmail.com </span>
                                                                                                                                <span class="opacity-70"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;April 20,2021 13:00PM </span>
                                                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70 font-size-sm"><i class="far fa-user"></i>&nbsp;&nbsp;<strong>test2 test2</strong></span>
                                                                                                                                <span class="opacity-70"><i class="fa fa-envelope-open-text"></i>&nbsp;&nbsp;test2@gmail.com </span>
                                                                                                                                <span class="opacity-70"><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;April 20,2021 13:00PM </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Board</span>
																<span class="opacity-70">MeritHub</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Lesson</span>
																<span class="opacity-70">5.4F Math 30 Minutes</span>
															</div>
														</div>
													
												</div>
												<!--end::Content-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Top-->
										<!--begin::Separator-->
										<div class="separator separator-solid my-7"></div>
										<!--end::Separator-->
										<!--begin::Bottom-->
										<div class="d-flex align-items-center flex-wrap">
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Session ID</span>
													<span class="font-weight-bolder font-size-h5">6658</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Start Time</span>
													<span class="font-weight-bolder font-size-h5">April 20,2021 13:00PM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-clock-1 icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Create Date</span>
													<span class="font-weight-bolder font-size-h5">April 13,2021 01:42AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Status</span>
                                                                                                 <span class="font-weight-bolder font-size-h5 text-danger">Not Assigned</span>
                                                                                                        													
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											
											<!--end: Item-->
											<!--begin: Item-->
											
											<!--end: Item-->
										</div>
										<!--end::Bottom-->
                                                                                
                                                                                
									</div>
								</div>
                                                                
                                                          
                                                            
                                                                </div>
                                                        
                                                        </div>
					<!--end::Content-->
                                        
                                       
<div class="modal fade" id="session_details_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Session Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" id="session_details_body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            
            </div>
        </div>
    </div>
</div
				@endsection	
                                @section('js')
                                	
<!--                                    <script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js')}}"></script>-->
                                    <script src="{{asset('assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
                                    <script>
                                       $('.viewSession').click(function() {
     var SessionID=$(this).attr('SessionID');
     var action = $(this).attr('action');
     $.ajax({
         
       type:'GET',
  
       url:"<?php echo url('session_details');?>/"+SessionID,
       success:function(data){
       
        
         $('#session_details_body').html(data);
           $('#session_details_modal').modal('show');
       }
     });
   }); 
   

$(document).ready(function() { 
    $('#tutor_table').DataTable({"bLengthChange": false,});
} );






                                        </script>
                                @endsection