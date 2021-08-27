<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\AssesmentRule;
use App\Dbhelper\CreateSession;
use App\Models\RepeatSessionAssesmentDay;

class TeacherController extends Controller
{
    public function storeRule(Request $request){
        $request->validate([
            'title' => 'required',
            'lessons'  => "required|array|min:1",
            "lessons.*"=> "required|integer|distinct",
        ],[
            'lessons.*.required' => 'lesson field not be empty',
            'lessons.*.distinct' => 'lesson not be duplicate'
        ]);
        $data = [
            'title' => $request->title,
            'lesson_ids' => implode(',', $request->lessons)
        ];
        AssesmentRule::create($data);
        return redirect()->back()->withSuccess('Course created successfully...');
        
    }

    public function listRules(){
        $data['title'] =  'Courses List';
        $data['ruleLists'] = AssesmentRule::paginate(10);
        return view('assesment_rule_list',$data);
    }

    public function ajax_laoding_data(Request $request)
    {
        $action = $request->input('action');
        switch($action) {
              case 'get_multiple_schools':
                $district_id = $request->district;
                $school_id   = $request->school_id;
        
                $query = DB::table('schools')->where('district_id', $district_id)->orderBy('SchoolName', 'ASC')->get();
    


                $select = '<option value="">Select a school</option>';
                foreach($query as $schools) {
                    $selec = '';
                        $select .= '<option value="'.$schools->SchoolId.'" >'.$schools->SchoolName.'</option>';
                }
              
                echo $select; exit();
                break;
                
                case 'get_school_grades':
             
                $school_id   = $request->school_id;
        
                if($school_id == 130)
                {
                        $query = DB::table('classes')->select('grade_level_common')->where('school_id', $school_id)->get()->distinct('grade_level_common');



                        $select = '';
                        foreach($query as $schools) {
                            $selec = '';
                                $select .= '<option value="'.$schools->grade_level_common.'" >'.$schools->grade_level_common.'</option>';
                        }
                }
                else{
                    $sql_grades = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $school_id)->get();
               
                    $select = '';
                foreach($sql_grades as $schools) 
                {
                   
                    $select .= '<option value="'.$schools->id.'" >'.$schools->name.'</option>';
                }
                   
            }
                echo $select; exit();
                break;
                
                case 'get_multiple_students':
             
                $school_id   = $request->school_id;
                $grade_id   = $request->grade_id;
        
                
                 $sql_students = DB::table('students_x_class')->join('students', 'students_x_class.student_id','students.id')
              ->select('students.first_name', 'students.last_name','students.id', 'students_x_class.student_id')
                              ->where('students_x_class.grade_level_id', $grade_id)->where('students.school_id',$school_id)
                              ->orderBy('students.first_name', 'asc')->get();
               
                    $select = '';
                    //echo "<pre>";
                    //print_r($sql_students->toArray());
                    $child_array = [];
                   /* for($i=0; $i<5; $i++){
                       $child_array_in = ["id" => $i, "text" => "Test".$i];
                       $child_array[] = $child_array_in;
                    }*/
                    $main_array = [];
                    foreach($sql_students as $row){
                        $st_name = $row->first_name." ".$row->last_name;
                        $child_array_in = ["id" =>$row->id,"text"=>$st_name];
                        $child_array[] = $child_array_in;

                    }
                    $json_array = [
                        "id" => "",
                        "text" => "All Student Group",
                        "children" =>  $child_array,
                    ];
                    $main_array[] = $json_array;
                   /* $second_array = [
                        "id" => "",
                        "text" => "ALL Student Group",
                        "children" =>  $child_array,
                    ];
                   $main_array[] =  $second_array;*/
                    echo(json_encode($main_array)); exit();
                    /*$string_json = '{
                   "id": "",
                   "text": "Student Group 1",
                   "children": [
                   
                   ';
                    foreach($sql_students as $row) 
                    {
                        $st_name = $row->first_name." ".$row->last_name;  
                        $select .= '<option value="'.$row->id.'" >'.$st_name.'</option>';
                        $name  = $row->first_name." ".$row->last_name;
                        $string_json .= '{id: "'.$row->id.'",text:"'.$name.'"}';
                    }
                    for($i=0; $i<5; $i++){
                        $string_json .= '{"id": "'.$i.'","text":"Test'.$i.'"},';
                    }
                    $string_json .= ']}';*/
               
                    echo $string_json; exit();
                break;
        }
    }

    public function deleteRule($id){
        $rule = AssesmentRule::findOrFail($id);
        if($rule->is_is_general){
            return redirect()->back();
        }
        $rule->delete();
        return redirect()->back()->withSuccess('Rule deleted successfully');
    }

    public function editUpdate(Request $request, $id){
        $rule = AssesmentRule::findOrFail($id);

        if($request->method()=='GET'){
            $data['title'] = 'Edit Rule';
            $data['rule'] = $rule;
            return view('edit_assesment_rule',$data);
        }else if($request->method()=='POST'){
            $request->validate([
                'title' => 'required',
                'lessons'  => "required|array|min:1",
                "lessons.*"=> "required|integer|distinct",
            ],[
                'lessons.*.required' => 'lesson field not be empty',
                'lessons.*.distinct' => 'lesson not be duplicate'
            ]);
            $data = [
                'title' => $request->title,
                'lesson_ids' => implode(',', $request->lessons)
            ];
            $rule->update($data);
            return redirect()->back()->withSuccess('Course updated successfully..');
        }
    }

    public function createSession(Request $request){
        if($request->method()=='GET'){
            $data['district_wise_school_list'] = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
            ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();
            $data['lesson_query'] = DB::table('master_lessons')->get();
            $data['title'] = 'Create Session';
            $data['courses'] = AssesmentRule::select('id','title')->get();
            return view('create_session',$data);
        }else if($request->method()=='POST'){
            //create helper class object to insert Creat session data
            $create_session_helper = new CreateSession($request);
            if($request->repeat_method==0){
                //insert data in to int_schools_x_sessions_log table
                $status = $create_session_helper->save_session_without_repeat_db();//$create_session_helper->map_inser_without_reapet()->map_insert();
                if(!$status){
                    return redirect()->back()->withError('Something went wrong please try again letter...');
                }
            }else{
                $create_session_helper->save_with_repeat();
            }
            return redirect()->back()->withSuccess('Session created successfully...');
        }
    }

    public function viewAssementDayDet($id){
        $as = DB::table('repeat_session_assesment_days')
              ->join('loc_district','loc_district.id','repeat_session_assesment_days.d_id')
              ->join('schools','schools.SchoolId','repeat_session_assesment_days.s_id')
              ->join('terms','terms.id','repeat_session_assesment_days.g_id')
              ->where('repeat_session_assesment_days.id',$id)
              ->select('repeat_session_assesment_days.assesment_date','repeat_session_assesment_days.st_ids','loc_district.district_name','schools.SchoolName','terms.name')
              ->first();
      return view('session.assesment_day_det',compact('as'));

    }
}
