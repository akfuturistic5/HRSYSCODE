<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'overtime_id';
    protected $fillable=['overtime_id','employee_id','date',
    'hours','description','status','approved_by','overtime_dl','created_at','updated_at'
    ];
}