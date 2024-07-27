<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    function tag()
    {
        return $this->hasMany(Tag::class);
    }
    use HasFactory;
}
