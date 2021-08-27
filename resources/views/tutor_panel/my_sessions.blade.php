@extends('template.tutor_container')
@section('css')
<style>
    .separator.separator-solid {

    border-bottom: 2px solid #ddd;
}
</style>
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
										<h2 class="text-white font-weight-bold my-2 mr-5">My Sessions (50)</h2>
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
								<!--begin::Dashboard-->
								
                                                                
                                                                <div class="row">
									
									<div class="col-lg-12 col-xxl-12">
										<!--begin::Advance Table Widget 1-->
										<div class="card card-custom gutter-b">
                                                                                    
									<div class="card-body">
                                                                          <div class="card card-custom bg-light-danger gutter-b example example-compact">
											
											<!--begin::Form-->
                                                                                        <form class="form" action="{{url('tutor_session_list')}}" method="post">
                                                                                            @csrf
                                                                                            <div class="card-body" style="padding: 1.5rem">
                                                                                                    <div class="row">
													<div class="col-sm-6">
													<div class="form-group">
														<label>&nbsp;</label>
														<select class="form-control form-control-solid" name="session_type">
															<option value="all" <?php echo (isset($session_type)&&$session_type=="all")?'selected':NULL; ?> >All</option>
                                 <option value="upcoming" <?php echo (isset($session_type)&&$session_type=="upcoming")?'selected':NULL; ?> >Upcoming sessions</option>
                                 <option value="past" <?php echo (isset($session_type)&&$session_type=="past")?'selected':NULL; ?>>Past sessions</option>
														</select>
													</div>
												 </div>
                                                                                                    <div class="col-sm-6">
                                                                                                        <div class="form-group">
														
                                                                                                            <button type="submit" style="margin-top: 26px" class="btn btn-primary mr-2">Filter Session</button>
                                                                                                        </div>
                                                                                                    </div>
													</div>
												</div>
												
											</form>
											<!--end::Form-->
										</div>
                                                                            <div class="card card-custom bg-light-success gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math  - &nbsp;<small>5.4B Math 30 Minutes</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                         <a href="http://localhost/tutorgigs.io/moderator_join_roomMerit/6701" class="label label-warning label-inline mr-2">Download-5.4F Math 30 Minutes</a>
													                
															<span class="label label-danger label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Session detail &amp; download</span>
                                                                                                                        <span class="label label-primary label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Post Session Survey</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

                                                                                                                <a href="http://localhost/tutorgigs.io/tutor_session_delete/6701" class="btn btn-success" style="background-color: green; border-color: green">Lanuch Tutorial
       
    </a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                   <strong>test2&nbsp;test2</strong>                                                                                                                                                                                                                                                       </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                            - 
                                                                                                                                                                                                                                                                    </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">Demo</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> Student 10, Student 11, Student 12, Student 13 </span>
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
													<span class="font-weight-bolder font-size-h5">6701</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:05AM</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:00AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
                                                                                                        <span class="font-weight-bolder font-size-h5">60 Mins</span>
                                                                                                        													
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
                                                                            
                                                                            <div class="card card-custom bg-light-success gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math  - &nbsp;<small>5.4B Math 30 Minutes</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                         <a href="http://localhost/tutorgigs.io/moderator_join_roomMerit/6701" class="label label-warning label-inline mr-2">Download-5.4F Math 30 Minutes</a>
													                
															<span class="label label-danger label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Session detail &amp; download</span>
                                                                                                                        <span class="label label-primary label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Post Session Survey</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

                                                                                                                <a href="http://localhost/tutorgigs.io/tutor_session_delete/6701" class="btn btn-success" style="background-color: green; border-color: green">Lanuch Tutorial
       
    </a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                           <strong>test2&nbsp;test2</strong>
                                                                                                                                                                                                                                                                                                                                                                                                        </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                            - 
                                                                                                                                                                                                                                                                    </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">Demo</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> Student 10, Student 11, Student 12, Student 13 </span>
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
													<span class="font-weight-bolder font-size-h5">6701</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:05AM</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:00AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
                                                                                                        <span class="font-weight-bolder font-size-h5">60 Mins</span>
                                                                                                        													
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
                                                                            
                                                                            <div class="card card-custom bg-light-success gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math  - &nbsp;<small>5.4B Math 30 Minutes</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                         <a href="http://localhost/tutorgigs.io/moderator_join_roomMerit/6701" class="label label-warning label-inline mr-2">Download-5.4F Math 30 Minutes</a>
													                
															<span class="label label-danger label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Session detail &amp; download</span>
                                                                                                                        <span class="label label-primary label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Post Session Survey</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

                                                                                                                <a href="http://localhost/tutorgigs.io/tutor_session_delete/6701" class="btn btn-success" style="background-color: green; border-color: green">Lanuch Tutorial
       
    </a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                           <strong>test2&nbsp;test2</strong>
                                                                                                                                                                                                                                                                                                                                                                                                       </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                            - 
                                                                                                                                                                                                                                                                    </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">Demo</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> Student 10, Student 11, Student 12, Student 13 </span>
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
													<span class="font-weight-bolder font-size-h5">6701</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:05AM</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:00AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
                                                                                                        <span class="font-weight-bolder font-size-h5">60 Mins</span>
                                                                                                        													
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
                                                                            
                                                                            <div class="card card-custom bg-light-success gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math  - &nbsp;<small>5.4B Math 30 Minutes</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                         <a href="http://localhost/tutorgigs.io/moderator_join_roomMerit/6701" class="label label-warning label-inline mr-2">Download-5.4F Math 30 Minutes</a>
													                
															<span class="label label-danger label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Session detail &amp; download</span>
                                                                                                                        <span class="label label-primary label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Post Session Survey</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

                                                                                                                <a href="http://localhost/tutorgigs.io/tutor_session_delete/6701" class="btn btn-success" style="background-color: green; border-color: green">Lanuch Tutorial
       
    </a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                           <strong>test2&nbsp;test2</strong>
                                                                                                                                                                                                                                                                                                                                                                                                    </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                            - 
                                                                                                                                                                                                                                                                    </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">Demo</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> Student 10, Student 11, Student 12, Student 13 </span>
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
													<span class="font-weight-bolder font-size-h5">6701</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:05AM</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:00AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
                                                                                                        <span class="font-weight-bolder font-size-h5">60 Mins</span>
                                                                                                        													
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
                                                                            <div class="card card-custom bg-light-success gutter-b">
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
														<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">6th Grade Math  - &nbsp;<small>5.4B Math 30 Minutes</small>                                                                                                                                                                                                                            </a>
														
                                                                                                                <!--end::Name-->
														<!--begin::Contacts-->
														<div class="d-flex flex-wrap my-2">
                                                                                                                                                                                                                                                                                                                                                               
                                                                                                                        
                                                                                                                        
                                                                                                                         <a href="http://localhost/tutorgigs.io/moderator_join_roomMerit/6701" class="label label-warning label-inline mr-2">Download-5.4F Math 30 Minutes</a>
													                
															<span class="label label-danger label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Session detail &amp; download</span>
                                                                                                                        <span class="label label-primary label-inline mr-2 viewSession" sessionid="6701" action="Intervention">Post Session Survey</span>
														</div>
														<!--end::Contacts-->
													</div>
													<!--begin::User-->
													<!--begin::Actions-->
													<div class="my-lg-0 my-1">
                                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
 

                                                                                                                <a href="http://localhost/tutorgigs.io/tutor_session_delete/6701" class="btn btn-success" style="background-color: green; border-color: green">Lanuch Tutorial
       
    </a>
