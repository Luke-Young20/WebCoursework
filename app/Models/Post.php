<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    
    public function postCreators()
    {
        return $this->hasMany('App\Models\Author');
    }
    use HasFactory;
}
