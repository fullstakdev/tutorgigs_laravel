@extends('template.container')
@section('css')
<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<?php
$holidays = \App\Models\Holiday::all();
$holidays_day = [];
foreach($holidays as $h){
    $holidays_day[$h->holiday_date] = $h->holiday_title;
}
$GLOBALS['holidays_day'] = $holidays_day;
$month = date('m'); $year =date('Y');
$fdate = date('Y-m-1');
@extract($_GET); @extract($_POST);
 $district_wise_school_list =  DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
        ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();
$schools = [];
$grades = [];

$results = DB::table('launch_ses_log')->get();
$arr=[];
foreach( $results as $row){
$arr[] = $row->tutoring_id;
}

$arr_launched_tutoring_ids = $arr;

if(isset($nextmonth))
{
$fdate = $nextmonth;
$year = date('Y', strtotime($fdate));
$month = date('m', strtotime($fdate));

}
elseif(isset($premonth))
{
$fdate = $premonth;
$year = date('Y', strtotime($fdate));
$month = date('m', strtotime($fdate));

}

$start_date = "01-".$month."-".$year;
$start_time = strtotime($start_date);
$end_time   = strtotime("+1 month", $start_time);
$date_ses = array();

$currMonth = date('Y-m-1');
$nxtMonth = date('Y-m-d', strtotime("+1 months", strtotime($currMonth)));
$preMonth = date('Y-m-d', strtotime("-1 months", strtotime($currMonth)));

if(isset($nextmonth)&&!empty($nextmonth))
{
$currMonth = $nextmonth;
$preMonth  = $nextmonth;
$preMonth  = date('Y-m-d', strtotime("-1 months", strtotime($currMonth)));
$nxtMonth  = date('Y-m-d', strtotime("+1 months", strtotime($currMonth)));
}
elseif(isset($premonth))
{

$currMonth = $premonth;
$preMonth  = date('Y-m-d', strtotime("-1 months", strtotime($currMonth)));
$nxtMonth  = date('Y-m-d', strtotime("+1 months", strtotime($currMonth)));
}

$year3 = date('Y', strtotime($fdate));
$month22 = date('M', strtotime($fdate));


$curr_time = date("Y-m-d H:i:s");
$curr_date = date("Y-m-d");


