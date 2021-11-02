<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    
    public function postCreator()
    {
        return $this->hasOne('App\Models\PostCreator');
    }
    use HasFactory;
}
