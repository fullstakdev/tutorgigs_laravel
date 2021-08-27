@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css">
<style type="text/css">
 .form-group label {
     font-size: 15px;
     font-weight: 600;
     color: #3F4254;
 }
 label.radio,label.checkbox {
     font-weight: 400;
     font-size: 1rem;
 }
 /*select,input[type="text"],.select2-selection__rendered {
     min-height: 45px;
 }*/
 super.req{ color: red; }
 /*Select 2 Option CSS**/

  .select2-container .select2-choice{ 
  background:unset!important;
  display: block;
      width: 100%;
      height: calc(1.5em + 1.3rem + 2px);
      padding: 0.65rem 1rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #3F4254;
      background-color: #ffffff;
      background-clip: padding-box;
      border: 1px solid #E4E6EF;
      border-radius: 0.42rem;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  }
  .select2-container .select2-choice .select2-arrow{
      background:unset!important;
      border-left:unset!important;
  }
  .select2-container-multi .select2-choices{
      display: block;
      width: 100%;
      font-size: 1rem;
      font-weight: 400;
      color: #3F4254;
      background-color: #ffffff;
      background-clip: padding-box;
      border: 1px solid #E4E6EF;
      border-radius: 0.42rem;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  }

 /**END*/
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
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Create Session</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
      <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
      <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
     </div>
    </div>
   </div>
   <!--begin::Form-->
   <form>
    <div class="card-body">
     <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">District<super class="req">*</super></label>
        <select class="col-sm-12" name="district[]" id="district">
         <option value="">Select a district</option>
         @foreach($district_wise_school_list as $district)
         <option value="<?php echo $district->id; ?>">{{$district->district_name}}</option>
         @endforeach
         
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">School<super class="req">*</super></label>
        <select  id="d_school" name="master_school[]"  class="col-sm-12">
         <option value="">Select a school</option>
        </select>
        
       </div>
      </div>
     </div>
     <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Grade<super class="req">*</super></label>
        <select class="col-sm-12" name="grade" id="grade_id">
         <option value="">Select a grade</option>
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Students<super class="req">*</super></label>
        <input type="text" class="col-sm-12" id="kt_select2_9" name="student[]"  multiple="multiple">
         
        </select>
       </div>
      </div>
     </div>
     
     
     <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Tutor/Instructor Certification Required</label>
        <select class="form-control" id="exampleSelectd" onchange="javascript: if(this.value == 1) $('#certificate').show('slow'); else $('#certificate').hide('slow');">
         <option value="0">No</option>
         <option value="1">Yes</option>
         
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="lesson_id">Lesson<super class="req">*</super></label>
        <select class="col-sm-12" id="lesson_id">
         
         <option value="">Select Lesson</option>
         @foreach($lesson_query as $lesson)
         <option value="<?php echo $lesson->id; ?>"><?php echo $lesson->name; ?></option>
         @endforeach
        </select>
       </div>
      </div>
      <div class="col-sm-12">
       <div class="form-group" id="certificate" style="display:none">
        <label for="exampleSelectd">Choose Certificate</label>
        <div class="checkbox-inline">
         <label class="radio">
          <input type="radio"  name="Checkboxes3">
          <span></span>&nbsp;&nbsp;Bilingual Tutor ( Spanish ) &nbsp;&nbsp;&nbsp;&nbsp;</label>
          <label class="radio">
           <input type="radio" name="Checkboxes3">
           <span></span>&nbsp;&nbsp;Certified Teacher &nbsp;&nbsp;&nbsp;&nbsp;</label>
           <label class="radio">
            <input type="radio" checked="checked" name="Checkboxes3">
            <span></span>&nbsp;&nbsp;Certified Teacher in ESL &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <label class="radio">
             <input type="radio" checked="checked" name="Checkboxes3">
             <span></span>&nbsp;&nbsp;Certified Teacher in ESL with Bilingual Tutor ( Spanish ) </label>
             
            </div>
           </div>
          </div>
     </div>
     <div class="row">
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Repeat</label>
        <select class="form-control " name="param" onchange="javascript:if(this.value == '1') { $('#repeat').show('slow');$('#custom_type').hide('slow'); $('#repeat_end_date').show('slow');} else {$('#repeat').hide('slow');$('#week_days').hide('slow'); $('#custom_type').hide('slow'); $('#repeat_end_date').hide('slow');}">
         <option>Does not repeat</option>
         <option value="1">Repeat</option>
         
        </select>
       </div>
      </div>
      
      <div class="col-sm-3" id="repeat" style="display:none">
       <div class="form-group">
        <label for="exampleSelectd">Repeat Type</label>
        <select class="form-control " name="param" onchange="javascript: if(this.value == 'month' || this.value == 'year' || this.value == '2_week' || this.value == '3_week' || this.value=='week-days') { $('#week_days').hide('slow');} ; if(this.value == 'weekly' ) { $('#week_days').show('slow');} ; ">
         <option value="">Select Repeat Type</option>
         <option value="weekly">Weekly</option>
         <option value="week-days">Every Weekday(Monday to Friday)</option>
         <option value="2_week">Every 2 weeks</option>
         <option value="3_week">Every 3 weeks</option>
         <option value="month">Every Month</option>
         <option value="year">Every Year</option>
        </select>
       </div>
      </div>
      <div class="col-sm-3">
       <div class="form-group" id="week_days" style="display:none">
        <label for="exampleSelectd">Choose Week Days</label>
        <div class="checkbox-inline">
         <label class="checkbox">
          <input type="checkbox"  name="Checkboxes3">
          <span></span>Sun
         </label>
         <label class="checkbox">
           <input type="checkbox" name="Checkboxes3">
           <span></span>Mon
          </label>
          <label class="checkbox">
            <input type="checkbox" checked="checked" name="Checkboxes3">
            <span></span>Tue
           </label>
           <label class="checkbox">
             <input type="checkbox" checked="checked" name="Checkboxes3">
             <span></span>Wed
            </label>
           <label class="checkbox">
             <input type="checkbox" checked="checked" name="Checkboxes3">
             <span></span>Thu
            </label>
            <label class="checkbox">
              <input type="checkbox" checked="checked" name="Checkboxes3">
              <span></span>Fri
             </label>
             <label class="checkbox">
              <input type="checkbox" name="Checkboxes3">
              <span></span>Sat
             </label>
        </div>
       </div>
             
       <!-- <div class="form-group" id="custom_type" style="display:none">
        
        <label for="exampleSelectd"> Date</label>
        <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
         <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_3" />
         <div class="input-group-append" data-target="#kt_datetimepicker_3" data-toggle="datetimepicker">
          <span class="input-group-text">
           <i class="ki ki-calendar"></i>
          </span>
         </div>
        </div>
       </div> -->
      </div>
     </div>
     <div class="row">
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Start Date<super class="req">*</super></label>
        <div class="input-group input-group-solid date start_date_datepicker">
         <input type="text" class="form-control form-control-solid datetimepicker-input " placeholder="Select date &amp; time" />
         <!-- <div class="input-group-append" id="start_date_datepicker" onclick="prevClick(this)"> -->
          <span class="input-group-text input-group-append">
           <i class="ki ki-calendar"></i>
          </span>
         <!-- </div> -->
        </div>
       </div>

      </div>
      <div class="col-sm-3" id="repeat_end_date" style="display:none">
       <div class="form-group">
        <label for="exampleSelectd">End Date<super class="req">*</super></label>
        <div class="input-group input-group-solid date start_date_datepicker">
         <input type="text" class="form-control form-control-solid datetimepicker-input " placeholder="Select date &amp; time" />
         <!-- <div class="input-group-append" id="start_date_datepicker" onclick="prevClick(this)"> -->
          <span class="input-group-text input-group-append">
           <i class="ki ki-calendar"></i>
          </span>
         <!-- </div> -->
        </div>
       </div>
       
      </div>
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Time<super class="req">*</super></label>
        <div class="input-group input-group-solid date timepicker-div" id="kt_datetimepicker_4" data-target-input="nearest">
         <input type="text" class="form-control form-control-solid datetimepicker-input" placeholder="Select date &amp; time" />
        <!--  <div class="input-group-append" onclick="prevClick(this)"> -->
          <span class="input-group-text input-group-append">
           <i class="ki ki-clock"></i>
          </span>
         <!-- </div> -->
        </div>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Duration<super class="req">*</super></label>
        <select class="form-control " name="param">
         <option>15</option>
         <option>20</option>
        <option>25</option>
        <option>30</option>
        <option>35</option>
        <option>40</option>
        <option>45</option>
        <option>50</option>
        <option>55</option>
        <option>60</option>
       </select>
      </div>
     </div>
    </div>
    
   
          
          
              
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
   
       <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
       <!-- <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script> -->
       <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>
       <script>
       
       $('#district').change(function () {
       district = $(this).val();
       //  $('#district_school').html('Loading ...');
       
       $.ajax({
       type: "GET",
       url: "<?php echo url('ajax_laoding_data')?>?district="+district+"&action=get_multiple_schools&school_id=",
       success: function (response) {
       $('#d_school').html(response);
       
       },
       async: true
       });
       });
       
       $('#d_school').change(function () {
       school = $(this).val();
       //  $('#district_school').html('Loading ...');
       
       $.ajax({
       type: "GET",
       url: "<?php echo url('ajax_laoding_data')?>?school_id="+school+"&action=get_school_grades&district=",
       success: function (response) {
       $('#grade_id').html(response);
       
       },
       async: true
       });
       });
       
       $('#grade_id').change(function () {
       grade_id = $(this).val();
       school_id = $('#d_school').val();
       //  $('#district_school').html('Loading ...');
       
       $.ajax({
       type: "GET",
       url: "<?php echo url('ajax_laoding_data')?>?school_id="+school+"&action=get_multiple_students&grade_id="+grade_id,
       success: function (response) {
       $('#kt_select2_9').html(response);
       
       },
       async: true
       });
       });

       var select2_array = ['#district',"#d_school","#grade_id","#lesson_id"];
       for (var v in select2_array) {
        $(select2_array[v]).select2({
         allowClear: true,
         width: 'resolve',
         dropdownAutoWidth: true
        });
       }
       $(".timepicker-div").timepicker();
       $(".start_date_datepicker").datepicker();

       /*Start Multigroup Student Select*/
       var STU_GROUPS = [
           {
               id: '',
               text: 'Student Group 1',
               children: [
                   { id: 'va1', text: 'Student1' },
                   { id: 'va4', text: 'student 4' },
                   { id: 'va6', text: 'student 6' },
                   { id: 'va8', text: 'student 8' }
               ]
           },
           {
               id: '',
               text: 'Student Group 2',
               children: [
                   { id: 'va3', text: 'Student3' },
                   { id: 'va4', text: 'Student4' },
                   { id: 'va5', text: 'Student5' }
               ]
           },
           {
               id: '',
               text: 'All student',
               children: [
                   { id: 'va1', text: 'Student1' },
                   { id: 'va2', text: 'Student2' },
                   { id: 'va3', text: 'Student3' },
                   { id: 'va4', text: 'Student4' },
                   { id: 'va5', text: 'Student5' },
                   { id: 'va6', text: 'Student6' },
                   { id: 'va7', text: 'Student7' },
                   { id: 'va8', text: 'Student8' },
               ]
           }
       ];
       $('#kt_select2_9').select2({
           multiple: true,
           placeholder: "Select Students...",
           data: STU_GROUPS,
           query: function(options) {
               var selectedIds = options.element.select2('val');
               var selectableGroups = $.map(this.data, function(group) {
                   var areChildrenAllSelected = true;
                   $.each(group.children, function(i, child) {
                       if (selectedIds.indexOf(child.id) < 0) {
                           areChildrenAllSelected = false;
                           return false; // Short-circuit $.each()
                       }
                  });
                   return !areChildrenAllSelected ? group : null;
               });
               options.callback({ results: selectableGroups });
           }
       }).on('select2-selecting', function(e) {
           var $select = $(this);
           if (e.val == '') {
               e.preventDefault();
               $select.select2('data', $select.select2('data').concat(e.choice.children));
               $select.select2('close');
           }
       });

       /*End Student Group*/
       </script>
       @endsection