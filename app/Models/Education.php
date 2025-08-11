<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'information_id',
        'degree',
        'degree_upload',
        'school',
        'education_start_yr',
        'education_end_yr',
        'educational_description',

    ];
}
