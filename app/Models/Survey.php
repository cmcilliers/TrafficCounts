<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'intersection_id',
        'file_name',
        'survey_date',
        'am_survey_start',
        'am_survey_end',
        'pm_survey_start',
        'pm_survey_end',
        'midday_survey_start',
        'midday_survey_end',
        'am_ph_start',
        'pm_ph_start',
        'midday_ph_start',
        'phf_am',
        'phf_pm',
        'phf_midday',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    public function intersection () {
        return $this->hasOne(Intersection::class);
    }

    public function totals () {
        return $this->hasMany(Total::class);
    }

    public function busses () {
        return $this->hasMany(Bus::class);
    }

    public function heavys () {
        return $this->hasMany(Heavy::class);
    }

    public function mbts () {
        return $this->hasMany(MBT::class);
    }
}
