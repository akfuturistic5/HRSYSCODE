<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'shift_id';
    protected $fillable=['shift_id','shift_name','min_start_time',
    'start_time','max_start_time','min_end_time','end_time','max_end_time',
    'break_time','recurring_shifts','repeat','weekdays','endon','indefinite','tags'
    ,'note','shift_dl','active','user_id','created_at','updated_at'];
}