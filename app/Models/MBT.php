<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MBT extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'survey_id',
        'date',
        'time',
        'movement_1_total',
        'movement_2_total',
        'movement_3_total',
        'movement_4_total',
        'movement_5_total',
        'movement_6_total',
        'movement_7_total',
        'movement_8_total',
        'movement_9_total',
        'movement_10_total',
        'movement_11_total',
        'movement_12_total',
        'approach_1_in',
        'approach_1_out',
        'approach_2_in',
        'approach_2_out',
        'approach_3_in',
        'approach_3_out',
        'approach_4_in',
        'approach_4_out',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    public function survey () {
        return $this->hasOne(Survey::class);
    }
}
