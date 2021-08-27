<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'terms';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function sessions(){
        return $this->hasMany(Session::class,'grade_id','id');
    }

}
