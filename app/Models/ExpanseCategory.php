<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ExpanseCategory extends Model
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
    protected $table = 'expense_category';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    } 
    
}
