<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'master_lessons';
    public $timestamps = false;
    protected $guarded = ['id'];


    public function sessions(){
        return $this->hasMany(Session::class,'lesson_id','id');
    }

}
