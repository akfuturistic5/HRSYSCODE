<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracttype extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'contracttype_id';
    protected $fillable=['contracttype_id','contracttype_name','contracttype_dl','active'];
}