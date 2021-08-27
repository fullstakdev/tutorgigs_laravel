@extends('template.container')
@section('css')
<link href="{{asset('public/css/mobiscroll.jquery.min.css')}}" rel="stylesheet" />
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
@endsection
@section('content')
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
 <!--begin::Container-->
 <div class="container">
  <div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
    <h3 class="card-title"><i class="fa fa-plus-circle"></i>Edit Repeat Session</h3>
    <div class="card-toolbar">
     <div class="example-tools justify-content-center">
      <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
      <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
     </div>
    </div>
   </div>
   <!--begin::Form-->
   <form action="{{route('repeat.sessions.update',$repeat_session->id)}}" method="post">
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
         <option value="<?php echo $district->id; ?>" {{$district->id==$repeat_session->district_id?'selected': ''}}>{{$district->district_name}}</option>
         @endforeach
         
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="exampleSelectd">School<super class="req">*</super></label>
        <select  id="d_school" name="master_school"  class="col-sm-12" required>
         <option value="">Select a school</option>
         @foreach($schools as $school)
          <option value="{{$school->SchoolId}}" {{$school->SchoolId==$repeat_session->school_id?'selected':''}}>{{$school->SchoolName}}</option>
         @endforeach
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
         @foreach($grades as $grade)
         <option value="{{$grade->id}}" {{$grade->id==$repeat_session->grade_id?'selected':''}}>{{$grade->name}}</option>
         @endforeach
        </select>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="form-group" id="main_kt_select2_9">
        <label for="exampleSelectd">Students<super class="req">*</super></label>
        <input type="text" class="col-sm-12" id="kt_select2_9" name="student"  multiple="multiple" required>
        @if($repeat_session->student_per_session>0)
        <div id="student_per_session_div">
          <label for="exampleSelectd">Student Per Session<super class="req">*</super></label>
          <select name="students_per_session" class="form-control">
            <option value="1" {{$repeat_session->student_per_session==1?'selected' : ''}}>1</option>
            <option value="2" {{$repeat_session->student_per_session==2?'selected' : ''}}>2</option>
            <option value="3" {{$repeat_session->student_per_session==3?'selected' : ''}}>3</option>
            <option value="4" {{$repeat_session->student_per_session==4?'selected' : ''}}>4</option>
            <option value="5" {{$repeat_session->student_per_session==5?'selected' : ''}}>5</option>
            <option value="6" {{$repeat_session->student_per_session==6?'selected' : ''}}>6</option>
            <option value="7" {{$repeat_session->student_per_session==7?'selected' : ''}}>7</option>
            <option value="8" {{$repeat_session->student_per_session==8?'selected' : ''}}>8</option>
            <option value="9" {{$repeat_session->student_per_session==9?'selected' : ''}}>9</option>
            <option value="10" {{$repeat_session->student_per_session==10?'selected' : ''}}>10</option>
          </select>
        </div>
        @endif
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
      <div class="col-sm-6" id="course-div-sh">
       <div class="form-group">
        <label for="lesson_id">Courses<super class="req">*</super></label>
        <select class="col-sm-12 form-control" id="course_id" name="rule_id" required>
         
         <option value="">Select Course</option>
         @foreach($courses as $course)
         <option value="<?php echo $course->id; ?>" {{$course->id==$repeat_session->rule_id?'selected':''}}><?php echo $course->title; ?></option>
         @endforeach
        </select>
       </div>
      </div>
      @php $as_day = isset($assesment_day->assesment_day) ? $assesment_day->assesment_day : ''; @endphp
      <div class="col-sm-6" id="as_id">
        <div class="form-group">
         <label for="lesson_id" style="font-size: 15px;font-weight: 500;">Assesment</label><input type="checkbox" style="margin: 0px 0px 0px 5px;" onclick="var s = this; if($(s).prop('checked')){ $(s).next().show('slow'); }else{ $(s).next().hide('slow'); $(s).next().val(''); }" {{$as_day != '' ? 'checked' : ''}}>
         <select class="col-sm-12 form-control" id="assesment_day" name="assesment_day" style="{{$as_day==''?'display:none;' : ''}}">
          
          <option value="">Select Assessment</option>
          @for($i=1; $i<=10; $i++)
            <option value="{{$i}}" {{$i==$as_day?'selected':''}}>{{$i}}</option>
          @endfor
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
         <div class="col-sm-3" id="repeat">
          <div class="form-group">
           <label for="exampleSelectd">Repeat Type</label>
           <select class="form-control " name="repeat_type" onchange="javascript: if(this.value == 'month' || this.value == 'year' || this.value == '2_week' || this.value == '3_week' || this.value=='week_days') { $('#week_days').hide('slow');} ; if(this.value == 'weekly' ) { $('#week_days').show('slow');} ; ">
            <option value="">Select Repeat Type</option>
            <option value="weekly" {{$repeat_session->repeat_type=="weekly" ? 'selected' : ''}}>Weekly</option>
            <option value="week_days" {{$repeat_session->repeat_type=="week_days" ? 'selected' : ''}}>Every Weekday(Monday to Friday)</option>
            <option value="2_week" {{$repeat_session->repeat_type=="2_week" ? 'selected' : ''}}>Every 2 weeks</option>
            <option value="3_week" {{$repeat_session->repeat_type=="3_week" ? 'selected' : ''}}>Every 3 weeks</option>
            <option value="month" {{$repeat_session->repeat_type=="month" ? 'selected' : ''}}>Every Month</option>
            <option value="year" {{$repeat_session->repeat_type=="year" ? 'selected' : ''}}>Every Year</option>
           </select>
          </div>
         </div>
         <div class="col-sm-3">
          <div class="form-group" id="week_days" style="{{$repeat_session->repeat_type=='weekly' ? 'block' : 'display:none'}}">
            @php $days = explode(',',$repeat_session->repeat_days); @endphp
           <label for="exampleSelectd">Choose Week Days</label>
           <div class="checkbox-inline">
            <label class="checkbox">
             <input type="checkbox"  name="days[Sunday]" {{in_array("Sunday",$days) ? 'checked' : ''}}>
             <span></span>Sun
            </label>
            <label class="checkbox">
              <input type="checkbox" name="days[Monday]" {{in_array("Monday",$days) ? 'checked' : ''}}>
              <span></span>Mon
             </label>
             <label class="checkbox">
               <input type="checkbox"  name="days[Tuesday]" {{in_array("Tuesday",$days) ? 'checked' : ''}}>
               <span></span>Tue
              </label>
              <label class="checkbox">
                <input type="checkbox"  name="days[Wednesday]" {{in_array("Wednesday",$days) ? 'checked' : ''}}>
                <span></span>Wed
               </label>
              <label class="checkbox">
                <input type="checkbox"  name="days[Thursday]" {{in_array("Thursday",$days) ? 'checked' : ''}}>
                <span></span>Thu
               </label>
               <label class="checkbox">
                 <input type="checkbox"  name="days[Friday]" {{in_array("Friday",$days) ? 'checked' : ''}}>
                 <span></span>Fri
                </label>
                <label class="checkbox">
                 <input type="checkbox" name="days[Saturday]" {{in_array("Saturday",$days) ? 'checked' : ''}}>
                 <span></span>Sat
                </label>
           </div>
          </div>
         </div>
     </div>
     <div class="row">
      <div class="col-sm-6" id="repeat_end_date">
        <div class="form-group">
          <label for="exampleSelectd">Choose Start-End Date<super class="req">*</super></label>
          <div id="repeat_date_cal"></div>
        </div>

        <input type="hidden" name="start_date" id="start_date" value="{{date('m/d/Y',strtotime($repeat_session->start_time))}}" />
       <input type="hidden" name="end_date" id="end_date" value="{{date('m/d/Y',strtotime($repeat_session->end_date))}}" />
       
       
      </div>
      <div class="col-sm-3">
       <div class="form-group">
        <label for="exampleSelectd">Time<super class="req">*</super></label>
        <div class="input-group input-group-solid date">
         <input type="time" name="time" class="form-control form-control-solid" placeholder="Select date &amp; time" value="{{$repeat_session->start_time}}" />
        
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
             @for($i=15; $i<=60; $i=$i+5)
              <option value="{{$i}}" {{$i==$repeat_session->session_duration?'selected':''}}>{{$i}}</option>
             @endfor
       </select>
      </div>
     </div>
      <div class="col-sm-6" id="payment_rate_div">
       <div class="form-group">
        <label for="exampleSelectd">Payment Overview<super class="req"></super></label>
        <input type="number" min="0.00" id="payment_rate" name="payment_rate" class="form-control" value="{{$repeat_session->payment_rate}}" required>
      </div>
     </div>
    </div>
    @php $sp_days = $repeat_session->sp_holidays != NULL ? $repeat_session->sp_holidays : ''; @endphp
    <div class="row" id="sp_h_div">
      <div class="col-sm-6">
        <div class="form-group">
            <label for="lesson_id" style="font-size: 15px;font-weight: 500;">Holiday Date<super class="req">*</super></label><input id="holiday_checkbox" type="checkbox" style="margin: 0px 0px 0px 5px;" onclick="var s = this; if($(s).prop('checked')){ $(s).next().show('slow'); }else{ $(s).next().hide('slow'); }" {{$sp_days !='' ? 'checked' : ''}}>
          <div id="sp_holiday_cal" style="{{$sp_days =='' ? 'display:none' : ''}}"></div>
        </div>
      </div>
       <input type="hidden" name="sp_holiday" id="sp_holiday" value="{{$repeat_session->sp_holidays}}">
    </div>
   
    
   
          
          
              
             </div>
             <div class="card-footer">
              <button type="submit" class="btn btn-primary mr-2"  onclick="SetHoliday()">Submit</button>
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
       <script src="{{asset('public/js/mobiscroll.jquery.min.js')}}"></script>
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
               @if($sp_days)
                $("#sp_holiday_cal").mobiscroll('setVal', '{{$sp_days}}'.split(','));
               @endif


               $("#repeat_date_cal").mobiscroll().datepicker({
                   controls: ['calendar'],
                   display: 'inline',
                   rangeSelectMode: 'wizard',
                   select: 'range',
                   showRangeLabels: true,
                   returnFormat: 'iso8601'
               });

               $("#repeat_date_cal").mobiscroll('setVal', ["{{date('Y-m-d',strtotime($repeat_session->start_time))}}","{{date('Y-m-d',strtotime($repeat_session->end_date))}}"]);

           });

           function SetHoliday(){
            if($("#holiday_checkbox").prop('checked')){
              var holiday_val = $('#sp_holiday_cal').mobiscroll('getVal');
              $("#sp_holiday").val(holiday_val);
            }else{
              $("#sp_holiday").val('');
            }

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
            $("#end_date").val(strt_end_date[1]);
            $("#start_date").val(strt_end_date[0]);
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
        var grade_id = $(this).val();
        var school_id = $('#d_school').val();
       //  $('#district_school').html('Loading ...');
       
       $.ajax({
       type: "GET",
       url: "<?php echo url('ajax_laoding_data')?>?school_id="+school_id+"&action=get_multiple_students&grade_id="+grade_id,
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
       $(".start_date_datepicker").datepicker();
       function multipleGroupSelect(STU_GROUPS) {
         $('#kt_select2_9').select2({
             multiple: true,
             placeholder: "Select Students...",
             data: STU_GROUPS,
             query: function(options) {
                if(options.element==undefined){
                  return options.callback({ results: null });
                }
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
       var STU_GROUPS = [
           {
               id: '',
               text: 'All Student Group',
               children: [
                   @foreach($students as $student)
                    { id : '{{$student->id}}', text: '{{$student->first_name}}'},
                   @endforeach
               ]
           },
       ];
       $('#kt_select2_9').select2({
           multiple: true,
           placeholder: "Select Students...",
           data: STU_GROUPS,

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
       window.addEventListener("load",function(){
        $("#kt_select2_9").val("{{$repeat_session->student_ids}}").trigger("change");
       });
       /*End Student Group*/


       </script>
       @include('includes.payment_rate_js')
       @endsection