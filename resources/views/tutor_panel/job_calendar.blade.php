@extends('template.tutor_container')
@section('css')
<link href="{{asset('tutor_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<style>
    .table th, .table td {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #EBEDF3;
    border-right: 1px solid;
    text-align: center;
    }
</style>
@endsection
@section('content')

<?php

 $month = date('m'); $year =date('Y');
 $fdate = date('Y-m-1');
 @extract($_GET); @extract($_POST);
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
    $tutor_id  = Auth::guard('tutor')->user()->id;
     
    for($i=$start_time; $i<$end_time; $i+=86400)
    {
        $list2[] = date('Y-m-d-D', $i);
        $getdate =  date('Y-m-d', $i);
        $dayval  =  date('d', $i);$dayval= intval($dayval);
        $end_date = $getdate." 23:59:59.999";
        $results = DB::table('int_schools_x_sessions_log')->whereIn('tut_teacher_id',array(0,$tutor_id))->whereBetween('ses_start_time',array($getdate,$end_date))->orderBy('ses_start_time', 'asc');
        
        $tot_ses = 0;
        $tot_ses = $results->count('id');
        $results = $results->get();
        $slot_str = '';$k = 1;
        $curr_time = date("Y-m-d"); 
        
        foreach( $results as $row)
        {
            $in_sec = strtotime($row->ses_start_time) - strtotime($curr_date);  
            $sesid  = $row->id;
            $duration = $row->session_duration;
            $grade = DB::table('terms')->where('id', $row->grade_id)->first();
            $old_end = date("h:i a", strtotime($row->ses_start_time)).' -CST <br />'.$grade->name.'<br />'.$duration ." min";
            $hotimage = NULL;
            if($row->tut_teacher_id == 0 && $in_sec > 0 && $in_sec < 172800){
               echo  $hotimage = '<img alt="Hot Job" style=" height:25px;" title="Hot Job" src="'.asset('tutor_assets').'/hot-job.png">';
            }
            
            $lesson_det = DB::table('master_lessons')->where('id', $row->lesson_id)->first();
            $lession = "Lesson: ".$lesson_det->name ;
            $str_class = ($row->tut_teacher_id > 0) ? "btn btn-success btn-xs" : "btn btn-danger btn-xs";
            $str_title = ($row->tut_teacher_id > 0) ? "Assigned to me":"Teacher, pendng to assign";
            $style = 'margin:1% 0;';
            
            if($row->tut_teacher_id == 0)
            { 
              $str_class = "btn btn-default btn-xs";
              $str_title = "Not claimed yet. ".$lession;
              $style = 'margin-bottom:7px;background-color:orange; border:orange;color: #fff;';
              $url   = route('job_board')."?id=".$sesid;
              if($in_sec < 0){  
                $url = "javascript:void(0);";
                $str_title = "Job Expired. ".$lession;
                $style = 'margin:1% 0;  background-color:#333; border:#333;color: #fff;text-decoration: line-through;';
              }
          
          }elseif($row->tut_teacher_id > 0){
              $str_class = "btn btn-success btn-xs ";
              $style = 'margin-bottom:7px;background-color:#449d44; border-color:#398439;';
              $str_title = "Job Claimed by you. ".$lession; 
              $url = route('tutor_sessions')."?id=".$sesid;
    
          }
          
          if(!empty($row->bilingual_test) && empty($row->certificate))
            $test_name = 'Bilibgual Spanish';
          else if(empty($row->bilingual_test) && !empty($row->certificate))
          {
            if($row->certificate == 2)
                $test_name = 'Teacher Certificate';
            else if($row->certificate == 3)
                $test_name = 'ESL Certificate';
            else if($row->certificate == 4)
                $test_name = 'Bilingual Certificate';
        }
        else
           $test_name = ''; 
        
        
        if(!empty($row->bilingual_test) && empty($row->certificate))
            $test_name = 'Bilibgual Spanish';
        else if(empty($row->bilingual_test) && !empty($row->certificate))
        {
           if($row->certificate == 2)
                $test_name = 'Teacher Certificate';
            else if($row->certificate == 3)
                $test_name = 'ESL Certificate';
            else if($row->certificate == 4)
                $test_name = 'Bilingual Certificate';
        }
        else
           $test_name = ''; 
        
        if($row->add_observer == 1)
            $observer = '<span class="label label-default label-inline font-weight-lighter mr-2 mb-2" >added as observer</span>';
        else
            $observer = '';
        
          $slot_str.=$hotimage.'<a  title="'.$str_title.'" href="'.$url.'" style="'.$style.'" '
                            . '  class="'.$str_class.'">'.$old_end.'<br>'.$test_name.'</a><br/>'.$observer;#1
         $k++;
            
        }
        
         $date_ses[$dayval]=$slot_str;
    }
    
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
       foreach ($calendar_array[$month] as $month=>$week) {
         $res .= '<tr>';
         foreach ($week as $day) {
       
          $sesinfo = ($day>0) ? $date_ses[$day] : NULL;
          $res .= '<td style="text-align: center;border-right: 1px solid;width:14% !important;max-width:14% !important;height:100px" bgcolor="#ffffff">' . ($day ? $day : '&nbsp;') . '<br/>'.$sesinfo.'</td>';
        }
        $res .= '</tr>';
      }
       $res .= '</table>';
       return $res;
    }
    
    $calarr = year2array($year);$month= intval($month);
    
?>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Heading-->
									<div class="d-flex flex-column">
										<!--begin::Title-->
										<h2 class="text-white font-weight-bold my-2 mr-5">Job Board Calendar</h2>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<div class="d-flex align-items-center font-weight-bold my-2">
											<!--begin::Item-->
											<a href="#" class="opacity-75 hover-opacity-100">
												<i class="flaticon2-shelter text-white icon-1x"></i>
											</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Home</a>
											<!--end::Item-->
											<!--begin::Item-->
											<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
											<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
											<!--end::Item-->
										</div>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Info-->
								
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								
								 <form id="" class="" action="" method="get">
								<div class="card card-custom">
									<div class="card-header">
										<div class="card-title">
											<h3 class="card-label">Job Board Calendar</h3>
										</div>
                                                                            <h3 class="text-danger text-center mt-8"> <?=date('F, Y', strtotime($fdate));?></h3>
										<h3 class="text-danger text-right mt-5">
                                                                                    
                                                                                    <div class="btn-group" role="group" aria-label="Basic example">
    <button type="submit" class="btn btn-outline-secondary" name="premonth" value="<?=$preMonth?>"> << Prev</button>
    <button type="submit" class="btn btn-outline-secondary">Current</button>
    <button type="submit" class="btn btn-outline-secondary" name="nextmonth" value="<?=$nxtMonth?>">Next >></button>
</div>
                  
               
               </h3>
									</div>
									<div class="card-body">
                                                                            <div >
                                                                                
                                                                               
                                
                          	
                            <div class="table-responsive">
                                
                               
                  
                                
                            </div>
                               
                          
                                        
                                        
                                        
					<div class="clear">
						
							
				<?php	echo month2table($month, $calarr,$date_ses); ?>
						
                            
						<div class="clearnone">&nbsp;</div>
					</div>		<!-- /.ct_display -->
                                        
				
                                                                            </div>
									</div>
								</div>
								</form>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					@endsection
                                        @section('js')
                                        <script src="{{asset('tutor_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('tutor_assets/js/pages/features/calendar/basic.js')}}"></script>
                                        @endsection