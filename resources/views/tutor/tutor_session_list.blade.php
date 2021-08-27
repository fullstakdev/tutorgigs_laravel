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
                                                            
                                                            <div class="col-md-12">
										<!--begin::Card-->
										
										
										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Filter Session</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<a target="_blank" href="https://tutorgigs.io/techtest/" id="techtest"  class="btn btn-outline-danger">Technology Test</a>
													</div>
												</div>
											</div>
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('tutor_session_list')}}" method="post">
                                                                                            @csrf
												<div class="card-body">
                                                                                                    <div class="row">
													<div class="col-sm-6">
													<div class="form-group">
														<label>Select</label>
														<select class="form-control form-control-solid" name="session_type">
															<option value="all" <?php echo (isset($session_type)&&$session_type=="all")?'selected':NULL; ?> >All</option>
                                 <option value="upcoming" <?php echo (isset($session_type)&&$session_type=="upcoming")?'selected':NULL; ?> >Upcoming sessions</option>
                                 <option value="past" <?php echo (isset($session_type)&&$session_type=="past")?'selected':NULL; ?>>Past sessions</option>
														</select>
													</div>
												 </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" style="margin-top: 26px" class="btn btn-primary mr-2">Submit</button>
                                                                                                        </div>
                                                                                                    </div>
													</div>
												</div>
												
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->
									</div>
								<!--begin::Card-->
                                                                
                                                                @foreach($sessions as $ses_det)
                                                                <?php
                                                                $grade = DB::table('terms')->where('id', $ses_det->grade_id)->first();
                                                                $tutor = \App\Tutor::find($ses_det->tut_teacher_id);
                                                                if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
                                                                {
                                                                    $observer = \App\Tutor::find($ses_det->tut_observer_id);
                                                                }
                                                                
                                                                $lesson = DB::table('master_lessons')->where('id', $ses_det->lesson_id)->first();
                                                                
                                                                
                                                                $sesStartTime = $ses_det->ses_start_time;
                                                                $curr_time    = date("Y-m-d H:i:s");

                                                                $in_sec = strtotime($sesStartTime) - strtotime($curr_time);
                                                                 if(!empty($row['Tutoring_client_id'])&&$row['Tutoring_client_id']=='Drhomework123456')
                        {
                        $Sessiontype='Drhomework';
                        }
                        else{
                        $Sessiontype='Intervention';
                        }
                                                                
                                                                ?>
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$grade->name}}
														@if($ses_det->tut_teacher_id>0)&nbsp;&nbsp;<span class="label label-info label-pill label-inline mr-2">Tutor</span> @endif
                                                                                                               @if($ses_det->add_observer > 0 )&nbsp;&nbsp;<span class="label label-success label-pill label-inline mr-2">Observer</span> @endif
                                                                                                                </a>
														<!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                    @if($ses_det->board_type == 'groupworld')
															<a href="{{$tutor->url_aww_app}}" title="Join as observer Groupworld" target="_blank"  class="label label-danger label-inline mr-2">Join as observer</a>
                                                                                                                    @elseif($ses_det->board_type == 'MeritHub')
                                                                                                                    <?php
                                                                                                                    $NetworkId = 101;
                                                                                                                       $hostLink = DB::table('MeritHubClass')->where('sessionID', $ses_det->id)->first();
                                                                                                                       $url = @$hostLink->hostLink;
                                                                                                                       $urlHit="https://live.merithub.com/info/device-test/$NetworkId/$url";  ?>
                                                                                                                       <a href="{{$urlHit}}" title="Join as observer Groupworld" target="_blank"  class="label label-danger label-inline mr-2">Join as observer</a>
                                                                                                                    @endif    
                                                                                                                       @if($ses_det->board_type == 'MeritHub') 
                                                                                                                         <a href="{{url('moderator_join_roomMerit')}}/{{$ses_det->id}}" class="label label-warning label-inline mr-2">Join as instructor</a>
													               @else
                                                                                                                         <a href="{{url('moderator_join_room')}}/{{$ses_det->id}}" class="label label-warning label-inline mr-2">Join as instructor</a>
                                                                                                                       @endif 
															<span class="label label-success label-inline mr-2 viewSession" SessionID="<?=$ses_det->id?>" action="<?=$Sessiontype?>">Session detail & download</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

    @if($ses_det->Tutoring_client_id != 'Drhomework123456')
       <a href="{{url('tutor_session_delete')}}/{{$ses_det->id}}" class="btn btn-danger btn-sm">Delete</button>
    @else
       <a href="javascript:void(0)" onclick="alert('You can not delete Homework Help,Only Parent allowed for unclaimed job! ')" class="btn btn-danger btn-sm">Delete</button>
     
    @endif   
    <a href="javascript:void(0)" SessionID="{{$ses_det->id}}" action="<?=$Sessiontype?>" class="btn btn-success btn-sm viewSession">Session Details</a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div >
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                    @if($ses_det->tut_teacher_id > 0)
                                                                                                                                       <strong>{{@$tutor->f_name}}&nbsp;{{@$tutor->lname}}</strong>
                                                                                                                                       {{@$tutor->email}}
                                                                                                                                    @else
                                                                                                                                        - 
                                                                                                                                    @endif
                                                                                                                                </span>
                                                                                                                               @if($in_sec > -3600)
                                                                                                                               @else
                                                                                                                                 @if($ses_det->tut_teacher_id > 0)
                                                                                                                                   <strong><a href="javascript:void(0);"  
                                                                                                                                    onclick="sent_form('assign_a_tutor.php', {getid:'<?=$ses_det->id?>',productname:'101',detail:'this is a text.'});"
                                                                                                                                    style="text-decoration:underline;">Re-assign Tutor</a></strong>
                                                                                                                                    @else
                                                                                                                                    <strong><a href="javascript:void(0);" 
                                                                                                                                    onclick="sent_form('assign_a_tutor.php', {getid:'<?=$ses_det->id?>',productname:'58',detail:'this is a text.'});"
                                                                                                                                    style="text-decoration:underline;">Assign Tutor</a> </strong>
                                                                                                                                 @endif
                                                                                                                               @endif
															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                    @if($ses_det->add_observer == 1 && $ses_det->tut_observer_id)
                                                                                                                                      <strong>{{@$observer->f_name}}&nbsp;{{@$observer->lname}}</strong>
                                                                                                                                      {{@$observer->email}}
                                                                                                                                      @else
                                                                                                                                        - 
                                                                                                                                    @endif
                                                                                                                                </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Board</span>
																<span class="opacity-70">{{$ses_det->curr_active_board}}</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Lesson</span>
																<span class="opacity-70">{{$lesson->name}}</span>
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
													<span class="font-weight-bolder font-size-h5">{{$ses_det->id}}</span>
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
													<span class="font-weight-bolder font-size-h5">{{date('F d,Y H:iA', strtotime($ses_det->ses_start_time))}}</span>
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
													<span class="font-weight-bolder font-size-h5">{{date('F d,Y H:iA', strtotime($ses_det->created_date))}}</span>
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
                                                                                                        @if($in_sec<-3600)
                                                                                                        <span class="font-weight-bolder font-size-h5 text-danger">Session expired!</span>
                                                                                                        @else
                                                                                                        @if($ses_det->tut_teacher_id > 0 )
                                                                                                            @if(!empty($ses_det->app_url))
                                                                                                              <span class="font-weight-bolder font-size-h5 text-success">Session Assigned</span>
                                                                                                            @else
                                                                                                              <span class="font-weight-bolder font-size-h5 text-warning">Session Assigned</span>
                                                                                                            @endif
                                                                                                         @else
                                                                                                         <span class="font-weight-bolder font-size-h5 text-danger">Session Not Assigned</span>
                                                                                                        @endif
                                                                                                        @endif
													
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
                                                                
                                                              @endforeach  
                                                                
                                                                
                                                                                                                       {!! $sessions->appends(Request::all())->links() !!}

                                                                 
                                                                
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