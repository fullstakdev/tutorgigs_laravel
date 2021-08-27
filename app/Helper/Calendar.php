<?php
namespace App\Helper;
use App\Models\Session;
class Calendar {  
     
    
     
    /********************* PROPERTY ********************/  
    private $dayLabels = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
     
    private $currentYear=0;
     
    private $currentMonth=0;
     
    private $currentDay=0;
     
    private $currentDate=null;
     
    private $daysInMonth=0;
     
    private $naviHref= null;

    private $month=null;

    private $year = null;
    
    private $sessions = false;

    private $end_date = null;
    private $start_date = null;
    /**
     * Constructor
     */
    public function __construct($repeat_session_id,$start_date=null,$end_date=null){     
        $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
        $this->sessions = Session::where('main_session_repeat_id',$repeat_session_id)->where('tut_teacher_id', 0)->whereNull('add_observer')->where('ses_start_time', '>' , date("Y-m-d H:i:s"))->with('Lesson')->get()->toArray();
        $this->sessions  = $this->setDateKey($this->sessions);
        $this->end_date = $end_date;
        $this->start_date = $start_date;

    }


    /********************* PUBLIC **********************/  
        
    /**
    * print out the calendar
    */
    public function show($mmonth=false,$yyear=false,$d=false) {
        $year  = null;
         
        $month = null;
         
        if(null==$year && ($yyear !=false)){
 
            $year = $yyear;
         
        }else if(null==$year){
 
            $year = date("Y",time());  
         
        }          
         
        if(null==$month && ($mmonth !=false)){
 
            $month = $mmonth;
         
        }else if(null==$month){
 
            $month = date("m",time());
         
        }                  
         
        $this->currentYear=$year;
         
        $this->currentMonth=$month;
         
        $this->daysInMonth=$this->_daysInMonth($month,$year);  
        $style = $d != false ? 'style="display:none"':'';
        $content='<div class="calendar" '.$style.'>'.
                        '<div class="box">'.
                        $this->_createNavi().
                        '</div>'.
                        '<div class="box-content">'.
                                '<ul class="label">'.$this->_createLabels().'</ul>';   
                                $content.='<div class="clear"></div>';     
                                $content.='<ul class="dates">';    
                                 
                                $weeksInMonth = $this->_weeksInMonth($month,$year);
                                // Create weeks in a month
                                for( $i=0; $i<$weeksInMonth; $i++ ){
                                     
                                    //Create days in a week
                                    for($j=1;$j<=7;$j++){
                                        $content.=$this->_showDay($i*7+$j);
                                    }
                                }
                                 
                                $content.='</ul>';
                                 
                                $content.='<div class="clear"></div>';     
             
                        $content.='</div>';
                 
        $content.='</div>';
        return $content;   
    }
     
    /********************* PRIVATE **********************/ 
    /**
    * create the li element for ul
    */
    private function _showDay($cellNumber){
         
        if($this->currentDay==0){
             
            $firstDayOfTheWeek = date('N',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
                     
            if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                 
                $this->currentDay=1;
                 
            }
        }
         
        if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
             
            $this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay)));
             
            $cellContent = $this->currentDay;
             
            $this->currentDay++;   
             
        }else{
             
            $this->currentDate =null;
 
            $cellContent=null;
        }
         //dd($this->currentDate);
         $session_data ='';
         $style2 = '';
        if(isset($this->sessions[$this->currentDate])){
            $d = $this->sessions[$this->currentDate];
            $lesson = strlen($d['lesson']['name']) > 8 ? substr($d['lesson']['name'],0,8).'..' : $d['lesson']['name'];
            $session_data .= '<span class="chk_session_d"><input class="chkbox_ses" type="checkbox" value="'.$d['id'].'"></span>';
            $session_data .= '<span class="sessions_d" style="background_color:#3f51b5">';
            $session_data .= $lesson;//date('Y-m-d',strtotime($d['start_date']));
            $session_data .= '</span>';
            $style2 = 'style="position: absolute;bottom: 10px;left: 28px;"';
        }
        return '<li id="li-'.$this->currentDate.'" class="li_cl_d '.($cellNumber%7==1?' start ':($cellNumber%7==0?' end ':' ')).
                ($cellContent==null?'mask':'').'">'.$session_data.'<p '.$style2.'>'.$cellContent.'</p>'.'</li>';
    }
     
    /**
    * create navigation
    */
    private function _createNavi(){
         
        $nextMonth = $this->currentMonth==12?1:intval($this->currentMonth)+1;
         
        $nextYear = $this->currentMonth==12?intval($this->currentYear)+1:$this->currentYear;
         
        $preMonth = $this->currentMonth==1?12:intval($this->currentMonth)-1;
         
        $preYear = $this->currentMonth==1?intval($this->currentYear)-1:$this->currentYear;
         
        return
            '<div class="header">'.
                '<a class="prev" href="javaScript:;" onclick="prevCal()">Prev</a>'.
                    '<span style="margin-left:40%" class="title">'.date('Y M',strtotime($this->currentYear.'-'.$this->currentMonth.'-1')).'</span>'.
                '<a class="next" href="javaScript:;" onclick="nextCal()">Next</a>'.
            '</div>';
    }
         
    /**
    * create calendar week labels
    */
    private function _createLabels(){  
                 
        $content='';
         
        foreach($this->dayLabels as $index=>$label){
             
            $content.='<li class="'.($label==6?'end title':'start title').' title">'.$label.'</li>';
 
        }
         
        return $content;
    }
     
     
     
    /**
    * calculate number of weeks in a particular month
    */
    private function _weeksInMonth($month=null,$year=null){
         
        if( null==($year) ) {
            $year =  date("Y",time()); 
        }
         
        if(null==($month)) {
            $month = date("m",time());
        }
         
        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month,$year);
         
        $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
         
        $monthEndingDay= date('N',strtotime($year.'-'.$month.'-'.$daysInMonths));
         
        $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
         
        if($monthEndingDay<$monthStartDay){
             
            $numOfweeks++;
         
        }
         
        return $numOfweeks;
    }
 
    /**
    * calculate number of days in a particular month
    */
    private function _daysInMonth($month=null,$year=null){
         
        if(null==($year))
            $year =  date("Y",time()); 
 
        if(null==($month))
            $month = date("m",time());
             
        return date('t',strtotime($year.'-'.$month.'-01'));
    }


    public function setMonth($month){
        $this->month = $month;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function setDateKey(array $data){
        $new_array = [];
        foreach($data as $v){
            $date = date('Y-m-d',strtotime($v['start_date']));
            $new_array[$date] = $v;

        }
        return $new_array;
    }

    public function showCal(){
        // return $this->show();
        $data = '';
        $c=1;
        $start = $month = strtotime(date('Y-m'),strtotime($this->start_date));
        $end = strtotime($this->end_date);
        while($month <= $end)
        {
             $smonth = date('m', $month);
             $sYear = date('Y', $month);
             $month = strtotime("+1 month", $month);
             $d= $c==1?false:true;
             $this->currentDay = 0;
             $data .= $this->show($smonth,$sYear,$d);
             $c++;
        }
        return $data;
    }
     
}