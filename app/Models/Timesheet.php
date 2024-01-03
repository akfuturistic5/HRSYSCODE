<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'timesheet_id';
    protected $fillable=['timesheet_id','employee_id','project_id',
    'date','hours','description','status','timesheet_dl','created_at','updated_at'];
}