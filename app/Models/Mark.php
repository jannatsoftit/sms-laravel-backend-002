<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'total_marks',
        'grade_point',
        'class_name',
        'letter_grade',
        'section',
        'comment',
        'school_id',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function class_list(): HasMany
    {
        return $this->hasMany(ClassList::class);
    }

    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class);
    }

}
