<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function sessions(){
        return $this->hasMany(Session::class,'school_id','SchoolId');
    }
}