<!--    <button type="button" class="btn btn-info btn-sm">Relocate</button>-->
</div>
                                                                                                            
													</div>
                                                                                                        
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Content-->
												<div>
													<div class="d-flex justify-content-between pt-6">
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">Assign Tutor</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                           <strong>test2&nbsp;test2</strong>
                                                                                                                                                                                                                                                                                                                                                                                                    </span>
                                                                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                                                                                                                   															</div>
															<div class="d-flex flex-column  flex-root">
																<span class="font-weight-bolder">Assign Observer</span>
																<span class="opacity-70">
                                                                                                                                                                                                                                                                            - 
                                                                                                                                                                                                                                                                    </span>
															</div>
															<div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder">School</span>
																<span class="opacity-70">Demo</span>
															</div>
                                                                                                                        <div class="d-flex flex-column flex-root">
																<span class="font-weight-bolder mb-2">Student List</span>
																<span class="opacity-70"> Student 10, Student 11, Student 12, Student 13 </span>
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
													<span class="font-weight-bolder font-size-h5">6701</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:05AM</span>
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
													<span class="font-weight-bolder font-size-h5">April 19,2021 04:00AM</span>
												</div>
											</div>
											<!--end: Item-->
											<!--begin: Item-->
											<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-profile icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column flex-lg-fill">
													<span class="text-dark-75 font-weight-bolder font-size-sm">Duration</span>
                                                                                                        <span class="font-weight-bolder font-size-h5">60 Mins</span>
                                                                                                        													
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
                                                                                
                                                                     <nav>
                                                                         <ul class="pagination" style="float:right">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="<< Previous">
                    <span class="page-link" aria-hidden="true"><<</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=4">4</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=5">5</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=6">6</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="http://localhost/tutorgigs.io/tutor_session_list?_token=DJmtHS4vzAFFU3EpAkOwOnKEMz9WErBfso0D5Bqq&amp;session_type=past&amp;page=2" rel="next" aria-label="Next »">>></a>
                </li>
                    </ul>
    </nav>           
									</div>
								</div>
                                                                                
										<!--end::Advance Table Widget 1-->
									</div>
								</div>
								
								
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection