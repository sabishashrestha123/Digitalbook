<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Semester extends Model
{
    protected $fillable = [
        'title',
        'book_category_id',
        'status'
    ];
    public function bookCategory(): BelongsTo
    {
        return $this->belongsTo(BookCategory::class);
    }
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