for($i=$start_time; $i<$end_time; $i+=86400)
{
    $list2[] = date('Y-m-d-D', $i);
    $getdate =  date('Y-m-d', $i);
    $dayval  =  date('d', $i);$dayval= intval($dayval);
    $end_date = $getdate." 23:59:59.999";
    $results = DB::table('int_schools_x_sessions_log')->whereBetween('ses_start_time',array($getdate,$end_date))->orderBy('ses_start_time', 'asc');
    if(request()->get('district')){
       $schools =  DB::table('schools')->where('district_id', request()->get('district'))->orderBy('SchoolName', 'ASC')->get();
       $results = $results->where('district_id',request()->get('district'));
    }
    if(request()->get('school')){
        $grades = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', request()->get('school'))->get();
        $results = $results->where('school_id',request()->get('school'));
    }
    if(request()->get('grade')){
         $results = $results->where('grade_id',request()->get('grade'));
    }
    $assesments_days = DB::table('repeat_session_assesment_days')->whereBetween('assesment_date',array($getdate,$end_date))->orderBy('assesment_date', 'asc')->get();
    $tot_ses = 0;
    $tot_ses = $results->count('id');
    $results = $results->get();
    $slot_str = '';$k = 1;
    $curr_time = date("Y-m-d");

    foreach( $results as $row)
    {
        $in_sec = strtotime($row->ses_start_time) - strtotime($curr_date);

        if($row->tut_teacher_id == 0)

        $det = \App\Models\Tutor::find($row->tut_teacher_id);
        $tutor_name = (!empty($det->f_name)) ? $det->f_name." ".$det->lname:"Na";
        $det = DB::table('schools')->where('SchoolId', $row->school_id)->first();
        $scool_name = (!empty($det->SchoolName))?$det->SchoolName:"Na";
        $quiz = DB::table('int_quiz')->where('id', $row->quiz_id)->first();
        $quiz_name = (!empty($quiz->objective_name)) ? $quiz->objective_name : "Na";


        $sesid  = $row->id;
        $lesson_det = DB::table('master_lessons')->where('id', $row->lesson_id)->first();
        $lession = "Lesson: ".$lesson_det->name ;
        $old_end = date("h:i a", strtotime($row->ses_start_time)).'-CST';
        $str_class = ($row->tut_teacher_id > 0) ? "btn btn-success btn-xs" : "btn btn-danger btn-xs";
        $str_title = "Tutor:$tutor_name, School:$scool_name, Objective:$quiz_name Lesson: ".$lesson_det->name;
        $style = 'margin:1% 0;';

        if($row->tut_teacher_id > 0 && $row->tut_status == "STU_ASSIGNED")
        {
        $str_class = "btn btn-success btn-xs has-tutor-not-launched";
        }elseif($row->tut_teacher_id == 0){
        $str_class = "btn btn-danger btn-xs not-tutor";

        }elseif($row->tut_teacher_id > 0 && $row->tut_status == "ASSIGNED"){
        $str_class = "btn btn-default btn-xs has-tutor";
        $style = 'margin:1% 0;background-color: yellow;border-color:yellow;';

        if(in_array($row->id, $arr_launched_tutoring_ids))
        {
        $style = 'margin:1% 0;background-color:green;border-color:green;color:#fff;font-weight:bold;';
        $str_class = "btn btn-success btn-xs has-launched";
        }
        }

        $slot_str.='<a title="'.$str_title.'" style="'.$style.';padding:4px;font-size:11px"  href="'.url('session/details').'/'.$sesid.'"   class="'.$str_class.'">'.$old_end.'</a>&nbsp;<i style="cursor:pointer;" onclick="session_details('.$sesid.')" class="flaticon-eye text-info"></i><br/>';
        $k++;

    }

    // if($tot_ses > 0)
    // {
    // $slot_str .= '<a href="day_session_list.php?start_date='.$getdate.'"  style="text-align:center"><strong>+Observer</strong></a>';

    // }
    foreach($assesments_days as $as_day){
        $slot_str.='<a title="Assesment Day" style="background:#2332de; padding:4px;font-size:11px;color:#fff;"  href="javaScript:;"   class="btn btn-prima btn-xs has-launched">Assesment-'.$as_day->assesment_date.'</a>&nbsp;<i style="cursor:pointer;" onclick="assesment_details('.$as_day->id.')" class="flaticon-eye text-info"></i><br/>';
    }
    $date_ses[$dayval]=$slot_str;
}
$c_year = $year;
$GLOBALS['c_year'] = $c_year;

function year2array($year)
{
    $res = $year >= 1970;
    if ($res)
    {

    date_default_timezone_set(date_default_timezone_get());
    $dt = strtotime("-1 day", strtotime("$year-01-01 00:00:00"));
    $res = array();
    $week = array_fill(1, 7, false);
    $last_month = 1;
    $w = 1;
    do {
    $dt = strtotime('+1 day', $dt);
    $dta = getdate($dt);
    $wday = $dta['wday'] == 0 ? 7 : $dta['wday'];
    if (($dta['mon'] != $last_month) || ($wday == 1)) {
    if ($week[1] || $week[7]) $res[$last_month][] = $week;
    $week = array_fill(1, 7, false);
    $last_month = $dta['mon'];
    }
    $week[$wday] = $dta['mday'];
    }
    while ($dta['year'] == $year);
    }
    return $res;
}


