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
        'class_name',
        'file',
        'comment',
        'total_marks',
        'grade_point',
        'letter_grade',
        'section',
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
