<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SchoolMagazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'magazine_name',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_magazine';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }
}
