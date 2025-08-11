<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'information_id',
        'company_name',
        'role',
        'work_start_yr',
        'work_end_yr',
        'job_description',
    ];
}
