<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deleted extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'path',
        'original_name',
        'status',
        'txt',
        'batch',
    ];
}
