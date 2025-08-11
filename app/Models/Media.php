<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'user_id',
        'information_id',
        'media_upload',
        'intro_video',
        'cv_upload',
    ];
}
