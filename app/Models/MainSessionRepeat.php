<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSessionRepeat extends Model
{
    use HasFactory;

    protected $table = 'main_session_repeat';
    protected $guarded = ['id'];
    private $repeat_types = [
        'weekly' => 'Weekly',
        'week_days' => 'Week Days(Mon to Fri)',
        '2_week' => 'Every 2 weeks',
        '3_week' => "Every 3 weeks",
        'month'  => 'Every Month',
        'year'   => 'Every Year'
    ];
    public function district(){
        return $this->hasOne(District::class,'id','district_id');
    }

    public function school(){
        return $this->hasOne(School::class,'SchoolId','school_id');
    }

    public function grade(){
        return $this->hasOne(Grade::class,'id','grade_id');
    }
    public function lesson(){
        return $this->hasOne(AssesmentRule::class,'id','rule_id');
    }

    public function getType(){
        return isset($this->repeat_types[$this->repeat_type]) ? $this->repeat_types[$this->repeat_type] :'';
    }

    public function sessions(){
        return $this->hasMany(Session::class,'main_session_repeat_id','id');
    }
}
