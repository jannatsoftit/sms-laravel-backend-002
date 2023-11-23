<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_list';

    protected $guarded = [];

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

}
