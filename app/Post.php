<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function userdata()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
