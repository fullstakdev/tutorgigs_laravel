@extends('template.container')
@section('css')
@endsection
@section('content')
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
  <div class="container">
    <div class="card card-custom gutter-b example example-compact">
      <div class="card-header">
        <h3 class="card-title"><i class="fa fa-plus-circle"></i>Holidays</h3>
        <div class="card-toolbar">
         <div class="example-tools justify-content-center">
          <button class="btn btn-warning" data-toggle="modal" data-target="#addNewHoliday">Add New</button>
         </div>
        </div>
      </div>
      <div class="card-body">
        @if (Session::has('success'))
          <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
          </div>
        @endif
        @if($errors->any())
          <div class="row">
            <div class="col-sm-8 alert alert-danger">
              {{$errors->first()}}
            </div>
          </div>
        @endif
        <table class="table">
          <thead>
            <th>#Sr</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
          </thead>
          <tbody>
            @foreach($holidays as $h)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$h->holiday_title}}</td>
                <td> <td>{{date_format(date_create($h->holiday_date), 'F d,Y')}}</td></td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$h->id}}">Edit</button>
                  <a href="{{route('holiday.delete',$h->id)}}" onclick="if(!confirm('Are you sure to delete?')){ return false; }" class="btn btn-danger">Delete</a>
                  <!-- Modal -->
                  <div class="modal fade" id="edit_{{$h->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit New Holiday</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{route('holiday.update',$h->id)}}" method="post">
                          <div class="modal-body">
                            
                            @csrf
                            <div class="form-group">
                              <label class="label-control">Title</label>
                              <input type="text" name="title" class="form-control" value="{{$h->holiday_title}}" required>
                            </div>
                            <div class="form-group">
                              <label class="label-control">Date</label>
                              <input type="date" name="date" class="form-control" value="{{$h->holiday_date}}" required>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                      </form>
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
    <!--end::Container-->          
  </div>     
</div>
<!-- Add New Modal -->
  <!-- Modal -->
  <div class="modal fade" id="addNewHoliday" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Holiday</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('holiday.add')}}" method="post">
          <div class="modal-body">
            
            @csrf
            <div class="form-group">
              <label class="label-control">Title</label>
              <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="label-control">Date</label>
              <input type="date" name="date" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
      </div>
    </div>
  </div>
<!-- End Add New Modal -->
      
       <!--end::Content-->
       @endsection
       @section('js')
      
       </script>
       @endsection