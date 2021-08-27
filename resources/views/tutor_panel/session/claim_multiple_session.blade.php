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
					<h2 class="text-white font-weight-bold my-2 mr-5">Job Board List ({{$total_tutor_sessions}})</h2>
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
						<div class="card-header mt-5">
						<form id="search_form" action="" method="GET">
							<div style="display:flex;">
								<div class="row">
									<div class="form-group col-md-4">
										<div class="input-group mb-3">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="basic-addon1">From</span>
										  </div>
											<input type="date" name="from_date" class="form-control" value="{{request()->get('from_date')??''}}">
										</div>
									</div>
									<div class="form-group col-md-4">
										<div class="input-group mb-3">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="basic-addon1">To</span>
										  </div>
											<input type="date" name="to_date" class="form-control" value="{{request()->get('to_date')??''}}">
										</div>
									</div>
									<div class="form-group col-md-4">
										
										<select name="type" class="form-control">
											<option value="">Choose Type</option>
											<option value="repeat">Recuring</option>
											<option value="repeat">Non-Recuring</option>
										</select>
									</div>
								</div>
								<div class="row" style="margin-left:4px;">
									<div class="form-group col-md-4">
										
										<select name="type" class="form-control">
											<option value="">Course</option>
											<option value="">Math</option>
											<option value="">English</option>
										</select>
									</div>
									<div class="form-group col-md-8">
										<div class="input-group mb-3">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
										  </div>
											<input type="text" name="search_data" class="form-control" value="{{request()->get('search_data')??''}}">
										</div>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i>&nbsp;From</span>
									  </div>
										<input type="time" name="time_from" class="form-control" value="{{request()->get('time_from')??''}}">
									</div>
								</div>
								<div class="form-group col-md-3">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock"></i>&nbsp;To</span>
									  </div>
										<input type="time" name="time_to" class="form-control" value="{{request()->get('time_to')??''}}">
									</div>
								</div>
								<div class="form-group col-md-3">
									<button type="submit" class="btn btn-primary">Search</button>
								</div>
							</div>
						</form>
						</div>
						
						<div class="card-body">
							@if ($message = Session::get('success'))
							<div class="alert alert-success text-center" role="alert">{{$message }}</div>
							@endif
							@if ($message = Session::get('error'))
							<div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
							@endif

							<div class="card card-custom bg-light-success gutter-b">
								<div class="card-body">
									<table class="table">
										<thead>
											<th>#Sr</th>
											<th>Session Date</th>
											<th>Session Time</th>
											<th>Type</th>
											<th>Session Availible</th>
											<th>Action</th>
										</thead>
										<tbody>
										 @foreach($repeatSession as $rp_ses)
										 	<tr>
										 		<td>{{$loop->iteration}}</td>
										 		<td>From {{date("d M",strtotime($rp_ses->start_date))}} to {{date("d M",strtotime($rp_ses->end_date))}}</td>
										 		@php $time = strtotime($rp_ses->start_time); @endphp
										 		<td>{{date("h:i A",strtotime($rp_ses->start_time))}} to {{date("h:i A",strtotime('+'.$rp_ses->session_duration.' minutes',$time))}}</td>
										 		<td>Recuring</td>
										 		<td>{{$rp_ses->sessions_count}}</td>
										 		
										 		<td><a class="btn btn-primary" href="{{route('tutor.session.repeat.detail',$rp_ses->id)}}">Details</a></td>
										 	</tr>
										 @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
					<!--end::Advance Table Widget 1-->
				</div>
			</div>
			
			
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	
	
	
	
	<div class="modal fade" id="session_claim" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tutor Claim Session</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body text-center" id="modal_body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
	
	
	
	
</div>
<!--end::Content-->
@endsection
