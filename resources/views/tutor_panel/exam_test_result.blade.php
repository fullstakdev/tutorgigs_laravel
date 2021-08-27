@extends('template.tutor_container')
@section('css')
<style>
.list-answers li img{
  max-width:100%;
  height: auto;
}
.questions-detail p img{
  width:100%;
  height: auto;
}
.form-register .steps li a .title .step-icon { margin-right:70px !important;}
.form-register .steps li a .step-text { font-size:12px !important;}
.form-register .steps li a .title .step-icon {
    width: 35px;
    height: 35px;
}
.form-register .steps ul { padding-left:45px !important;}
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
										<h2 class="text-white font-weight-bold my-2 mr-5">Complete Test Quiz</h2>
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
								
                                                                   <div class="card card-custom gutter-b " >
                                                                       <div class='col-sm-12 text-center'>
											<div class="card-header "> 
                                                                                            
                                                                                            @if($passing_status == 'Pass')
												<h2 class="card-title text-center text-warning">Congratulations</h2>
										            @else
                                                                                               <h2 class="card-title text-center text-danger">YOU ARE FAILED</h2>
                                                                                               <p class="text-center text-priamry">Unfortunately, you have not passed the quiz. Please check back with us later for any future opportunities that may arise.</p>
                                                                                            @endif
                                                                                            </div>
											</div>
                                                                       
                                                                       <div class="card-body my-4">
                                                                            @if($passing_status == 'Pass')
                                                                           <div class="row">
                                                                           <div class="col-sm-2"></div> 
                                                                           <div class="col-sm-4">
                                                                           
												<a href="#" class="card-title font-weight-bolder text-success font-size-h6 mb-4  d-block">Mark</a>
												<div class="font-weight-bold text-muted font-size-sm">
												<span class="text-primary font-weight-bolder font-size-h2 mr-2">{{$get_scored}}%</span>Avarage</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-info" role="progressbar" style="width: {{$get_scored}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
                                                                                        </div> 
                                                                           
                                                                           <div class="col-sm-4 pull-right">
                                                                           
												<a href="#" class="card-title font-weight-bolder text-success font-size-h6 mb-4 d-block text-right">Quiz Status</a>
												<div class="font-weight-bold text-muted font-size-sm text-right">
												<span class="text-primary font-weight-bolder font-size-h2 mr-2 text-right">Pass</span></div>
												
                                                                                        </div> 
                                                                                                <div class="col-sm-2"></div>
											</div>
                                                                               @else
                                                                               
                                                                               <div class="row">
                                                                           <div class="col-sm-2"></div> 
                                                                           <div class="col-sm-4">
                                                                           
												<a href="#" class="card-title font-weight-bolder text-success font-size-h6 mb-4 d-block">Mark</a>
												<div class="font-weight-bold text-muted font-size-sm">
												<span class="text-danger font-weight-bolder font-size-h2 mr-2">{{$get_scored}}%</span>Avarage</div>
												<div class="progress progress-xs mt-7 bg-info-o-60">
													<div class="progress-bar bg-danger" role="progressbar" style="width: {{$get_scored}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
                                                                                        </div> 
                                                                           
                                                                           <div class="col-sm-4 pull-right">
                                                                           
												<a href="#" class="card-title font-weight-bolder font-size-h6 mb-4 text-success d-block text-right">Quiz Status</a>
												<div class="font-weight-bold text-muted font-size-sm text-right">
												<span class="text-danger font-weight-bolder font-size-h2 mr-2 text-right">Failed</span></div>
												
                                                                                        </div> 
                                                                                                <div class="col-sm-2"></div>
											</div>
                                                                               @endif
										</div>
                                                                       @if($passing_status == 'Pass')
                                                                       <div class="card-footer d-flex justify-content-between">
												<a href="{{route('job_board')}}" class="btn btn-info font-weight-bold">GO TO JOB BOARD</a>
												<a href="{{route('get_qualification')}}" class="btn btn-warning font-weight-bold">GO TO Exam & Certification Page</a>
											</div>
                                                                       
                                                                       @endif
							            </div>
							<!--end::Container-->
						          </div>
						<!--end::Entry-->
					        </div>
                                        </div>
					<!--end::Content-->
					@endsection