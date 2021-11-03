<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function commentAuthor()
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function commentPost()
    {
        return $this->belongsTo('App\Models\Post');
    }


    use HasFactory;
}
