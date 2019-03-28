<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";

    public function fromUser()
    {
        return $this->belongsTo('App\User', 'from_user');
    }

    public function toUser()
    {
        return $this->belongsTo('App\User', 'to_user');
    }
}
