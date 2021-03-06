<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserConversation extends Model
{
    protected $fillable = [
      'user_id', 'conversation_id'
    ];

    public $timestamps = false;

    public function users(){
        return $this->belongTo(User::class);
    }

    public function conversations(){
        return $this->belongsTo(Conversation::class);
    }
}
