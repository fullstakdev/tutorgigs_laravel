@extends('template.tutor_container')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/custom_calendar.css')}}">
	<style>
		div.calendar ul.label{
			width: 100%;
		}
		li.li_cl_d{
			position: relative;
		}
		span.chk_session_d {
		    position: absolute;
		    bottom: 30px;
		    right: 6px;
		}
		span.sessions_d {
		    width: 28px;
		        height: 24px;
		        overflow: hidden;
		        text-overflow: ellipsis;
		        white-space: nowrap;
		        background: #ffc107;
		        position: inherit;
		        padding: 5px;
		        color: #fff;
		        font-size: 12px;
		        margin: 0 10px 0 3px;
		}	
		.av-s{
			position: absolute;
			left: 10px
		}
		.row.av-c {
		    position: absolute;
		    bottom: 55px;
		    left: 10px;
		}
	</style>
@endsection
@section('content')
@php
	$curr_time = date("Y-m-d H:i:s");
	$total_tutor_sessions = $MainSessionRepeat->sessions->where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , $curr_time)->where('board_type', 'MeritHub')->count('id');
	$totalSes = count($MainSessionRepeat->sessions);
@endphp
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
							<h3 class="pull-left">Session Details</h3>
							<h3 class="pull-right">Recuring Session ID: {{$MainSessionRepeat->id}}</h3>
						</div>
						<div class="card-body">
							@if ($message = Session::get('success'))
							<div class="alert alert-success text-center" role="alert">{{$message }}</div>
							@endif
							@if ($message = Session::get('error'))
							<div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
							@endif
							@if ($msg = Session::get('s_error'))
							<div class="alert alert-danger text-center" role="alert">
								<ul style="list-style-type:none">
									@foreach($msg as $m)
										<li>{{$m}}</li>
									@endforeach
								</ul>
							</div>
							@endif

							<div class="card card-custom bg-light-success gutter-b">
								
								<div class="card-body">
									<div class="row">
										<div class="col-md-4">Grade:</div><div class="col-md-2">{{$MainSessionRepeat->grade->name}}</div>
										<div class="col-md-4">Course:</div><div class="col-md-2">Math</div>
										
									</div>
									<div class="row mt-5">
										<div class="col-md-4">From Date:</div><div class="col-md-2">{{date("d M Y",strtotime($MainSessionRepeat->start_date))}}</div>
										<div class="col-md-4">To Date:</div><div class="col-md-2">{{date("d M Y",strtotime($MainSessionRepeat->end_date))}}</div>
									</div>
									<div class="row mt-5">
										<div class="col-md-4">From time:</div><div class="col-md-2">{{date("h:i A",strtotime($MainSessionRepeat->start_time))}}</div>
										<div class="col-md-4">To time:</div><div class="col-md-2">
											@php $time = strtotime($MainSessionRepeat->start_time); @endphp

											{{date("h:i A",strtotime('+'.$MainSessionRepeat->session_duration.' minutes',$time))}}

										</div>
									</div>
									<div class="row mt-5">
										<b>{{$MainSessionRepeat->getType()}}</b>
									</div>
									<div class="row mt-5">
										<b>Availibe Sessions: {{$total_tutor_sessions}} out of {{$totalSes}}</b>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button class="btn btn-success pull-right" style="float:right" data-toggle="modal" data-target="#session_claim">Select Session</button>
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
		<div class="modal-dialog modal-dialog-centered modal-lg " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tutor Claim Session</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body text-center" id="calendar_modal_body">
					@if($total_tutor_sessions>0)
					@php
						$calendar = new \App\Helper\Calendar($MainSessionRepeat->id,date("Y-m-d",strtotime($MainSessionRepeat->start_date)),date("Y-m-d",strtotime($MainSessionRepeat->end_date)));
						 
						echo $calendar->showCal();
					@endphp
					@else
						<h3>All session are claimed. No session is avaible...</h3>
					@endif
				</div>
				<div class="modal-footer">
					@if($total_tutor_sessions>0)
					<div class="row av-c">
						<span><input type="checkbox" id="select_all" class="select_all" name="select_all" value="select_all">&nbsp;Select All</span>
					</div>
					<div class="row av-s">
					
						<b><span id="selected_ses">0</span> out of {{$totalSes}} Selected</b>
					</div>
					<button type="button" class="btn btn-light-primary font-weight-bold" onclick="ClaimSession()">Claim</button>
					@endif
				</div>
			</div>
		</div>
	</div>
	
	
	
	
</div>
<!--end::Content-->
@endsection
@section('js')
	<script>
		function ClaimSession(){
			var session_ids=[];
			if(!($("#select_all").is(":checked")) && !($(".chkbox_ses:checked").length)){
				alert("Please choose session for claim");
				return false;
			}
			else if($("#select_all").is(":checked")){
				submitForm("selected_all");
				return false;
			}else{
				$(".chkbox_ses:checked").each(function(){
				    session_ids.push($(this).val());
				});
				submitForm(session_ids);
				return false;
			}
		}
		$(".chkbox_ses").change(function(){
			$("#selected_ses").html($(".chkbox_ses:checked").length);
		});
		$("#select_all").change(function(){
			var total = '{{$totalSes}}';
			if($("#select_all").is(":checked")){
				$(".chkbox_ses").prop('checked',true);
				$("#selected_ses").html(total);
			}else{
				$("#selected_ses").html($(".chkbox_ses:checked").length);
			}
			
		});

		function submitForm(form_ids) {
		    var form = document.createElement("form");
		    var element1 = document.createElement("input"); 
		    var element2 = document.createElement("input");  

		    form.method = "POST";
		    form.action = "{{route('tutor.claim_session.repeat.detail',$MainSessionRepeat->id)}}";   

		    
		    if(form_ids=="selected_all"){
		    	 element1.name="selected_all";
		    	 element1.value="selected_all";
	    	}else{
	    		 element1.name="form_ids";
	    		 element1.value=form_ids;
	    	}
		   
		    form.appendChild(element1);  

		    element2.value="{{csrf_token()}}";
		    element2.name="_token";
		    form.appendChild(element2);

		    document.body.appendChild(form);

		    form.submit();
		}

		var num = 0;
		function nextCal(e){
		    $(".calendar")[num].style.display = "none";
		    num++;
		    if(num >= $(".calendar").length){
		        num = 0;
		    }
		    $(".calendar")[num].style.display = "block";
		}

		function prevCal(e){
			$(".calendar")[num].style.display = "none";
			num--;
			if(num < 0){
			    num = $(".calendar").length-1;
			}
			$(".calendar")[num].style.display = "block";
		}
	</script>
@endsection
