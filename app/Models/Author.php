<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function authors()
    {
        return $this->hasMany('App\Models\Post');
    }

    use HasFactory;
}
