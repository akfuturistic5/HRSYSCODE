<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'project_id';
    protected $fillable=['project_id','project_name','client_id',
    'deadline','start_date','end_date','rate','priority',
    'leader','teams','description','progress','project_dl','created_at','updated_at'];
}