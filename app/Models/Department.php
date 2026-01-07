<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function opening(): HasOne
    {
        return $this->hasOne(Opening::class, 'department_id', 'id');
    }
}
