<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_type',
        'name',
        'relationship',
        'contact_number_1',
        'contact_number_2',
        'created_by',
        'updated_by',
    ];
}
