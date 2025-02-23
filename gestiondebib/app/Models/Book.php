<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'author',
        'description',
        'publication_date',
    ];

    public function borrowings()
    {
        return $this->hasMany(\App\Models\Borrowing::class);
    }
}
