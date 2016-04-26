<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

    public $timestamps = false;

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function userConversations(){
        return $this->hasMany(UserConversation::class);
    }

}
