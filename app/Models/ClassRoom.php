<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_name',
        'room_number',
        'building_name',
        'area',
        'total_room',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_room';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }
}
