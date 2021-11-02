<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCreator extends Model
{
    
    public function Poster()
    {
        return $this->hasMany('App\Models\Post');
    }
    use HasFactory;
}
