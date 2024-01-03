<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wages extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'wages_id';
    protected $fillable=['wages_id','wages_name','wages_dl','active'];
}