<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'class',
        'subject_code',
        'paper',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subject';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

}
