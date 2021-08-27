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
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
 <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
  <!--begin::Info-->
  <div class="d-flex align-items-center flex-wrap mr-2">
   <!--begin::Page Title-->
   <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Applicant Details</h5>
   <!--end::Page Title-->
   
  </div>
  
 </div>
</div>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  
  
  
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Add Assesment Rule</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
     
     </div>
    </div>
   </div>
   <!--begin::Form-->
   <form>
    <div class="card-body">
       <div class="row">
         <div class="col-sm-8">
           <div class="form-group">
            <label for="exampleSelectd">District<super class="req">*</super></label>
            <select class="col-sm-12 all-sel" name="district" id="district">
             <option value="">Select a district</option>
             @foreach($district_wise_school_list as $district)
             <option value="<?php echo $district->id; ?>">{{$district->district_name}}</option>
             @endforeach
             
            </select>
           </div>
         </div>
       </div>
       <div id="school_div" style="display:none">
         <div class="row">
           <div class="col-sm-8">
            <div class="form-group">
             <label for="exampleSelectd">School<super class="req">*</super></label>
             <select  id="d_school" name="master_school"  class="all-sel">
              <option value="">Select a school</option>
             </select>
             
            </div>
           </div>
         </div>
       </div>
       <div id="grade_div" style="display:none">
         <div class="row">
           <div class="col-sm-8">
            <div class="form-group">
             <label for="exampleSelectd">Grade<super class="req">*</super></label>
             <select class="col-sm-12 all-sel" name="grade" id="grade_id">
              <option value="">Select a grade</option>
             </select>
            </div>
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
      <button type="reset" class="btn btn-primary mr-2">Submit</button>
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
    html += '<div class="total-num"></div><div class="col-sm-8"><div class="form-group"><select class="form-control"><option value="">Select Lesson</option>';
    @foreach($lesson_query as $lesson)
      html += '<option value="<?php echo $lesson->id; ?>"><?php echo $lesson->name; ?></option>';
    @endforeach
    html +='</select></div></div><div class="col-sm-2"><button class="btn btn-danger" type="button" onclick=remove_rule(this)>-</button></div>';
    return html;
  }
 </script>
 @endsection