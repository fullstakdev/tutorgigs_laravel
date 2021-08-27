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
$district_wise_school_list = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();

$lesson_query = DB::table('master_lessons')->get();
?>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  
  
  
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Add Course</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
        <a class="btn btn-warning" href="{{url('assesment-rule-list')}}">List Courses</a>
     </div>
    </div>
   </div>
   <!--begin::Form-->
   <form method="post" action="{{route('add.assesment.rule')}}">
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
            <input type="text" name="title" class="form-control" required value="{{old('title')}}">
           </div>
         </div>
       </div>
       
      <div class="row">
        <div class="col-sm-3">
          <button type="button" class="btn btn-info" style="margin-bottom: 10px;" onclick="add_rule(this)">Add Lesson(+)</button>
        </div>
      </div>
      <div id="lesson-div"></div>
       
     </div>
     <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
    $(document).ready(function(){
      $(".all-sel").select2();
    });
    $('#district').change(function () {
      district = $(this).val();
      $.ajax({
        type: "GET",
        url: "<?php echo url('ajax_laoding_data')?>?district="+district+"&action=get_multiple_schools&school_id=",
        success: function (response) {
        $('#d_school').html(response);
        $("#school_div").show('slow');
        
        },
        async: true
      });
    });
    $('#d_school').change(function () {
      school = $(this).val();
    
      $.ajax({
        type: "GET",
        url: "<?php echo url('ajax_laoding_data')?>?school_id="+school+"&action=get_school_grades&district=",
        success: function (response) {
          $('#grade_id').html(response);
          $("#grade_div").show('slow');
          },
        async: true
      });
    });
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
  window.addEventListener('load',function(){
    if($("#district").val() != ''){
       $("#district").val($("#district").val());
       $("#district").change();
    }
    
  });

  function sendAjaxRequest(url,res_id,div_id){
    district = $(this).val();
    $.ajax({
      type: "GET",
      url: url,
      success: function (response) {
      $(res_id).html(response);
      $(div_id).show('slow');
      
      },
      async: true
    });
  }
 </script>
 @endsection