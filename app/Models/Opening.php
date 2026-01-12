<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    use HasFactory;

  
    protected $fillable = [
        'title',
        'description',
        'location',
        'type',
        'salary',
        'currency',
        'application_deadline',
        'open_date',
        'company_id',
        'department_id',
        'status',
    ];

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class, 'opening_id', 'id');
    }
    
}