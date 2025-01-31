<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'image',
        'status',
    ];

    public function setImageAttribute($value)
    {

        $this->attributes['image'] = $value->store('slider', 'public');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value); // Return the cover image URL if it exists
    }
}
