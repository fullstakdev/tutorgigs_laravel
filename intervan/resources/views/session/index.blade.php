@extends('template.container')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/custom.css')}}">
<style>
  #session-table_filter{ float: right; }
</style>
@endsection
@section('content')

<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Sessions List</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
       <a href="{{url('create_session')}}" class="btn btn-warning">Create Session</a>
     </div>
    </div>
   </div>
    <div class="card-body">
      @if (Session::has('success'))
        <div class="alert alert-success">
          <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
        </div>
      @endif
      <div class="row">
        <div class="col-sm-12 col-md-9">
          @include('includes.session_filter')
        </div>
        <div class="col-sm-12 col-md-3">
          <table class="table-responsive">
        <tbody style="float:right;">
          <tr>
            <td><a href="{{url('session/calendar-view')}}" class="btn btn-primary">Calendar View</a></td>
            <td><a href="{{url('session/repeat-sessions')}}" class="btn btn-primary">Repeat Sessions</a></td>
          </tr>
        </tbody>
      </table>
        </div>
      </div>
      
      
      <table class="table" id="session-table">
       <thead>
         <th>Sr#</th>
         <th>Sess Time</th>
         <th>Sess ID</th>
         <th>District</th>
         <th>School</th>
         <th>Grade</th>
         <th>Virtual Board</th>
         <th>Status</th>
         <th>Action</th>
       </thead>
       <tbody>
        @foreach($sessions as $session)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{date_format(date_create($session->ses_start_time), 'F d,Y h:i a')}}</td>
            <td>{{$session->id}}</td>
            <td>{{isset($session->district->district_name)?$session->district->district_name:''}}</td>
            <td>{{isset($session->school->SchoolName)?$session->school->SchoolName:''}}</td>
            <td>{{isset($session->grade->name)?$session->grade->name:''}}</td>
            <td>{{$session->curr_active_board}}</td>
            <td>
              @php $today = strtotime(date('Y-m-d h:i')); $start = strtotime($session->ses_start_time); @endphp
              {{$today>$start?'complete':'incomplete'}}
            </td>
            <td>
              <a href="javaScript:;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#session_{{$session->id}}">View</a>
              <a href="{{route('session.edit',$session->id)}}" class="btn btn-info btn-sm">Edit</a>
              <!-- Modal -->
              <div class="modal fade" id="session_{{$session->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Session Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="display:block!important">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table">
                       <tbody>
                        <tr class="warning">
                          <td>Session ID</td><td>{{$session->id}}</td>
                        </tr>
                       <tr class="warning">
                          <td>Session Time</td><td>{{date_format(date_create($session->ses_start_time), 'F d,Y h:i a')}}</td>
                       </tr>
                       <tr class="warning">
                          <td>Session Duration</td><td>{{$session->session_duration}} mins</td>
                       </tr>
                       <tr class="warning">
                          <td>Virtual Board</td><td>{{$session->curr_active_board}}</td>
                       </tr>
                       <tr class="warning">
                          <td>School</td><td>{{isset($session->school->SchoolName)?$session->school->SchoolName:''}}</td>
                       </tr>
                       <tr class="warning">
                          <td>District</td><td>{{isset($session->district->district_name)?$session->district->district_name:''}}</td>
                       </tr>
                       <tr class="warning">
                          <td>Grade</td><td>{{isset($session->grade->name)?$session->grade->name:''}}</td>
                       </tr>
                       <tr class="warning">
                          <td>Lesson</td><td>{{isset($session->lesson->name)?$session->lesson->name:''}}</td>
                       </tr>
                       <tr class="warning">
                          <td>Class list of students</td>
                          <td>
                            @foreach($session->students() as $s)
                              {{$s->first_name.' '.$s->last_name}}{{count($session->students())==$loop->iteration?'':','}}
                            @endforeach
                          </td>
                       </tr>
                       <tr class="warning">
                          <td>Create Date</td><td>{{date_format(date_create($session->created_date), 'F d,Y')}}</td>
                       </tr>
                       <tr class="warning">
                          <td>Session Status</td><td>{{$today>$start?'complete':'incomplete'}}</td>
                       </tr>
                      </tbody>
                    </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
       </tbody>
      </table>
    </div>
    
   </div>
   
  </div>
  <!--end::Bottom-->
  
 </div>
 
</div>
<!--end::Container-->
</div>
<!--end::Content-->

 @endsection
 @section('js')
  @include('includes.distric_school_js')
   <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
  <script>

    $("#session-table").dataTable();
  </script>
 @endsection