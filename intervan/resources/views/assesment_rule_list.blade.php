@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css">
<style>
  .form-group label {
      font-size: 15px;
      font-weight: 600;
      color: #3F4254;
  }
  .select2.select2-container{
    width: 100%!important;
  }
  .modal .modal-header .close span {
      display: block!important;
  }
</style>
@endsection
@section('content')

<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  
  
  
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Courses</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
       <a href="{{url('add-assesment-rule')}}" class="btn btn-warning">Create Course</a>
     </div>
    </div>
   </div>
   <div class="card-body">
    @if (Session::has('success'))
      <div class="alert alert-success">
        <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
      </div>
    @endif
     <table class="table" id="rule_table">
       <thead>
         <th>Sr#</th>
         <th>Title</th>
         <th>Lessons</th>
         <th>Action</th>
       </thead>
       <tbody>

         @foreach($ruleLists as $rule)
         <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rule->title}}</td>
            <td><button class="btn btn-info" data-toggle="modal" data-target="#rule_modal_{{$rule->id}}">View Lesson</button>

                <!-- Modal -->
                <div class="modal fade" id="rule_modal_{{$rule->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lessons List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <ul style="list-style: none;">
                         @php $lesson_ids = explode(',',$rule->lesson_ids); $count=1; @endphp
                         @foreach($lesson_ids as $id)
                            <li>Day {{$loop->iteration}}&nbsp;:&nbsp;{{\App\Models\Lesson::find($id)->name}}</li>
                         @endforeach
                        </ul>
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            <td>
              <a href="{{route('edit.assesment.rule',$rule->id)}}" class="btn btn-primary">View/Edit</a>
              @if(!$rule->is_general)
                <a href="{{route('delete.assesment.rule',$rule->id)}}" class="btn btn-danger" onclick="if(!confirm('Are you sure to delete?')){return false;}">Delete</a>
              @endif
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
 <!--begin::Page Vendors(used by this page)-->

 <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
 <script>
   $("#rule_table").dataTable();
 </script>

 @endsection