<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentFee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_no',
        'student',
        'invoice_title',
        'total_amount',
        'paid_amount',
        'status',
        'class_list_id',
        'school_id',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_fee';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }

    public function class_list(): HasOne
    {
        return $this->hasOne(ClassList::class);
    }

}
