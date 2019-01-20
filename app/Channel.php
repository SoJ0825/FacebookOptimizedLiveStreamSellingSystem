<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Channel extends Model
{
    public function streaming_item()
    {
        $this->hasMany('App\StreamingItem');
    }
}