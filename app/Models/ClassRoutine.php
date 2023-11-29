<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassRoutine extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'class_name',
        'subject_name',
        'paper',
        'class_time',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_routine';

    protected $guarded = [];

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

}