function month2table($month, $calendar_array,$date_ses) {
$ca = 'align="center;width:14% !important;max-width:14% !important"';
$res = "<table class=\"table table-hover\" cellpadding=\"2\" cellspacing=\"1\" style=\"border:solid 1px #000000;font-family:tahoma;font-size:12px;background-color:#ababab\"><tr><td $ca>Mo</td><td $ca>Tu</td><td $ca>We</td><td $ca>Th</td><td $ca>Fr</td><td $ca>Sa</td><td $ca>Su</td></tr>";
$c_mon = $month < 10 ? '0'.$month : $month ;
foreach ($calendar_array[$month] as $month=>$week) {
$res .= '<tr>';
    foreach ($week as $day) {
    
    $sesinfo = ($day>0) ? $date_ses[$day] : NULL;
    $cday = $day < 10 ? '0'.$day : $day;
    $c_date = $GLOBALS['c_year'].'-'.$c_mon.'-'.$cday;
    if(array_key_exists($c_date,$GLOBALS['holidays_day'])){
        $background = 'background:#ffeb3b;';
        $title = $GLOBALS['holidays_day'][$c_date];
    }else{
        $background = '';
        $title = '';
    }
    $res .= '<td style="text-align: center;border-right: 1px solid;width:14% !important;max-width:14% !important;height:100px;'.$background.'" bgcolor="#ffffff">' . ($day ? $day : '&nbsp;') . '<br/>'.$sesinfo.$title.'</td>';
    }
$res .= '</tr>';
}
$res .= '</table>';
return $res;
}

$calarr = year2array($year);$month= intval($month);

?>
<div class="d-flex flex-column-fluid" style="margin-top: 2%">
<!--begin::Container-->
<div class="container">
    
    
    <form id="" class="" action="" method="get">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Sessions Calendar</h3>
                </div>
                <h3 class="text-danger text-center mt-8"> <?=date('F, Y', strtotime($fdate));?></h3>
                <h3 class="text-danger text-right mt-5">
                 
                <table class="table-responsive" style="margin-bottom:5px;">
                  <tbody style="float:right;">
                    <tr>
                      <td><a href="{{url('session/list')}}" class="btn btn-primary">List View</a></td>
                    </tr>
                  </tbody>
                </table>

                <div class="btn-group" role="group" aria-label="Basic example">
                    @include('includes.session_filter')
                    <button type="submit" class="btn btn-outline-secondary" name="premonth" value="<?=$preMonth?>"> << Prev</button>
                    <button type="submit" class="btn btn-outline-secondary">Current</button>
                    <button type="submit" class="btn btn-outline-secondary" name="nextmonth" value="<?=$nxtMonth?>">Next >></button>
                </div>
                </h3>
            </div>
            <div class="card-body">
                <div class="clear">
                    
                    
                    <?php   echo month2table($month, $calarr,$date_ses); ?>
                    
                    
                    <div class="clearnone">&nbsp;</div>
                </div>
            </div>
        </div>
    </form>
    
</div>
<!--end::Container-->
</div>
<div class="modal fade" id="session_details_modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Session Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
            </button>
        </div>
        <div class="modal-body" id="session_details_body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            
        </div>
    </div>
</div>
</div>
<!--end::Content-->
@endsection
@section('js')
<!-- <script src="{{asset('tutor_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script> -->
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<!-- <script src="{{asset('tutor_assets/js/pages/features/calendar/basic.js')}}"></script> -->

<script>
function session_details(ses_id) {

    $.ajax({

        type:'GET',

        url:"<?php echo url('session_details');?>/"+ses_id,
        success:function(data){
            $('#session_details_body').html(data);
            $('#session_details_modal').modal('show');
        }
    });
}

function assesment_details(as_id) {

    $.ajax({

        type:'GET',

        url:"<?php echo url('view-assesment-details');?>/"+as_id,
        success:function(data){
            $('#session_details_body').html(data);
            $('#session_details_modal').modal('show');
        }
    });
}

</script>
@include('includes.distric_school_js')
@endsection