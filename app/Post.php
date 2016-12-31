<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'path'
    ];

    // Query Scope
    public static function scopeOrderByName($query) {
        return $query->orderBy('title', 'desc')->get();
    }

    // Setting up a mutator to prevent empty content storing in database
    public function setContentAttribute($value) {
        if ($value == '') {
            $this->attributes['content'] = 'Nothing was entered so I entered this. Whoops!';
        }
        else {
            $this->attributes['content'] = $value;
        }
    }

    // Setting up an accessor because I don't like to see "!" in the titles
    public function getTitleAttribute($value) {
        if (strpos($value, '!') !== false) {
            $value = str_replace('!', '~', $value);
        }
        return $value;
    }
    
    // Setting up an accessor to create path for images
    public function getPathAttribute($value) {
        return '/images/' . $value;
    }
}
