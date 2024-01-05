<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class EmployeeBankDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'bank_name',
        'bank_account_number',
        'IFSC_code',
        'pan_number',
        'user_id',
        'created_by',
        'updated_by',
    ];
}
