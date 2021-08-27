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
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tutor Sessions View</h5>
									<!--end::Page Title-->
									
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
                                                                    <div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Tutor Sessions</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">more than 500+ sessions</span>
												</div>
												<div class="d-flex align-items-center">
									<div class="card-toolbar">
													

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <a href="{{route('session_view')}}" class="btn btn-secondary ">
       Past
    </a>
    <a href="{{route('session_view')}}" class="btn btn-success active">
       Present
    </a>
   <a href="{{route('session_view')}}" class="btn btn-secondary">
      Future
    </a>
</div>


												</div>
								</div>
											</div>
									<div class="card-body">
										<!--begin::Top-->
										<div class="d-flex">
											
												<!--begin::Body-->
												<div class="card-body">
													
                                                                                                                                                                                                        
                                                                                               <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">DEMO</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                   
                                                                                                   <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">DEMO</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                   
                                                                                                   <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">HARTS BLUF</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                            
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>     
                                                                                                    
                                                                                                    
                                                                                                    <div class="row" style="margin-top: 10px">
                                                                                                        <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">3RD GRADE MATH</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                   
                                                                                                   <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">DEMO</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                   
                                                                                                   <div class="col-sm-4">
                                                                                                            <div id="session_6722" class="card" >   
                                                                                                                <div class="card-header" style="padding: 12px">
                                <small class="text-muted">
                                  
                                                                 
                                    <div class="dropdown" style="display:inline-flex; float: right;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-gear text-success"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="width:250px !important;">
                                                <h6 class="dropdown-header">Join as</h6>
                                                                                               <li>                                                                                                      
                                                    <a title="Join as Observer" target="_blank" href="" class="dropdown-item">
                                                        <i class="far fa-eye"></i>&nbsp;&nbsp; Observer
                                                    </a>
                                                </li>
                                                
                                                <li>
                                                    <a title="Join as Instructor" target="_blank" href="instructorJoin_Merit.php?sesid=6722" class="dropdown-item">
                                                        <i class="fas fa-user-graduate" style="color: orange;"></i>&nbsp;&nbsp;Instructor
                                                    </a>
                                                </li>
                                                                                                      
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Tutor</h6>
                                                <li>
                                                                                                         
                                                    <a title="Re-assign/Un-assign this tutor" target="_blank" href="javascript:void(0)" onclick="sent_form('assign_a_tutor.php', {getid:'6722',productname:'101',detail:'this is a text.'});" class="dropdown-item">
                                                        <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Re-assign
                                                    </a>                                                    
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <h6 class="dropdown-header">Session</h6>
                                                <li>
                                                    <a title="View session info and details" class="dropdown-item viewSession" href="javascript:void(0);" sessionid="6722" action="Intervention">                                                        
                                                        <i class="fa fa-info-circle text-info"></i> info &amp; details
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a title="Send ALL to a new room or drag'n'drop" class="dropdown-item btnrelocate text-danger" href="javascript:void(0);" sessionid="">
                                                        <i class="fas fa-users"></i> <i class="fas fa-random"></i> new room
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="... or you may drag and drop students individually to another session to add them to that session's room" disabled="" class="dropdown-item disabled" href="javascript:void(0);" sessionid="">... or drag'n'drop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </small> 
                                        <div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-40  mr-5">
														<span class="symbol-label">
															<i class="fas fa-chalkboard-teacher"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1 font-weight-bold">
														<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">HARTS BLUF</a>
														<span class="text-muted">6722 <strong>Thu Apr 29th 02:15 am</strong></span>
													</div>
													<!--end::Text-->
													<!--begin::Dropdown-->
													
												</div>                                                                            
                                                            
                               
                            </div>
                            <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                
                                
                                <div class="card-text" style="border-top: 1px 0 0 1px dotted; border-color: gray;" sessionid="6722" nrroomid="1286051">
                                    <div id="tutor_session_2840_6722" title="user id: 2840, nr user id: 2803410 - nr room id: 1286051" usertype="tutor" sessionid="6722" userid="2840" username="test22 test22" nruserid="2803410" nrroomid="1286051" draggable="true" ondragstart="drag(event)">
                                        <i class="fa fa-user-graduate" style="color: orange;"></i> &nbsp;test22 test22                                                                               <i class="fas fa-handshake text-danger" title="Tutor has not accepted"></i>
                                                                           </div>    
                                    <hr style="margin-top: .7rem;margin-bottom: .7rem">     
                                        <div id="student_session_28345_6722" title="user id: 28345, nr user id: 9922 - nr room id: " usertype="student" sessionid="6722" userid="28345" username="loadstudent 95" nruserid="9922" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 95                     
                                        </div>
                                            <hr style="margin-top: .5rem;margin-bottom: .5rem">                        
                                        <div id="student_session_28473_6722" title="user id: 28473, nr user id: 7098 - nr room id: " usertype="student" sessionid="6722" userid="28473" username="loadstudent 223" nruserid="7098" nrroomid="" draggable="true" ondragstart="drag(event)">
                                            <i class="fa fa-user" style="color: darkblue;"></i> &nbsp; 
                                            loadstudent 223                     
                                        </div>
                                            
                                                          
                                </div>
                            </div>
                             <div class="card-footer" style="padding: 10px">
                                <div style="float:left;">
                                    <small class="text-muted " title="The class size is 2">2&nbsp;<i class="fas fa-users"></i></small>
                                   
                                </div>
                                <span style="float:right;">
                                    <a title="View session info and details" class="viewSession" href="javascript:void(0);" sessionid="6658" action="Intervention">                                                        
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>                 
                                                                                                    
                                                                                                                                                                                                        
												</div>
												<!--end::Body-->
											
										</div>
										
										</div>
										<!--end::Bottom-->
									
								</div>
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
</div>
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