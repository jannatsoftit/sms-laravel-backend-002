<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamCategory extends Model
{
    use HasFactory;

    protected $fillable = [
         'title',
         'class_name',
         'section_name',
         'school_id',
    ];

     //protected $primaryKey = 'id';

    protected $guarded=[];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exam_category';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

    public function class_list(): HasMany
    {
        return $this->hasMany(ClassList::class);
    }

}
