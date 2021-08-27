<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $table = 'int_schools_x_sessions_log';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function district(){
        return $this->hasOne(District::class,'id','district_id');
    }

    public function school(){
        return $this->hasOne(School::class,'SchoolId','school_id');
    }

    public function grade(){
        return $this->hasOne(Grade::class,'id','grade_id');
    }

    public function Lesson(){
        return $this->hasOne(Lesson::class,'id','lesson_id');
    }

    public function students(){
        if($this->student_ids != null){
            return \DB::table('students')->whereRaw('id IN ('.$this->student_ids.')')->get();
        }
        return [];
       
    }
}
