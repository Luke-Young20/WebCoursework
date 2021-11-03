<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    
    public function authors()
    {
        return $this->belongsTo('App\Models\Author');
    }
    use HasFactory;
}
