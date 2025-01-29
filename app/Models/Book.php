<?php

namespace App\Models;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'edition',
        'isbn',
        'cover_image',
        'file',
        'book_category_id',
        'status'
    ];

    public function bookCategory(): BelongsTo
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function setFileAttribute($value)
    {
        $this->attributes['file'] = $value->store('books', 'public');
    }

    public function getFileAttribute($value)
    {
        return asset('storage/' . $value);

    }

    /**
     * Set the cover image for the book (store the image and return its path).
     */
    public function setCoverImageAttribute($value)
    {

            $this->attributes['cover_image'] = $value->store('covers', 'public');

    }

    /**
     * Get the full URL of the cover image.
     */
    public function getCoverImageAttribute($value)
    {
        return asset('storage/' . $value);// Return the cover image URL if it exists
    }
}
