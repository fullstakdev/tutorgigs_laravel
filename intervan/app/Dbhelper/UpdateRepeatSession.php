<?php
namespace App\Dbhelper;

use Illuminate\Http\Request;
use App\Models\AssesmentRule;
use DB;
use App\Models\Session;
use App\Models\MainSessionRepeat;

class UpdateRepeatSession{

	private $request;
	private $validate_rule_1 = [
		'district' => 'required|integer',
		'master_school' => 'required|integer',
		'grade' => 'required|integer',
		'student' => 'required',
		'repeat_method' => 'nullable|integer',
		'certificate_required' => 'required',
		'start_date' => 'required',
		'time' => 'required',
		'duration' => 'required',
	];
	private $re_session;
	private $rule;

	public function __construct(Request $request, MainSessionRepeat $re_session=null){
		$request->validate($this->validate_rule_1);
		$this->request = $request;
		$this->re_session = $re_session;
		$this->rule = AssesmentRule::findOrFail($re_session->rule_id);
	}

	public function insert_with_repeat(){
		try{
			$this->inser_data_with_repeat['main_session_repeat_id'] = $this->re_session->id;
			$last_insert_session_id = DB::table('int_schools_x_sessions_log')->insertGetId($this->inser_data_with_repeat);
			$this->last_insert_session_id = $last_insert_session_id;
			return true;
		}catch(\Exception $e){
			$this->ex_error_msg = $e->getMessage();
			return false;
		}
	}


	public function save_data_with_student_per_session($data,$repeat_session=false){
		foreach($this->student_per_session_array as $studentids){
			$student_ids = implode(",",$studentids);
			if($repeat_session){
				$this->inser_data_with_repeat['student_ids'] = $student_ids;
				$status = $this->insert_with_repeat();
				$status = $this->insert_student_to_int_slots_x_student_teacher($student_ids);
			}else{
				$data['student_ids'] = $student_ids;
				$this->last_insert_session_id = $this->save_db("int_schools_x_sessions_log",$data);
				$status = $this->insert_student_to_int_slots_x_student_teacher($student_ids);
			}
			
		}
	}

    /*
		*Insert into int_slots_x_student_teacher table
    */
    public function insert_student_to_int_slots_x_student_teacher($student_ids){
    	$student_ids_array = explode(',',$student_ids);
    	try{
    		foreach($student_ids_array as $student_id){
	    		$school_id=$this->request->master_school;
	    		$student_row= DB::table('students')->where('id',$student_id)->first();
	    		if($student_row){
	    			$stu_name = $student_row->first_name;
	    			$student_board_url='stoped.com';
	    			$student_board_url='NA';# Not created
	    			$student_board_class=$get_class_id=9999;
	    			$teacher = 0;
	    			$today = date("Y-m-d H:i:s"); // 
	    			$insert_data = [
	    				'launchurl' => $student_board_url,
	    				'type' => 'intervention',
	    				'slot_id' => $this->last_insert_session_id,
	    				'student_id' => $student_id,
	    				'int_teacher_id' => $teacher,
	    				'int_school_id' => $school_id,
	    				'created_date' => $today,
	    				'quiz_id' => $this->quiz_id,
	    			];
	    			DB::table('int_slots_x_student_teacher')->insert($insert_data);
	    		}

	    	}

	    	return true;
    	}catch(\Exception $e){
    		$this->ex_error_msg = $e->getMessage();
    		return false;
    	}
    	
    }


    public function time_and_date(){
    	$selected_date= isset($this->request->start_date)?$this->request->start_date: date("Y-m-d"); 
    	$session_date_ymd=date('Y-m-d H:i:s', strtotime($selected_date));  // 2012-04-20
    	$hh_mm = explode(":",$this->request->time);
    	$start_time= date('Y-m-d H:i', strtotime('+' . $hh_mm[0] . 'hour +' . $hh_mm[1] . ' minutes', strtotime($session_date_ymd))); # add Hour, min.::session_start_time
    	$end_time= date('Y-m-d H:i', strtotime('+'.$this->request->duration.'minutes', strtotime($start_time)));
    	return [$start_time,$end_time];
    }


