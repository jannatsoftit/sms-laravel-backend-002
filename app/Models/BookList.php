<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookList extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'author',
        'copies',
        'available_copies',
        'school_id',
    ];

    // protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'book_list';

    public function school(): HasOne
    {
        return $this->hasOne(School::class);
    }
}
