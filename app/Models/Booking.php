<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_email',
        'candidate_email',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'link',
        'participants',
        'details',
    ];
}
