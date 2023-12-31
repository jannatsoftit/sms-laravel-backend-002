<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use  App\Models\ClassList;

class OfflineExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_name',
        'class_name',
        'exam_start_time',
        'exam_end_time',
        'total_marks',
        // 'paper',
        // 'section',
        // 'subject_code',
        // 'date_time',
        // 'building_name',
        // 'room_number',
        'school_id',
    ];

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'offline_exam';

    protected $guarded = [];

    public function class_list(): HasMany
    {
        return $this->hasMany(ClassList::class);
    }

}
