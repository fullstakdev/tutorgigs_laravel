<?php
namespace App\Dbhelper;
use Illuminate\Http\Request;
use App\Models\AssesmentRule;
use DB;
use App\Models\Session;
use App\Models\MainSessionRepeat;
use App\Models\Holiday;
use App\Models\RepeatSessionAssesmentDay;
class CreateSession{
	private $request;
	private $last_insert_session_id;
	private $ex_error_msg = '';
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
                'payment_rate' => 'required',
            ];

    private $validate_rule_2 = [
    	'repeat_type' => 'required',
    	'end_date'	  => 'required',
    	'rule_id'	  => 'required',
    ];
    private $validate_rule_3 = ['days'=> 'required'];
    private $inser_data_without_repeat = [
                'Tutoring_client_id' => '',
                'curr_active_board'  => '',
                'type' => '',
                'ses_start_time' => '',
                'ses_end_time'   => '',
                'session_duration' =>'',
                'start_date' => '',
                'school_id'  => '',
                'lesson_id'  => '',
                'quiz_id'    => 0,
                'grade_common' => '',
                'grade_id' =>  '',
                'district_id' =>'',
                'bilingual_test' =>'',
                'certificate' => '',
                'student_ids' => '',
            ];

    private $inser_data_without_repeat_map;
    private $inser_data_with_repeat;
    private $quiz_id = 0;
    private $rule = false;

    private $main_session_repeat = false;
    private $main_session_repeat_id = null;
    private $student_per_session= false;
    private $student_per_session_array;
    private $re_session;
    private $assesment_day = false;
    private $sp_holidays =  false;
    public function __construct(Request $request, MainSessionRepeat $re_session=null){
    	$this->request = $request;
    	$request->validate($this->validate_rule_1);
    	//Check Repeat Type and validate request

    	if($request->repeat_method==1 || $re_session != null){
    		$request->validate($this->validate_rule_2);
    		if($request->repeat_type=="weekly"){
    			$request->validate($this->validate_rule_3);	
    		}
    		if(isset($request->sp_holiday)){
    			$this->sp_holidays = explode(',',$request->sp_holiday);
    		}
    		$this->rule = $this->getRule();
    		$this->assesment_day = isset($request->assesment_day)?$request->assesment_day:false;
    		if($re_session){
    			$this->re_session = $re_session;
    			$this->main_session_repeat_id = $re_session->id;
    			$this->main_session_repeat = true;
    		}
    		 //AssesmentRule::find($request->rules);
    	}

    	if(isset($request->lessons) && !empty($request->lessons)){
    		$quiz = DB::table('int_quiz')->where('lesson_id',$request->lessons)->first();
    		if($quiz){ $this->quiz_id = $quiz->id; }
    	}
    	if(isset($request->students_per_session)){
    		$this->student_per_session = $request->students_per_session;
    		$this->student_per_session_array =array_chunk(explode(',',$request->student),$request->students_per_session);
    	}
    }

    /**
	 *@param $data array
    */
    public function insert_data_without_repeat($data){
    	foreach($data as $k => $v){
    		$this->inser_data_without_repeat[$k] = $v;
    	}
    	try{
    		$last_insert_session_id = DB::table('int_schools_x_sessions_log')->insertGetId($this->inser_data_without_repeat);

    		$this->last_insert_session_id = $last_insert_session_id;
    		return true;
    	}catch (\Exception $e){
    		$this->ex_error_msg = $e->getMessage();
    		return false;
    	}
    }

    /*
		*Save data inser_data_without_repeat_map
		*Get Data From $request
    */
    public function map_inser_without_reapet(){
    	 $selected_date= isset($this->request->start_date)?$this->request->start_date: date("Y-m-d"); 
    	 $session_date_ymd=date('Y-m-d H:i:s', strtotime($selected_date));  // 2012-04-20
    	 $hh_mm = explode(":",$this->request->time);
    	 $start_time= date('Y-m-d H:i', strtotime('+' . $hh_mm[0] . 'hour +' . $hh_mm[1] . ' minutes', strtotime($session_date_ymd))); # add Hour, min.::session_start_time
    	 $end_time= date('Y-m-d H:i', strtotime('+'.$this->request->duration.'minutes', strtotime($start_time)));
    	$this->inser_data_without_repeat_map = [
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
    	    'payment_rate' => $this->request->payment_rate,
    	];
    	return $this;
    }

    /*
		* Insert Data into int_schools_x_sessions_log table
    */
    public function map_insert(){
    	try{
    		$last_insert_session_id = DB::table('int_schools_x_sessions_log')->insertGetId($this->inser_data_without_repeat_map);
    		$this->last_insert_session_id = $last_insert_session_id;
    		return true;
    	}catch(\Exception $e){
    		$this->ex_error_msg = $e->getMessage();
    		return false;
    	}
    }
    /*
		*Get last inserted session id
    */
    public function get_last_insert_session_id(){
    	return $this->last_insert_session_id;
    }
    /*
		*Get Exception error
    */
    public function get_ex_error_msg(){
    	return $this->ex_error_msg;
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


    /*
		*Prepare Data with Repeat Type.
    */

	public function prepare_data_with_repeat(){
		$obj = $this->map_inser_without_reapet();
		$this->inser_data_with_repeat = $this->inser_data_without_repeat_map;
		$this->save_in_array($this->inser_data_with_repeat,['repeat_type'=>$this->request->repeat_type,'repeat_end_date' => date('Y-m-d H:i:s', strtotime($this->request->end_date))]);


	}

	public function save_in_array(&$array_in_save,$array_to_save){
		foreach($array_to_save as $k => $v){
			$array_in_save[$k] = $v;
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
		$this->prepare_data_with_repeat();
		$this->prepare_data_with_repeat_types();
	}

	public function prepare_with_repeat_and_insert($interval=1,$weekday=false,$monthly=false,$yearly=false){
		if($weekday){
			$days = ["Monday"=> 1,"Tuesday"=>1,"Wednesday"=>1,"Thursday"=>1,"Friday"=>1];
		}else{
			$days = $this->request->days;
		}

		$begin = new \DateTime(date("Y-m-d",strtotime($this->request->start_date)));
		$end = new \DateTime(date("Y-m-d",strtotime($this->request->end_date)));
		$end = $end->modify('+1 day');
		if($monthly){
			$interval = \DateInterval::createFromDateString('1 month');
		}elseif($yearly){
			$interval = \DateInterval::createFromDateString('1 year');
		}else{
			$interval = \DateInterval::createFromDateString($interval.' day');
		}
		$period = new \DatePeriod($begin, $interval, $end);
		$lesson_count=0;
		$assement_count=1;
		foreach ($period as $dt) {
			if(!$this->rule){
				return redirect()->back()->withError('Something went wrong please try again letter...');
			}
			$holidays = $this->get_holidays();
			if($this->sp_holidays && ($dt->format("Y-m-d") >= $this->sp_holidays[0]) && ($dt->format("Y-m-d") <= $this->sp_holidays[1])){
				continue;
			}
			if(!in_array($dt->format("Y-m-d"),$holidays)){
			
				if(array_key_exists($dt->format("l"),$days) || ($monthly) || ($yearly)){
					if($this->assesment_day>0 && $assement_count==$this->assesment_day){
						$assement_count=1;
						$as_data = [
							'prev_session_id' =>$this->last_insert_session_id,
							'repeat_session_id' => $this->main_session_repeat_id,
							'assesment_date'=>$dt->format("Y-m-d"),
							'assesment_day'  => $this->assesment_day,
							'd_id' => $this->request->district,
							's_id' => $this->request->master_school,
							'g_id' => $this->request->grade,
							'st_ids' => $this->request->student
						];

						RepeatSessionAssesmentDay::create($as_data);
						continue;

					}
					$assement_count++;
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
	}


	public function insert_with_repeat(){
		try{
			if(!$this->main_session_repeat){
				if($this->request->repeat_type=="weekly"){
					$days = implode(',',array_keys($this->request->days));
				}else{
					$days = null;
				}

				$this->main_session_repeat_id = DB::table('main_session_repeat')->insertGetId([
					'rule_id' => $this->rule->id,
					'repeat_type' => $this->request->repeat_type,
					'repeat_days' => $days,
					'start_date' => date('Y-m-d',strtotime($this->request->start_date)),
					'end_date' => date('Y-m-d',strtotime($this->request->end_date)),
					'district_id' => $this->request->district,
					'school_id' => $this->request->master_school,
					'grade_id' => $this->request->grade,
					'student_ids' => $this->request->student,
					'start_time' => $this->request->time,
					'student_per_session' => isset($this->student_per_session)?$this->student_per_session:null,
					'sp_holidays' => isset($this->request->sp_holiday) ? $this->request->sp_holiday: null,
					'payment_rate' => $this->request->payment_rate,
					'session_duration' => $this->request->duration,
				]);

				$this->main_session_repeat = true;
			}
			$this->inser_data_with_repeat['main_session_repeat_id'] = $this->main_session_repeat_id;
			$last_insert_session_id = DB::table('int_schools_x_sessions_log')->insertGetId($this->inser_data_with_repeat);
			$this->last_insert_session_id = $last_insert_session_id;
			return true;
		}catch(\Exception $e){
			$this->ex_error_msg = $e->getMessage();
			return false;
		}
	}

	public function getRule(){
		$rule = AssesmentRule::find($this->request->rule_id);
		return $rule;
	}

	public function save_session_without_repeat_db(){
		$obj = $this->map_inser_without_reapet();
		//map_insert();
		if($this->student_per_session){
			$this->save_data_with_student_per_session($this->inser_data_without_repeat_map);
			return $this->ex_error_msg==''?true:false;
		}else{
			$status = $this->map_insert();
			if(!$status){ return redirect()->back()->withError("something went wrong! please try again letter"); }
			$this->insert_student_to_int_slots_x_student_teacher($this->request->student);
			return true;
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

	public function save_db($table,$data){
		return DB::table($table)->insertGetId($data);
	}

	public function update_session_by_Id($id){
		$session = Session::findOrFail($id);
		list($start_time,$end_time) = $this->time_and_date();
		$data = $this->request->all();
		$data['district_id'] = $data['district'];
		$data['school_id'] = $data['master_school'];
		$data['grade_id'] = $data['grade'];
		$data['lesson_id'] = $data['lessons'];
		$data['student_ids'] = $data['student'];
		$data = $this->batch_unset(["district","master_school","grade","lessons","_token","certificate","start_date","certificate_required","student"],$data);
		$data['ses_start_time'] = $start_time;
		$data['ses_end_time'] = $end_time;
		$data['session_duration'] = $data['duration'];
		
		$status =  $session->update($data);
		
		$studentsids = explode(',',$this->request->student);
		foreach($studentsids as $sid){
			$s = DB::table('int_slots_x_student_teacher')->where('slot_id',$id)->where('student_id',$sid)->first();
			if(!$s){
				$student_row= DB::table('students')->where('id',$sid)->first();
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
						'slot_id' => $id,
						'student_id' => $student_row->id,
						'int_teacher_id' => $teacher,
						'int_school_id' => $data['school_id'],
						'created_date' => $today,
						'quiz_id' => $this->quiz_id,
					];
					DB::table('int_slots_x_student_teacher')->insert($insert_data);
				}
				//DB::table('int_slots_x_student_teacher')->insert(['slot_id',$id,'student_id'=>$sid])
			}
		}
		return redirect()->back()->withSuccess("session updated successfully...");
	}

	public function time_and_date(){
		$selected_date= isset($this->request->start_date)?$this->request->start_date: date("Y-m-d"); 
		$session_date_ymd=date('Y-m-d H:i:s', strtotime($selected_date));  // 2012-04-20
		$hh_mm = explode(":",$this->request->time);
		$start_time= date('Y-m-d H:i', strtotime('+' . $hh_mm[0] . 'hour +' . $hh_mm[1] . ' minutes', strtotime($session_date_ymd))); # add Hour, min.::session_start_time
		$end_time= date('Y-m-d H:i', strtotime('+'.$this->request->duration.'minutes', strtotime($start_time)));
		return [$start_time,$end_time];
	}
	public function batch_unset($keys,$data){
		foreach($keys as $k){
			unset($data[$k]);
		}
		return $data;
	}

	public function updateAndCreateSession(){
		if($this->request->repeat_type=="weekly"){
			$days = implode(',',array_keys($this->request->days));
		}else{
			$days = null;
		}

		$this->re_session->update([
					'rule_id' => $this->rule->id,
					'repeat_type' => $this->request->repeat_type,
					'repeat_days' => $days,
					'start_date' => date('Y-m-d',strtotime($this->request->start_date)),
					'end_date' => date('Y-m-d',strtotime($this->request->end_date)),
					'district_id' => $this->request->district,
					'school_id' => $this->request->master_school,
					'grade_id' => $this->request->grade,
					'student_ids' => $this->request->student,
					'start_time' => $this->request->time,
					'student_per_session' => isset($this->student_per_session)?$this->student_per_session:null,
					'assesment_day' => isset($this->request->assesment_day) ? $this->request->assesment_day : null,
					'sp_holidays' => isset($this->request->sp_holiday) ? $this->request->sp_holiday : null,
					'session_duration' => $this->request->duration,
					'payment_rate' => $this->request->payment_rate,
				]);
		$status = DB::table("int_schools_x_sessions_log")->where("main_session_repeat_id",$this->re_session->id)->delete();
		$status = DB::table('repeat_session_assesment_days')->where('repeat_session_id',$this->re_session->id)->delete();
		$this->save_with_repeat();
	}

	protected function get_holidays(){
		return Holiday::pluck('holiday_date')->toArray();
	}
}

?>