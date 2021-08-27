<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\AssesmentRule;
use App\Models\Session;
use App\Dbhelper\CreateSession;
use App\Dbhelper\UpdateRepeatSession;
use App\Models\{
    MainSessionRepeat,
    RepeatSessionAssesmentDay,
};

class TeacherSessionController extends Controller
{
    public function index(Request $request){
        $data['schools'] = [];
        $data['grades'] = [];
        $data['district_wise_school_list'] = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
        ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();
       
        $sessions = Session::with('school','district','grade','Lesson');
        if(isset($request->district)){
           $data['schools'] = DB::table('schools')->where('district_id', $request->district)->orderBy('SchoolName', 'ASC')->get();
           $sessions = $this->GetSessionByDistric($sessions,$request->district);
        }
        if(isset($request->school)){
             $data['grades'] = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $request->school)->get();
             $sessions = $this->GetSessionBySchool($sessions,$request->school);
        }
        if(isset($request->grade)){
            $sessions = $this->GetSessionByGrade($sessions,$request->grade);
        }
        $sessions = $this->GetDataByOrder($sessions,'id');
        $sessions = $this->GetData($sessions);
        $data['title'] = 'Sessions List';
        $data['sessions'] = $sessions;
        return view('session.index',$data);
    }

    public function editSession(Request $request,$id){
        if($request->method()=='GET'){
            $session = Session::findOrFail($id);
            $data['session'] = $session;
            $data['district_wise_school_list'] = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
            ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();

            $data['lesson_query'] = DB::table('master_lessons')->get();
            $data['schools'] = DB::table('schools')->where('district_id', $session->district_id)->orderBy('SchoolName', 'ASC')->get();
            $data['grades'] = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $session->school_id)->get();
            $data['students'] = DB::table('students_x_class')->join('students', 'students_x_class.student_id','students.id')
              ->select('students.first_name', 'students.last_name','students.id', 'students_x_class.student_id')
                              ->where('students_x_class.grade_level_id', $session->grade_id)->where('students.school_id',$session->school_id)
                              ->orderBy('students.first_name', 'asc')->get();
            $data['title'] = 'Edit Session';
            return view('session.edit',$data);
        }else if($request->method()=='POST'){
            $updateSession = new CreateSession($request);
            $updateSession->update_session_by_Id($id);
            return redirect()->back()->withSuccess("session updated successfully...");

        }
    }

    public function calendarView(Request $request){
        return view('session.calendar');
    }

    public function sessionDetail(Request $request)
    {
        $ses_det = DB::table('int_schools_x_sessions_log')->where('id', $request->sid)->first();
        return view('session.session_detail', compact('ses_det'));
    }
    public function manage_sessions(Request $request)
    {
        $ses_det = Session::find($request->ses_id);
        return view('session.manage_session', compact('ses_det'));
    }

    public function repeatSession(Request $request){
        $data['title'] = 'Repeat Sessions';

        $data['schools'] = [];
        $data['grades'] = [];
        $data['district_wise_school_list'] = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
             ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();
        $sessions = MainSessionRepeat::with('school','district','grade','lesson');
        $nosessions = Session::with('school','district','grade','Lesson');
        if(isset($request->district)){
          $data['schools'] = DB::table('schools')->where('district_id', $request->district)->orderBy('SchoolName', 'ASC')->get();
          $sessions = $this->GetSessionByDistric($sessions,$request->district);
          $nosessions = $this->GetSessionByDistric($nosessions,$request->district);
        }
        if(isset($request->school)){
            $data['grades'] = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $request->school)->get();
            $sessions = $this->GetSessionBySchool($sessions,$request->school);
            $nosessions = $this->GetSessionBySchool($nosessions,$request->school);
        }
        if(isset($request->grade)){
           $sessions = $this->GetSessionByGrade($sessions,$request->grade);
           $nosessions = $this->GetSessionByGrade($nosessions,$request->grade);
        }
        
        $sessions = $this->GetData($sessions);
        $nosessions = $nosessions->whereRaw('main_session_repeat_id IS NULL');
        $nosessions = $this->GetData($nosessions,true,10);
        $data['repeatSessions'] = $sessions;
        $data['nosessions'] = $nosessions;
        return view('session.repeat_session',$data);
    }

    public function deleteRepeatSession($id){
        $repeatSession = MainSessionRepeat::findOrFail($id);
        $repeatSession->delete();
        return redirect()->back()->withSuccess("Repeat session deleted successfully");
    }

    public function edit($id){
        $session = MainSessionRepeat::findOrFail($id);
        $data['repeat_session'] = $session;
        $data['district_wise_school_list'] = DB::table('schools')->leftJoin('loc_district','loc_district.id', 'schools.district_id')->select('schools.district_id', 'loc_district.id', 'loc_district.district_name')
        ->where('schools.district_id','>',0 )->distinct('loc_district.district_name')->orderBy('loc_district.district_name', 'asc')->get();
        $data['lesson_query'] = DB::table('master_lessons')->get();
        $data['schools'] = DB::table('schools')->where('district_id', $session->district_id)->orderBy('SchoolName', 'ASC')->get();
        $data['grades'] = DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $session->school_id)->get();
        $data['students'] = DB::table('students_x_class')->join('students', 'students_x_class.student_id','students.id')
          ->select('students.first_name', 'students.last_name','students.id', 'students_x_class.student_id')
                          ->where('students_x_class.grade_level_id', $session->grade_id)->where('students.school_id',$session->school_id)
                          ->orderBy('students.first_name', 'asc')->get();
        $data['title'] = 'Edit Repeat Session';
        $data['courses'] = AssesmentRule::select('id','title')->get();
        $data['assesment_day'] = RepeatSessionAssesmentDay::where('repeat_session_id',$id)->select('assesment_day')->first();
        return view('session.repeat_session_edit',$data);
    }

    public function update(Request $request,$id){
        $repeatSession = MainSessionRepeat::findOrFail($id);
        $up = new CreateSession($request,$repeatSession);
        $up->updateAndCreateSession();
       return redirect()->back()->withSuccess('Session created successfully...');
    }

    protected function GetSessionByDistric($query,$district_id){
        return $query->where('district_id',$district_id);
    }
    protected function GetSessionBySchool($query,$school_id){
        return $query->where('school_id',$school_id);
    }
    protected function GetSessionByGrade($query,$grade_id){
        return $query->where('grade_id',$grade_id);
    }

    protected function GetDataByOrder($query,$colmn){
        return $query->orderByDesc($colmn);
    }
    protected function GetData($query,$paginate=false,$limit=10){
        if($paginate){
            return $query->paginate($limit);
        }else{
             return $query->get();
        }
       
    }

    public function deleteSession($id){
        $session = Session::findOrFail($id);
        $session->delete();
        return redirect()->back()->withSuccess('Session deleted successfully...');
    }

}
