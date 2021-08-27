<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'loc_district';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function sessions(){
        return $this->hasMany(Session::class,'district_id','id');
    }

}
