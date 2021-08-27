@extends('template.container')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/custom.css')}}">
<style>
  #session-table_filter{ float: right; }
  .filter_table a {
      margin-top: 1.8rem;
  }
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
        <div class="col-sm-12 col-md-9 ">
          @include('includes.session_filter')
        </div>
        <div class="col-sm-12 col-md-3">
          <table class="table-responsive filter_table">
            <tbody style="float:right;">
              <tr>
                <td><a href="{{url('session/calendar-view')}}" class="btn btn-primary">Calendar View</a></td>
                <td><a href="{{url('session/list')}}" class="btn btn-primary">List View</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <table class="table" id="session-table">
       <thead>
         <th>Sr#</th>
         <th>Start Date</th>
         <th>End Date</th>
         <th>District</th>
         <th>School</th>
         <th>Grade</th>
         <th>Lessons</th>
         <th>Type</th>
         <th>Action</th>
       </thead>
       <tbody>
        @foreach($repeatSessions as $rp_se)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{date_format(date_create($rp_se->start_date), 'F d,Y')}}</td>
            <td>{{date_format(date_create($rp_se->end_date), 'F d,Y')}}</td>
            <td>{{$rp_se->district->district_name}}</td>
            <td>{{$rp_se->school->SchoolName}}</td>
            <td>{{$rp_se->grade->name}}</td>
            <td>
              <a href="javaScript:;" data-toggle="modal" data-target="#lesson_modal_{{$rp_se->id}}">View Lesson</a>
              <!-- Modal -->
              <div class="modal fade" id="lesson_modal_{{$rp_se->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Lessons Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="display:block!important">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <ul style="list-style:none">
                        @foreach($rp_se->lesson->lessons() as $l)
                          <li>Day {{$loop->iteration}}: {{$l->name}}</li>
                        @endforeach
                      </ul>
                    </div>
                    
                  </div>
                </div>
              </div>
            </td>
            <td>{{$rp_se->getType()}}</td>
            <td>
              <a href="{{route('repeat.sessions.edit',$rp_se->id)}}" class="btn btn-info btn-sm">Edit</a>
              <a href="{{route('repeat.sessions.delete',$rp_se->id)}}" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure to delete?')){ return false; }">Delete</a>
            </td>
          </tr>
        @endforeach
        @foreach($nosessions as $rp_se)

          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{date_format(date_create($rp_se->start_date), 'F d,Y')}}</td>
            <td>{{date_format(date_create($rp_se->start_date), 'F d,Y')}}</td>
            <td>{{$rp_se->district->district_name}}</td>
            <td>{{$rp_se->school->SchoolName}}</td>
            <td>{{$rp_se->grade->name}}</td>
            <td>
              <a href="javaScript:;" data-toggle="modal" data-target="#lesson_modal_no{{$rp_se->id}}">View Lesson</a>
              <!-- Modal -->
              <div class="modal fade" id="lesson_modal_no{{$rp_se->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Lessons Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="display:block!important">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      {{isset($rp_se->lesson->name)?$rp_se->lesson->name:''}}
                    </div>
                    
                  </div>
                </div>
              </div>
            </td>
            <td>Not Repeat</td>
            <td>
              <a href="{{route('session.edit',$rp_se->id)}}" class="btn btn-info btn-sm">Edit</a>
              <a href="{{route('delete.no_repeat.session',$rp_se->id)}}" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure to delete?')){ return false; }">Delete</a>
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