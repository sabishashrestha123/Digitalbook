<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Feedback extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'faculty',
        'subject',
        'message',
        'rating',
        'status',
        'image',

    ];

    public function image(): Attribute
{
    return Attribute::make(
        get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
        set: function ($value) {
            // Only call store() if $value is an instance of UploadedFile
            if ($value instanceof \Illuminate\Http\UploadedFile) {
                return $value->store('feedback', 'public');
            }

            return $value; // assume it's already a stored string path
        }
    );
}


}