    public function prepare_data(){
    	list($start_time,$end_time) = $this->time_and_date();
    	$this->inser_data_with_repeat = [
    	    'Tutoring_client_id' => 'Intervene123456',
    	    'curr_active_board'  => 'MeritHub',
    	    'type' => 'intervention',
    	    'ses_start_time' => $start_time,
    	    'ses_end_time'   => $end_time,
    	    'session_duration' => $this->request->duration,
    	    'start_date' => $session_date_ymd,
    	    'school_id'  => $this->request->master_school,
    	    'lesson_id'  => isset($this->request->lessons)?$this->request->lessons:0,
    	    'quiz_id'    => $this->quiz_id,
    	    'grade_common' => $this->request->grade,
    	    'grade_id' =>  $this->request->grade,
    	    'district_id' =>  $this->request->district,
    	    'bilingual_test' => (int)$this->request->certificate_required==1?1:0,
    	    'certificate' => (int)$this->request->certificate_required==1?1:0,
    	    'student_ids' => $this->request->student,
    	];
    }

    public function prepare_with_repeat_and_insert($interval=1,$weekday=false,$monthly=false,$yearly=false){
    	if($weekday){
    		$days = ["Monday"=> 1,"Tuesday"=>1,"Wednesday"=>1,"Thursday"=>1,"Friday"=>1];
    	}else{
    		$days = $this->request->days;
    	}

    	$begin = new \DateTime(date("Y-m-d",strtotime($this->request->start_date)));
    	$end = new \DateTime(date("Y-m-d",strtotime($this->request->end_date)));
    	if($monthly){
    		$interval = \DateInterval::createFromDateString('1 month');
    	}elseif($yearly){
    		$interval = \DateInterval::createFromDateString('1 year');
    	}else{
    		$interval = \DateInterval::createFromDateString($interval.' day');
    	}
    	$period = new \DatePeriod($begin, $interval, $end);
    	$lesson_count=0;
    	foreach ($period as $dt) {
    		if(!$this->rule){
    			return redirect()->back()->withError('Something went wrong please try again letter...');
    		}
    		
    		if(array_key_exists($dt->format("l"),$days) || ($monthly) || ($yearly)){
    			$lesson_ids = explode(',',$this->rule->lesson_ids);
    			$lesson_id = $lesson_ids[$lesson_count];
    			$lesson_count++;
    			if($lesson_count==count($lesson_ids)){
    				$lesson_count = 0;
    			}
    			$this->inser_data_with_repeat['lesson_id'] =$lesson_id;
    			/***/
    			$session_date_ymd=$dt->format("Y-m-d H:i");  // 2012-04-20
    			$hh_mm = explode(":",$this->request->time);
    			$start_time= date('Y-m-d H:i', strtotime('+' . $hh_mm[0] . 'hour +' . $hh_mm[1] . ' minutes', strtotime($session_date_ymd))); # add Hour, min.::session_start_time
    			$end_time= date('Y-m-d H:i', strtotime('+'.$this->request->duration.'minutes', strtotime($start_time)));
    			/***/
    			$this->inser_data_with_repeat['ses_start_time'] =$start_time;
    			$this->inser_data_with_repeat['ses_end_time'] =$end_time;
    			$this->inser_data_with_repeat['start_date'] = $dt->format("Y-m-d H:i:s");
    			if($this->student_per_session){
    				//$this->inser_data_with_repeat
    				$this->save_data_with_student_per_session($this->inser_data_with_repeat,true);
    			}else{
    				$status = $this->insert_with_repeat();
    				$status = $this->insert_student_to_int_slots_x_student_teacher($this->request->student);
    			}
    			
    		}
    	}
    }


    public function prepare_data_with_repeat_types(){
    	switch ($this->request->repeat_type) {
    		case 'weekly':
    			$this->prepare_with_repeat_and_insert(1);
    			// code...
    			break;
    		case 'week_days':
    			$this->prepare_with_repeat_and_insert(1,true);
    			// code...
    			break;
    		case '2_week':
    			$this->prepare_with_repeat_and_insert(14);
    			// code...
    			break;
    		case '3_week':
    			$this->prepare_with_repeat_and_insert(21);
    			// code...
    			break;
    		case 'month':
    			$this->prepare_with_repeat_and_insert(1,false,true);
    			// code...
    			break;
    		case 'year':
    			$this->prepare_with_repeat_and_insert(365,false,false,true);
    			// code...
    			break;
    		
    		default:
    			// code...
    			break;
    	}
    }
    public function save_with_repeat(){
    	dd("ok");
    	$this->prepare_data_with_repeat();
    	$this->prepare_data_with_repeat_types();
    }

}