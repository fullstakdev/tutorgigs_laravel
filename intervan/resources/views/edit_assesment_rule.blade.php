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
  .total-num{
    width: 55px!important;
    padding-top: 9px;
    font-size: 15px;
    font-weight: 600;
  }
</style>
@endsection
@section('content')
<?php

$lesson_query = DB::table('master_lessons')->get();
?>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  
  
  
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Edit Course</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
     
     </div>
    </div>
   </div>
   <!--begin::Form-->
   <form method="post" action="{{route('edit.assesment.rule',$rule->id)}}">
    @csrf
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
     
       <div class="row">
         <div class="col-sm-8">
           <div class="form-group">
            <label for="exampleSelectd">Title<super class="req">*</super></label>
            <input type="text" name="title" value="{{$rule->title}}" class="form-control" required>
           </div>
         </div>
       </div>
      <div class="row">
        <div class="col-sm-3">
          <button type="button" class="btn btn-info" style="margin-bottom: 10px;" onclick="add_rule(this)">Add Lesson(+)</button>
        </div>
      </div>
      <div id="lesson-div">
        @php $lesson_ids = explode(',',$rule->lesson_ids); $count=1; @endphp
        @foreach($lesson_ids as $id)
        @php $rule_lesson = \App\Models\Lesson::find($id); @endphp
        <div class="row">
          <div class="total-num"> Day {{$loop->iteration}}</div>
          <div class="col-sm-8">
            <select class="form-control" name="lessons[]" required>
              <option value="">Select Lesson</option>
              @foreach($lesson_query as $lesson)
                <option value="{{$lesson->id}}" {{$lesson->id==$rule_lesson->id?'selected':''}}>{{ $lesson->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-sm-2">
            <button class="btn btn-danger" type="button" onclick="remove_rule(this)">-</button>
          </div>
          </div>
        @endforeach
      </div>
      
     </div>
     <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Update</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </form>
    <!--end::Form-->
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
 <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
 <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>
 
 <script>
  function add_rule(e){
    $("#lesson-div").append(getHtml());
   changeNumber();
  }
  function remove_rule(e){
    $(e).parent().parent().remove();
    changeNumber();
  }
  function changeNumber(){
    var i=1;
    $(".total-num").each(function(){
      $(this).text('Day '+i);
      i++;
    });
  }
  function getHtml(){
    var html = '<div class="row">';
    html += '<div class="total-num"></div><div class="col-sm-8"><div class="form-group"><select class="form-control" name="lessons[]" required><option value="">Select Lesson</option>';
    @foreach($lesson_query as $lesson)
      html += '<option value="<?php echo $lesson->id; ?>"><?php echo $lesson->name; ?></option>';
    @endforeach
    html +='</select></div></div><div class="col-sm-2"><button class="btn btn-danger" type="button" onclick=remove_rule(this)>-</button></div>';
    return html;
  }
  
 </script>
 @endsection