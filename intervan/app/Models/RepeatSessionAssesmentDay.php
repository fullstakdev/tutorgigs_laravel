<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepeatSessionAssesmentDay extends Model
{
    use HasFactory;

    protected $table = 'repeat_session_assesment_days';
    protected $guarded = ['id'];
}
