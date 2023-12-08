<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Syllabus extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        // 'subject_name',
        // 'paper',
        // 'topic',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'syllabus';

    protected $guarded = [];

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

}
