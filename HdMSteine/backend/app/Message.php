<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{

    protected $fillable = [
        'message', 'sender_id', 'conversation_id'
    ];

    public function sender(){
        return $this->belongsTo(User::class);
    }

    public function conversation(){
        return $this->hasOne(Conversation::class);
    }
}
