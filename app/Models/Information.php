<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'first_name',
        'last_name',
        'dob',
        'email',
        'phone',
        'bio',
        'department',
        'professional_skills',
        'hobbies',
        'country',
        'languages',
        'address',
        'experience_yr',
        'gender',
        'user_id',
        'profile_completion_percentage'
    ];

    /**
     * Get all of the workExperiences for the Information
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workExperiences(): HasMany
    {
        return $this->hasMany(Work::class, 'information_id', 'id');
    }

    /**
     * Get all of the educationalExperiences for the Information
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function educationalExperiences(): HasMany
    {
        return $this->hasMany(Education::class, 'information_id', 'id');
    }

    /**
     * Get all of the medias for the Information
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medias(): HasMany
    {
        return $this->hasMany(Media::class, 'information_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($info) {
            $info->workExperiences()->delete();
            $info->educationalExperiences()->delete();
            $info->medias()->delete();
        });
    }
}
