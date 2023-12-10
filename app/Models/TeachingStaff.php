<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TeachingStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teaching_staff';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }
}
