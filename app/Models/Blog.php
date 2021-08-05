<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * Get the author that wrote the posts.
     */
    public function writer()
    {
       return $this->belongsTo(User::class, 'author', 'id');
    }
}