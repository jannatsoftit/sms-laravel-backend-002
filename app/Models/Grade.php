<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_point',
        'letter_grade',
        'marks_interval',
        'school_id',
    ];

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }


}
