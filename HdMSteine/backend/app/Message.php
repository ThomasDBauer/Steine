<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{

    protected $fillable = [
        'message', 'sender_id', 'receiver_id'
    ];

    public function sender(){
        return $this->hasOne(User::class);
    }

    public function receiver(){
        return $this->hasOne(User::class);
    }
}
