@extends('template.container')
@section('css')
<link href="{{asset('public/css/mobiscroll.jquery.min.css')}}" rel="stylesheet" />
@endsection
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
  .select2-search-field input{
    min-height: 36px;
  }

  .mbsc-calendar-cell.mbsc-calendar-day > div:first-child{ display:none; }

 /**END*/
</style>

@section('content')
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
   <form action="{{url('create_session')}}" method="post">
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
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">District<super class="req">*</super></label>
        <select class="col-sm-12" name="district" id="district" required>
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
        <select  id="d_school" name="master_school"  class="col-sm-12" required>
         <option value="">Select a school</option>
        </select>
        
       </div>
      </div>
     </div>
     <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Grade<super class="req">*</super></label>
        <select class="col-sm-12" name="grade" id="grade_id" required>
         <option value="">Select a grade</option>
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group" id="main_kt_select2_9">
        <label for="exampleSelectd">Students<super class="req">*</super></label>
        <input type="text" class="col-sm-12 form-control" id="kt_select2_9" name="student"  multiple="multiple" required>
         
        </select>
       </div>
      </div>
     </div>
     
     
     <div class="row">
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Tutor/Instructor Certification Required</label>
        <select class="form-control" name="certificate_required" id="certificate_required" onchange="javascript: if(this.value == 1) $('#certificate').show('slow'); else $('#certificate').hide('slow');">
         <option value="0">No</option>
         <option value="1">Yes</option>
         
        </select>
       </div>
      </div>
      <div class="col-sm-6" id="lesson-div-sh">
       <div class="form-group">
        <label for="lesson_id">Lesson<super class="req">*</super></label>
        <select class="col-sm-12" id="lesson_id" name="lessons">
         
         <option value="">Select Lesson</option>
         @foreach($lesson_query as $lesson)
         <option value="<?php echo $lesson->id; ?>"><?php echo $lesson->name; ?></option>
         @endforeach
        </select>
       </div>
      </div>
      <div class="col-sm-6" id="course-div-sh" style="display:none;">
       <div class="form-group">
        <label for="lesson_id">Courses<super class="req">*</super></label>
        <select class="col-sm-12 form-control" id="course_id" name="rule_id">
         @foreach($courses as $course)
         <option value="<?php echo $course->id; ?>"><?php echo $course->title; ?></option>
         @endforeach
        </select>
       </div>
      </div>
      <div class="col-sm-6" id="as_id" style="display:none">
        <div class="form-group">

         <label for="lesson_id" style="font-size: 15px;font-weight: 500;">Assesment<super class="req">*</super></label><input type="checkbox" style="margin: 0px 0px 0px 5px;" onclick="var s = this; if($(s).prop('checked')){ $(s).next().show('slow'); }else{ $(s).next().hide('slow'); $(s).next().val(''); }">
         <select class="col-sm-12 form-control" id="assesment_day" name="assesment_day" style="display:none">
          
          <option value="">Select Assessment</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
         </select>
        </div>
      </div>
      <div class="col-sm-12">
       <div class="form-group" id="certificate" style="display:none">
        <label for="exampleSelectd">Choose Certificate</label>
        <div class="checkbox-inline">
         <label class="radio">
          <input type="radio"  name="certificate" value="Bilingual Tutor ( Spanish )">
          <span></span>&nbsp;&nbsp;Bilingual Tutor ( Spanish ) &nbsp;&nbsp;&nbsp;&nbsp;</label>
          <label class="radio">
           <input type="radio" name="certificate" value="Certified Teacher">
           <span></span>&nbsp;&nbsp;Certified Teacher &nbsp;&nbsp;&nbsp;&nbsp;</label>
           <label class="radio">
            <input type="radio" checked="checked" name="certificate" value="Certified Teacher in ESL">
            <span></span>&nbsp;&nbsp;Certified Teacher in ESL &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <label class="radio">
             <input type="radio" checked="checked" name="certificate" value="Certified Teacher in ESL with Bilingual Tutor ( Spanish )">
             <span></span>&nbsp;&nbsp;Certified Teacher in ESL with Bilingual Tutor ( Spanish ) </label>
             
            </div>
           </div>
          </div>
     </div>
     <div class="row">
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Repeat</label>
        <select class="form-control " id="repeat_method" name="repeat_method" onchange="javascript:if(this.value == '1') { $('#repeat').show('slow');$('#custom_type').hide('slow'); $('#repeat_end_date').show('slow'); $('#lesson-div-sh').hide('slow'); $('#course-div-sh').show('slow'); $('#as_id').show('slow'); $('#sp_h_div').show('slow'); $('#toggle_start_date').hide('slow'); } else {$('#repeat').hide('slow');$('#week_days').hide('slow'); $('#custom_type').hide('slow'); $('#repeat_end_date').hide('slow'); $('#lesson-div-sh').show('slow'); $('#course-div-sh').hide('slow'); $('#as_id').hide('slow');$('#sp_h_div').hide('slow'); $('#toggle_start_date').show('slow'); } $('#c_t_id').val('');">
         <option value="0">Does not repeat</option>
         <option value="1">Repeat</option>
         
        </select>
       </div>
      </div>
      
      <div class="col-sm-3" id="repeat" style="display:none">
       <div class="form-group">
        <label for="exampleSelectd">Repeat Type</label>
        <select id="c_t_id" class="form-control " name="repeat_type" onchange="javascript: if(this.value == 'month' || this.value == 'year' || this.value == '2_week' || this.value == '3_week' || this.value=='week_days') { $('#week_days').hide('slow');} ; if(this.value == 'weekly' ) { $('#week_days').show('slow');} ; ">
         <option value="">Select Repeat Type</option>
         <option value="weekly">Weekly</option>
         <option value="week_days">Every Weekday(Monday to Friday)</option>
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
          <input type="checkbox"  name="days[Sunday]">
          <span></span>Sun
         </label>
         <label class="checkbox">
           <input type="checkbox" name="days[Monday]">
           <span></span>Mon
          </label>
          <label class="checkbox">
            <input type="checkbox" checked="checked" name="days[Tuesday]">
            <span></span>Tue
           </label>
           <label class="checkbox">
             <input type="checkbox" checked="checked" name="days[Wednesday]">
             <span></span>Wed
            </label>
           <label class="checkbox">
             <input type="checkbox" checked="checked" name="days[Thursday]">
             <span></span>Thu
            </label>
            <label class="checkbox">
              <input type="checkbox" checked="checked" name="days[Friday]">
              <span></span>Fri
             </label>
             <label class="checkbox">
              <input type="checkbox" name="days[Saturday]">
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
      <div class="col-sm-3" id="toggle_start_date">
       <div class="form-group">
        <label for="exampleSelectd">Start Date<super class="req">*</super></label>
        <div class="input-group input-group-solid date start_date_datepicker">
         <input type="text" class="form-control form-control-solid datetimepicker-input " placeholder="Select date &amp; time"  name="start_date" id="start_date" />
         <!-- <div class="input-group-append" id="start_date_datepicker" onclick="prevClick(this)"> -->
          <span class="input-group-text input-group-append">
           <i class="ki ki-calendar"></i>
          </span>
         <!-- </div> -->
        </div>
       </div>

      </div>
      <div class="col-sm-6" id="repeat_end_date" style="display:none">
        <div class="form-group">
          <label for="exampleSelectd">Choose Start-End Date<super class="req">*</super></label>
          <div id="repeat_date_cal"></div>
        </div>
       <input type="hidden" name="end_date" id="end_date" />
       
      </div>
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Time<super class="req">*</super></label>
        <div class="input-group input-group-solid date">
         <input type="time" name="time" class="form-control form-control-solid" placeholder="Select date &amp; time" required />
        
          <!-- <span class="input-group-text input-group-append">
           <i class="ki ki-clock"></i>
          </span> -->
        </div>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">Duration<super class="req">*</super></label>
        <select class="form-control" id="duration_id" name="duration" required onchange="showPaymentRate(this.value)">
          <option value="">Choose Duration</option>
         <option value="15">15</option>
         <option value="20">20</option>
        <option value="25">25</option>
        <option value="30">30</option>
        <option value="35">35</option>
        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
       </select>
      </div>
     </div>
      <div class="col-sm-6" id="payment_rate_div" style="display:none">
       <div class="form-group">
        <label for="exampleSelectd">Payment Overview<super class="req"></super></label>
        <input type="number" min="0.00" id="payment_rate" name="payment_rate" class="form-control" required>
      </div>
     </div>

    </div>
    <div class="row" id="sp_h_div" style="display:none">
      <div class="col-sm-6">
        <div class="form-group">
            <label for="lesson_id" style="font-size: 15px;font-weight: 500;">Holiday Date<super class="req">*</super></label><input id="holiday_checkbox" type="checkbox" style="margin: 0px 0px 0px 5px;" onclick="var s = this; if($(s).prop('checked')){ $(s).next().show('slow'); }else{ $(s).next().hide('slow'); }">
          <div id="sp_holiday_cal" style="display:none"></div>
        </div>
      </div>
      <input type="hidden" name="sp_holiday" id="sp_holiday">
    </div>
    
   
          
          
              
             </div>
             <div class="card-footer">
              <button type="submit" class="btn btn-primary mr-2" onclick="SetHoliday()">Submit</button>
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
      <script src="{{asset('public/mobijs/mobi_crack1.js')}}"></script>
       <script>
           
           mobiscroll.setOptions({
               theme: 'ios',
               themeVariant: 'light'
           });

           $(function () {

               $('#sp_holiday_cal').mobiscroll().datepicker({
                   controls: ['calendar'],
                   display: 'inline',
                   rangeSelectMode: 'wizard',
                   select: 'range',
                   showRangeLabels: true,
                   returnFormat: 'iso8601'
               });

               $("#repeat_date_cal").mobiscroll().datepicker({
                   controls: ['calendar'],
                   display: 'inline',
                   rangeSelectMode: 'wizard',
                   select: 'range',
                   showRangeLabels: true,
                   returnFormat: 'iso8601'
               });

           });

           function SetHoliday(){
            if($("#holiday_checkbox").prop('checked')){
              var holiday_val = $('#sp_holiday_cal').mobiscroll('getVal');
              $("#sp_holiday").val(holiday_val);
            }

            if($("#repeat_method").val()==1){
              var strt_end_date = $('#repeat_date_cal').mobiscroll('getVal');
              if(strt_end_date==''){
                window.event.preventDefault();
                window.alert("Please choose start and end date....");
                return false;
              }else if(strt_end_date[1]==null){
                window.event.preventDefault();
                window.alert("Please choose end date....");
                return false;
              }
              if($("#c_t_id").val()==''){
                window.event.preventDefault();
                window.alert("Please choose repeat type....");
                return false;
              }

              $("#end_date").val(strt_end_date[1]);
              $("#start_date").val(strt_end_date[0]);
            }

           }
       </script>
       <!--begin::Page Vendors(used by this page)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.js"></script>
   
       <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
       <!-- <script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}"></script> -->
       <script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}"></script>
      <script>
       var test,test2;
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
        $('#kt_select2_9').removeClass('form-control');
       $('#kt_select2_9').html(response);
        test = response;
        var STU_GROUPS = JSON.parse(response);
        multipleGroupSelect(STU_GROUPS);
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
       $(".start_date_datepicker").datepicker({
            autoclose: true,
            format: "mm/dd/yyyy",
            immediateUpdates: true,
            todayBtn: true,
            todayHighlight: true
        }).datepicker("setDate", "0");
       function multipleGroupSelect(STU_GROUPS) {
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
              if(e.object.text==="All Student Group"){

                var div = document.createElement("div");
                div.id="student_per_session_div";
                div.style.marginTop ="5px";
                div.innerHTML = ' <label for="exampleSelectd">Student Per Session<super class="req">*</super></label><select name="students_per_session" class="form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>';
                if(!$("#student_per_session_div").length){
                   $("#main_kt_select2_9").append(div);
                }
              }else{
                if($("#student_per_session_div").length){
                   $("#student_per_session_div").remove();
                }
              }

         });
       }
       /*Start Multigroup Student Select*/
       /*var STU_GROUPS = [
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
       ];*/
       // $('#kt_select2_9').select2({
       //     multiple: true,
       //     placeholder: "Select Students...",
       //     data: STU_GROUPS,
       //     query: function(options) {
       //         var selectedIds = options.element.select2('val');
       //         var selectableGroups = $.map(this.data, function(group) {
       //             var areChildrenAllSelected = true;
       //             $.each(group.children, function(i, child) {
       //                 if (selectedIds.indexOf(child.id) < 0) {
       //                     areChildrenAllSelected = false;
       //                     return false; // Short-circuit $.each()
       //                 }
       //            });
       //             return !areChildrenAllSelected ? group : null;
       //         });
       //         options.callback({ results: selectableGroups });
       //     }
       // }).on('select2-selecting', function(e) {
       //     var $select = $(this);
       //     if (e.val == '') {
       //         e.preventDefault();
       //         $select.select2('data', $select.select2('data').concat(e.choice.children));
       //         $select.select2('close');
       //     }
       // });

       /*End Student Group*/

        function showPaymentRate(duration){
          var certificate_val = $("#certificate_required").val();
          if(duration==''){
            $("#payment_rate").val('0');
            return false;
          }
          $.ajax({
            type: 'GET',
            url : '{{route("payment.get_payment_rate")}}',
            data : { duration:duration, certified:certificate_val},
            success :  function(data){
              $("#payment_rate").val(data);
              $("#payment_rate_div").show('slow');
            },
            error : function(data){

            }
          });
        }
        $("#certificate_required").change(function(){
            $("#duration_id").change();
            
        });
      </script>
       @endsection