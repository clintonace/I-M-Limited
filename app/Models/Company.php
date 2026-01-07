<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [

        'company_name',
        'company_email',
        'country',
        'company_logo',
        'company_address',
        'company_phone',
        'company_size',
        'company_since',
        'company_description',
        'company_sector',
    ];




    /**
     * Get the company associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opening(): HasMany
    {
        return $this->hasMany(Opening::class, 'company_id', 'id');

    }


    
}
