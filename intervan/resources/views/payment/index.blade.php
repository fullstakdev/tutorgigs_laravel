@extends('template.container')
@section('css')
@endsection
@section('content')
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
  <div class="container">
    <div class="card card-custom gutter-b example example-compact">
      <div class="card-header">
        <h3 class="card-title"><i class="fa fa-plus-circle"></i>Payment Rates</h3>
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
            <th>Duration</th>
            <th>Certified Tutor Rate</th>
            <th>Non-Certified Tutor Rate</th>
          </thead>
          <tbody>
            @foreach($payment_rates as $p)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->duration_min}}</td>
                <td>{{$p->certified_teacher_rate}}</td>
                <td>{{$p->non_teacher_rate}}</td>
                <td>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#edit_{{$p->id}}">Edit</button>
                  <a href="{{route('payment.delete',$p->id)}}" onclick="if(!confirm('Are you sure to delete?')){ return false; }" class="btn btn-danger">Delete</a>
                  <!-- Modal -->
                  <div class="modal fade" id="edit_{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Payment Rate</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="{{route('payment.edit',$p->id)}}" method="post">
                          <div class="modal-body">
                            
                            @csrf
                            <div class="form-group">
                              <label class="label-control">Durtaion</label>
                              <input type="text" name="duration_min" value="{{$p->duration_min}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label class="label-control">Certified Tutor Rate</label>
                              <input type="number" min="1.00" max="1000.00" name="certified_teacher_rate" class="form-control" value="{{$p->certified_teacher_rate}}" required>
                            </div>
                            <div class="form-group">
                              <label class="label-control">Non Certified Tutor Rate</label>
                              <input type="number" min="1.00" max="1000.00" name="non_teacher_rate" class="form-control" value="{{$p->non_teacher_rate}}" required>
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
          <h5 class="modal-title" id="exampleModalLabel">Add New Payment Rate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('payment.add')}}" method="post">
          <div class="modal-body">
            
            @csrf
            <div class="form-group">
              <label class="label-control">Durtaion</label>
              <input type="text" name="duration_min" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="label-control">Certified Tutor Rate</label>
              <input type="number" min="1.00" max="1000.00" name="certified_teacher_rate" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="label-control">Non Certified Tutor Rate</label>
              <input type="number" min="1.00" max="1000.00" name="non_teacher_rate" class="form-control" required>
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