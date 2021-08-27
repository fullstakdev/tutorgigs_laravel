<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentRule extends Model
{
    use HasFactory;

    protected $table = 'assesment_rule';
    public $timestamps = false;
    protected $guarded = ['id'];


    public function lessons(){
        return \DB::table('master_lessons')->whereRaw('id IN ('.$this->lesson_ids.')')->select('id','name')->get();
    }

    public function school_list(){
        return \DB::table('schools')->where('district_id',$this->district_id)->get();
    }

    public function grade(){
         return \DB::table('school_permissions')->leftJoin('terms', 'school_permissions.grade_level_id','terms.id')->where('school_permissions.school_id', $this->school_id)->get();
    }
}
