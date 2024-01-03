<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'schedule_id';
    protected $fillable=['schedule_id','department_id',
    'employee_id','date','shift_id','min_start_time','start_time','max_start_time','min_end_time','end_time','max_end_time',
    'break_time','accept_extra_hours','active','schedule_dl','created_at','updated_at'];
}